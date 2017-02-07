<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Tip Calculator</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>


<form name = form action = myCal.php method = get id = form>
    <p name = title id = title>Tip Calculator
    </p>
    <lable>Bill subtotal: </lable>
    <input type = "text" name = "money" value =
        <?php
        if(isset($_GET["money"])) {
            echo $_GET["money"];
        }
        else echo 0;
        ?>
    >
    <br>
    <label>Tip percentage:</label>
    <br>
    <?php
    function generate_radio($array){
        $num = count($array);
        for($i = 0; $i < $num; $i++){
            echo "<input type = \"radio\" name = \"tip\" value = " . $array[$i];
            if($_GET[tip] == $array[$i]) {
                echo " checked ";
            }
            echo " >" . $array[$i] * 100 . "%" . "\n\t";
        }
    }
    $default_radio = array(0.1, 0.15, 0.20);
    generate_radio($default_radio);
    ?>
    <br>
    <lable>Split: </lable><input type = "text" name = "split" value =
    <?php
    if(isset($_GET["split"])) {
        echo $_GET["split"];
    }
    else echo 1;
    ?>
    >
    <br>
    <input type = "submit" name = "submit" value = "submit">
    <br>
    <br>

<?php
    if(isset($_GET["submit"])){
        $money = 0;
        $tip = 0;
        //make sure that users enter the valid input
        if($_GET["money"] <= 0 || !isset($_GET["tip"]) || $_GET["split"] < 0) {
            if ($_GET["money"] <= 0) {
                echo "Please make sure that Bill value is > 0 " . "<br><br>";
            }
            if(!isset($_GET["tip"])){
                echo "Please pick from one of those tip rate options" . "<br><br>";
            }
            if ($_GET["money"] < 0) {
                echo "Splitting money to negative number of people is invalid";
            }
            return;
        }

        $money = $_GET["money"];
        $tip = $_GET["tip"];
        $split = $_GET["split"];
        if($split == 0){
            echo "Total Tip: 0". "<br><br>";
            echo "Each Tip: 0". "<br><br>";
            echo "Total: " . $money;
        }
        else {
            $result = $money * $tip;
            echo "Total Tip: " . $result . "<br><br>";
            echo "Each Tip: " . $result / $split . "<br><br>";
            echo "Total: " . ($result + $money);
        }
    }

?>

</form>

</body>
</html>