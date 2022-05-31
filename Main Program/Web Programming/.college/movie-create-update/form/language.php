<?php

const host = "localhost";
const user = "root";
const pass = "";
const db = "sakila";

// koneksi ke DB
$conn = mysqli_connect(host, user, pass, db);
if ($conn->connect_error) {
    http_response_code(500);
    die("Koneksi gagal: " . mysqli_connect_error());
}

// ambil data langauge 
$query = "SELECT * FROM language";
$sql = $conn->query($query);
$data = [];
while ($row = $sql->fetch_assoc()) {
    array_push($data, $row);
}

// tampilkan dalam format json
header("Content-Type: application/json");
echo json_encode($data);