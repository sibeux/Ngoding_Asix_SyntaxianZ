<?php

const host = 'localhost';
const user = 'root';
const password = '';
const database = 'sakila';

// OOP
class Film{
    private $conn;

    function __construct(){
        // Create connection
        $this->conn = new mysqli(host, user, password, database);
        // Check connection
        if ($this->conn->connect_error) {
            http_response_code(500);
            die("Connection failed: " . $this->conn->connect_error);
}
    }

    function __destruct()
    {
        // tutup koneksi
        $this->conn->close();
    }

    // function read(){
    //     // ambil data film
    //     $begin = isset($_GET['begin']) ? $_GET['begin'] : 0;
    //     $query = "SELECT * FROM film LIMIT {$begin}, 6";
    //     $sql = $this->conn->query($query);
    //     $data = [];
    //     while ($row = $sql->fetch_assoc()) {
    //         array_push($data, $row);
    //     }

    //     // tampilkan dalam format json
    //     header("Content-Type: application/json");
    //     echo json_encode($data);
    //         }

    function create($data){
        foreach ($data as $key => $value) {
            $value = is_array($value) ? trim(implode(',', $value)) : trim($value);
            $data[$key] = strlen($value) > 0 ? $value : null;
        }
        // tambahkan data film baru
        $query = "INSERT INTO film VALUES(NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
        $sql = $this->conn->prepare($query);
        $sql->bind_param(
            "ssiiiididss", 
            $data['title'], 
            $data['description'], 
            $data['release_year'], 
            $data['language_id'], 
            $data['original_language_id'], 
            $data['rental_duration'], 
            $data['rental_rate'], 
            $data['length'], 
            $data['replacement_cost'], 
            $data['rating'], 
            $data['special_features']);
            try{
                $sql->execute();
            } catch (Exception $e) {
                $sql->close();
                http_response_code(500);
                die($e->getMessage());
            }
            $film_id = $sql->insert_id;
            $sql->close();
    }
}

$film = new Film();
switch ($_GET['action']) {
    case 'create':
        $film->create($_POST);
        break;
    default:
        // $film->read();
        break;
}
// $film->read();