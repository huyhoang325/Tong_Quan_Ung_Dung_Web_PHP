<?php
if(isset($_POST['submit'])){
    $usd = $_POST['usd'];
    $rate = 23000;
    echo $usd * $rate . " VND";
}