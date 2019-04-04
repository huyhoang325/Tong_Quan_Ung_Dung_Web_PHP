<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Draw</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <form method="post">
        <div class="btn-group">
        <button type="submit" class="btn btn-primary" name="drawHcn">Vẽ Hình Chữ Nhật</button>
        <button type="submit" class="btn btn-primary" name="drawTgc">Vẽ Hình Tam Giác Cân</button>
        <button type="submit" class="btn btn-primary" name="drawTgd">Vẽ Hình Tam Giác Đều</button>
        </div>
    </form>
</div>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (isset($_POST["drawHcn"])) {
            echo "<br><br>Hình chữ nhật chiều rộng 3 chiều dài 7: <br><br>";

            for ($i = 0; $i < 3; $i++) {
                for ($j = 0; $j < 7; $j++) {
                    echo " * ";
                }
                echo "<br>";
            }
            echo "<br><br><br>";
        }
        if (isset($_POST["drawTgc"])) {
            echo "<br><br>Tam giác cân cạnh bằng 5: <br><br>";

            for ($i = 0; $i < 5; $i++){
                for ($j = 0; $j <= $i; $j++) {
                    echo " * ";
                }
                echo "<br>";
            }

            echo "<br><br><br>";

            for ($i = 5; $i > 0; $i--) {
                for ($j = 0; $j < $i; $j++) {
                    echo " * ";
                }
                echo "<br>";
            }

            echo "<br><br><br>";

            for ($i = 0; $i < 5 ; $i++) {
                for ($j = 0; $j < 5 ; $j++) {
                    if ($j >= $i) {
                        echo "*";
                    } else
                        echo "&nbsp;";
                }
                echo "<br>";
            }

            echo "<br><br><br>";

            for ($i = 5; $i > 0; $i--){
                for ($j = 0; $j <= 5; $j++){
                    if($j < $i){
                        echo "&nbsp;";
                    } else
                        echo '*';
                }
                echo '<br>';
            }
        }

        if (isset($_POST["drawTgd"])) {
            echo "<br><br>Tam giác đều: <br><br>";

            for ($i = 0; $i < 5 ; $i ++){
                for( $j = 0 ; $j < 5-$i; $j ++) {
                    echo "&nbsp;";
                }
                for($k = 0; $k <=$i ; $k++){
                    echo "*&nbsp;";}
                echo "<br>";
            }
        }
    }
?>
</body>
</html>