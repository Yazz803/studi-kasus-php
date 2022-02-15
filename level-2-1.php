<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <?php
        $angka_awal = $angka_akhir = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $angka_awal = $_POST['angka_awal'];
            $angka_akhir = $_POST['angka_akhir'];
        }
    ?>
    <title>Document</title>
</head>
<body>
    
    <div class="form">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <input type="text" name="angka_awal">
            <input type="text" name="angka_akhir">
            <input type="submit" value="Kirim">
        </form>
    <h3><?php echo"Jika angka awal $angka_awal dan akhir $angka_akhir, maka akan menginput data secara berurutan"; ?></h3><br>
    <?php
    for($i=$angka_awal;$i<=$angka_akhir;$i++){
        echo "{$i}<br>";
    }if($i>=$angka_akhir){
        echo "<h3>Nilai yang terbesar adalah $angka_akhir</h3>";
    }

    ?>
    </div>

</body>
</html>