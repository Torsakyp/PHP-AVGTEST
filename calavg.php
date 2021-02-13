<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title> Test Find Avg </title>
    </head>
    <body>
        <h2> Calculate Average Program </h2> <br>
        <form method="POST">
        Number 1 <input type="text" name="num1" autofocus><br><br>
        Number 2 <input type="text" name="num2" autofocus><br><br>
        Number 3 <input type="text" name="num3" autofocus><br><br>
        Number 4 <input type="text" name="num4" autofocus><br><br>
        Number 5 <input type="text" name="num5" autofocus><br><br>
        
        <input type="submit" value="submit">
        </form>

        <?php
            $number1 = $_POST["num1"];
            $number2 = $_POST["num2"];
            $number3 = $_POST["num3"];
            $number4 = $_POST["num4"];
            $number5 = $_POST["num5"];        
            if(isset($number1)){
                $sum = $number1 + $number2 + $number3 + $number4 + $number5;
                $avg = ("$number1" + "$number2" + "$number3" + "$number4" + "$number5")/5 . "<br>";
                echo "<br>";
                echo "Result" . "<br>";
                echo "Sum = " . $sum . "<br>";
                echo "Average = " . $avg;
            }
            else {
                echo "<br>";
                echo "NO Input" ;
            }
        ?>
    </body>
</html>