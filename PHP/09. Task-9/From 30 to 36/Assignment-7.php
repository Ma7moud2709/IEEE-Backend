<?php
$num_one = $num_two = $op = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num_one = $_POST['num1'];
    $num_two = $_POST['num2'];
    $op = $_POST['operation'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operations</title>
</head>

<body>
    <form action="" method="post">
        <div>
            <label for="num1">1st Number</label>
            <input type="text" name='num1' value="<?php echo $num_one ?>">
        </div>
        <br>
        <div>
            <label for="num2">2nd Number</label>
            <input type="text" name='num2' value="<?php echo $num_two ?>">
        </div>
        <br>
        <div>
            <label for="operation">Operation</label>
            <input type="text" name='operation' value="<?php echo $op ?>">
        </div>
        <br>
        <input type="submit" value="Calc">
        <br>
        <br>
        <?php
        echo "Result: ";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $num_one = $_POST['num1'];
            $num_two = $_POST['num2'];
            $op = $_POST['operation'];

            switch ($op) {
                case '+':
                    echo $num_one + $num_two;
                    break;
                case '-':
                    echo $num_one - $num_two;
                    break;
                case '/':
                    echo "<br>" . "Integer: " . (int)($num_one / $num_two);
                    echo "<br>";
                    echo "Mod: " . $num_one % $num_two;
                    break;
                case '*':
                    echo $num_one * $num_two;
                    break;
                default:
                    echo "Unknown Operation";
                    break;
            }
        }
        ?>
    </form>
</body>

</html>