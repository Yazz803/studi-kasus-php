<?php

$bil1 = $bil2 = $bil3 = $bil4 = $hasil = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $bil3 = $_POST['bil3'];
    $bil4 = $_POST['bil4'];
    $hasil = max($bil1, $bil2, $bil3, $bil4);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Level 1.3</title>
</head>
<body>
    <div class="form" id="level1-1">
        <h3>Mencari 4 bilangan bulat yang terbesar</h3><br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input type="text" name="bil1" placeholder="masukan bilangan pertama">
            <input type="text" name="bil2" placeholder="masukan bilangan kedua">
            <input type="text" name="bil3" placeholder="masukan bilangan ketiga">
            <input type="text" name="bil4" placeholder="masukan bilangan keempat">
            <input type="submit" value="kirim!" name="kirim1">
            <br><br>
            <h3 style="text-align:left;"><?php echo "Hasil bilangan terbesar dari $bil1 $bil2 $bil3 dan $bil4 =  $hasil"; ?></h3>
        </form>
    </div>
</body>
</html>