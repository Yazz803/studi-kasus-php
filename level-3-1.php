<?php

$a = $b = $c = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    $max = max($a, $b, $c);
    $min = min($a, $b, $c);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="form">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <input type="text" name="a">
            <input type="text" name="b">
            <input type="text" name="c">
            <input type="submit" value="kirim">
            <br><br>
            <h3>
                <?php
            
                    echo "Jika angka pertama $a, kedua $b, dan ketiga $c, maka urutan dari yang terkecil hingga terbesar adalah<br><br>";
                    echo "$min<br>";
                    if ($a == $min && $b == $max) {
                        echo "$c<br>";
                    }elseif ($b == $min && $c == $max){
                        echo "$a<br>";
                    }elseif ($a == $min && $c == $max){
                        echo "$b<br>";
                    }elseif ($c == $min && $a == $max){
                        echo "$b<br>";
                    }elseif ($c == $min && $b == $max){
                        echo "$a<br>";
                    }
                    echo "$max<br>";

                ?>
            </h3>
        </form>
    </div>
</body>
</html>
