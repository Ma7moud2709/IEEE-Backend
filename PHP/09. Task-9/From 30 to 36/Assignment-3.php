<?php
$admins = ["Osama", "Ahmed", "Sayed"];


// Input Name "Osama"

// Needed Output
// "The Request Method Is Post And Username Is Osama"
// "This Username Osama Is Admin"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 3</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="user">
        <input type="submit" value="Send">
    </form>

    <?php
    echo "<br>";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user = $_POST['user'];
        echo "The Request Method Is Post And Username Is $user";

        echo "<br>";

        if (in_array($user, $admins)) {
            echo "This Username $user Is Admin";
        }
        echo '';
    }
    ?>
</body>

</html>