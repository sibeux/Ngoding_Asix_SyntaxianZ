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

    function read(){
        // ambil data film
        $begin = isset($_GET['begin']) ? $_GET['begin'] : 0;
        $query = "SELECT * FROM film LIMIT {$begin}, 6";
        $sql = $this->conn->query($query);
        $data = [];
        while ($row = $sql->fetch_assoc()) {
            array_push($data, $row);
        }

        // tampilkan dalam format json
        header("Content-Type: application/json");
        echo json_encode($data);
            }

    function create(){
        // tambahkan data film baru
        $query = "INSERT INTO film VALUES(NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
        $sql = $this->conn->prepare($query);
        $sql->bind_param(
            "ssiiiididss", 
            $title, 
            $description, 
            $release_year, 
            $language_id, 
            $original_language_id, 
            $rental_duration, 
            $rental_rate, 
            $length, 
            $replacement_cost, 
            $rating, 
            $special_features);
            try{
                $sql->execute();
            } catch (Exception $e) {
                http_response_code(500);
                die($e->getMessage());
            }
    }
}

$film = new Film();
switch ($_GET['action']) {
    case 'create':
        $film->create();
        break;
    default:
        $film->read();
        break;
}
$film->read();