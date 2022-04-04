<?php
$element1 = "AC Milan gagal meraih poin penuh saat menjamu Bologna dalam laga Serie A. 
    Rossoneri ditahan imbang tanpa gol oleh Rossoblu.
    Matchday terakhir pekan ke-31 Liga Italia 2021/2022 menyajikan duel Milan vs Bologna. 
    Pertandingan berlangsung di San Siro, Selasa (5/4/2022) dini hari WIB.";

$element2 = "Jalanan di Jakarta mengalami kemacetan dalam beberapa waktu terakhir. 
Dirlantas Polda Metro Jaya Kombes Sambodo Purnomo Yogo mengatakan belum ada rencana penambahan 
ruas jalan untuk penerapan ganjil genap kendaraan.
Belum ada wacana (perluasan ganjil genap), kata Sambodo kepada wartawan, Senin (4/4/2022)";

$element3 = "Bulan Ramadan diisi dengan berbagai kegiatan yang baik untuk mencari pahala. 
Seperti wanita-wanita di Arab Saudi ini yang membagikan menu berbuka puasa.Tampak relawan 
membagikan makanan berbuka puasa di Riyadh, Arab Saudi, 3 April 2022."
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        Sibeux<span>&nbsp;News</span>
        <nav class="menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </nav>
    </header>
    <?php
    $title = array(
        "AC Milan Vs Bologna Imbang Tanpa Gol di San Siro",
        "Polisi Sebut Macet DKI Meningkat 18%, Personel Bakal Ditambah di Titik Rawan",
        "Aksi Relawan Wanita Bagikan Takjil di Arab Saudi"
    );
    ?>
    <div class="content">
        <div class="satu">
            <h4><?php echo $title[0]?></h4>
            <hr>
            <img src="img/1.jpeg" alt="">
            <p><?php echo $element1 ?></p>
        </div>
    </div>
</body>

</html>