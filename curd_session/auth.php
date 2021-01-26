<?php
    session_start([
        'cookie_lifetime'=>300
    ]);

    $error = false;
    $filename = "C:\\xampp\\htdocs\\oop\\curd_session\\data\\db.txt";//directory te double quote dile kaj kore na
    if(is_readable($filename)){
        $fp = fopen($filename, "w");

    }
   
    
    //print_r($fp);
        $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
    
   

    if( $username && $password){
        $_SESSION['loggedin'] = false;
        $_SESSION['user'] = false; 
        while($data = fgetcsv($fp)){
            
                $username = $_POST['username'];
                $password = $_POST['password'];
        
                if($data[0] == $username && $data[1] == hash("sha256",$password)){
                    $_SESSION['loggedin'] = true;
                    $_SESSION['user'] = $username;
                    header("location:index.php");
                }
        }
        if(!$_SESSION['loggedin']){
            $error = true;
        }
    }


    if(isset($_POST['logout'])){
        $_SESSION['loggedin'] = false;
        $_SESSION['user'] = false; 
        session_destroy();
        header("location:index.php");
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