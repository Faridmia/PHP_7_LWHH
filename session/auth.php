<?php
    session_start([
        'cookie_lifetime'=>300
    ]);

    $error = false;

    if(isset($_POST['username']) && ($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if('admin' == $username && '9b563ac174cfb399c256a983f7ec2fcbfc64f9d2c7e8848ed18934fa65b59e61' == hash("sha256",$password)){
            $_SESSION['loggedin'] = true;
        }else{
            $error = true;
            $_SESSION['loggedin'] = false;
        }
    }

    if(isset($_POST['logout'])){
        $_SESSION['loggedin'] = false;
        session_destroy();
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
    

    <h2>Login Form</h2>
    <h3>
        <?php 
            if(true == $_SESSION['loggedin']){
                echo "Hello Admin Welcome!";
            }else{
                echo "hello stronger login below..";
            }
        ?>
    </h3>
    <?php 

            if($error){
                echo "<blockquote>username and password didn,t match</blockquote>";
            }
           //echo hash("sha256","farid");
    ?>
    <?php if($_SESSION['loggedin'] == false) : ?>
    <form action="#" method="post">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" id="username"/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="password" name="password" id="password"/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="login"/></td>
            </tr>
        </table>
    </form>
    <?php else: ?>
        <form action="auth.php" method="post">
        <table>
            <input type="hidden" name="logout" value="1"/>
            <tr>
                <td><input type="submit" name="submit" value="Logout"/></td>
            </tr>
        </table>
    </form>
    <?php endif;?>
</body>
</html>