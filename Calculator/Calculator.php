<html>
<head>
    <title>Simple PHP Calculator</title>
</head>
<body>
<form method='post'>
    <input type='text' name='value1'></br>
    <select name='action'></br>
        <option>Addition</option>
        <option>Subtraction</option>
        <option>Multiplication</option>
        <option>Division</option>
    </select></br>
    <input type='text' name='value2'></br>
    <input type="submit" name="submit" value='Calculate Now'></form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $value1 = $_POST['value1'];
        $value2 = (int)$_POST['value2'];
        $action = $_POST['action'];
    }
    if (is_numeric($value1) && is_numeric($value2)) {

        if ($action == 'Addition') {
            echo "<b>Result: </b>";
            echo $value1 + $value2;
        }
        if ($action == 'Subtraction') {
            echo "<b>Result: </b>";
            echo $value1 - $value2;
        }
        if ($action == 'Division') {
            try {
                if ($value2 === 0){
                    throw new Exception("Can't division by 0");
                }
            echo "<b>Result: </b>";
            echo $value1 / $value2;
            }catch (Exception $e){
                echo "Message: ".$e->getMessage();
            }
        }

        if ($action == "Multiplication") {
            echo "<b>Result:</b><br>";
            echo $value1 * $value2;
        }
    } else {
        echo "You must input number";
    }
}
?>
</body>
</html>