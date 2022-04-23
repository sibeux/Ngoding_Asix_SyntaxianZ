<?php
include_once("db.php");
if(isset($_GET["id"])) {
    $id = $_GET["id"];

    $query = "SELECT * from film WHERE film_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$id]);
    $result = $stmt->fetch();
    var_dump($result);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div>
        <form>
            <div class="mb-3">
                <label for="film_id" class="form-label">film_id</label>
                <input type="text" class="form-control" id="film_id" value="<?=$result["film_id"]?>">
                <div id="film_id" class="form-text"></div>
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input type="text" class="form-control" id="title" value="<?=$result["title"]?>">
                <div id="title" class="form-text"></div>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <input type="text" class="form-control" id="description" value="<?=$result["description"]?>">
                <div id="description" class="form-text"></div>
            </div>

            <div class="mb-3">
                <label for="release_year" class="form-label">release_year</label>
                <input type="text" class="form-control" id="release_year" value="<?=$result["release_year"]?>">
                <div id="release_year" class="form-text"></div>
            </div>

            <div class="mb-3">
                <label for="special_features" class="form-label">special_features</label>
                <input type="text" class="form-control" id="special_features" value="<?=$result["special_features"]?>">
                <div id="special_features" class="form-text"></div>
            </div>

            <div class="mb-3">
                <label for="last_update" class="form-label">last_update</label>
                <input type="text" class="form-control" id="last_update" value="<?=$result["last_update"]?>">
                <div id="last_update" class="form-text"></div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>