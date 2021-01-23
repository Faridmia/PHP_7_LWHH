<?php

    session_start();

    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['loggedin']);
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
    if( !isset($_SESSION['loggedin']) ){
?>
    <form action="" method="post">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="user"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"/></td>
            </tr>
        </table>
    </form>
    <?php 
    }else{
        echo 'hello john you are loggedin';
    }

if(isset($_POST['submit'])){
        if('john' == $_POST['user'] && 'hello' == $_POST['pass']){

            $_SESSION['loggedin'] = 1;

            echo 'successfull';
        }
    }
?>

</body>
</html>