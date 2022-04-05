<?php

require_once "./db.php";

$typing = $_GET["typing"];


$sql = "SELECT * FROM anime
            WHERE 
        title LIKE '%{$typing}%'
";

$result = $db->query($sql);

while ($row =  $result->fetch_assoc()) {
    $genre = explode(" ", $row['genre']);
    echo "
    <div class='col col-lg-6 col-xl-4'>
                        <div class='product-container'>
                            <div class='product-card'>
                                <div class='product-image'>
                                    <img src='img/{$row['title']}.jpg' alt='' />
                                </div>
                                <div class='product-body'>
                                    <h3 class='product-title'>{$row['title']}</h3>
                                    <div class='product-price'>{$row['desk']}
                                    </div>
                                    <div class='product-discount'>
                                    
                                        // <span class='Sci-FI'>sci-fi</span>
                                        // <span class='Fantasy'>fantasy</span>
                                    </div>
                                    <div class='product-rates'>
                                        <span class='yellow-star'>&#9733;</span>
                                        <span class='yellow-star'>&#9733;</span>
                                        <span class='yellow-star'>&#9733;</span>
                                        <span class='yellow-star'>&#9733;</span>
                                        <span>&#9733;</span>
                                        4/5
                                    </div>
                                    <div class='btn'>
                                        <i class='bx bxs-edit-alt'></i>
                                        <i class='bx bxs-trash'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
    ";
}
