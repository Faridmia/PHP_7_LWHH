<?php require_once 'function.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 500px;
            height: 600px;
        }
    </style>
</head>
<body>
    <?php 

        $fname  ='';
        $lname  ='';
        $checked = '';

        if(isset($_REQUEST['lbl']) && $_REQUEST['lbl'] == 1){
            $checked = "checked";
        }
    
        if(isset($_REQUEST['submit']) && !empty( $_REQUEST['submit'] )){
            $name = $_POST['fname'];

            $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }
    
    ?>

    <form action="" method="post">

        <table align="center">
            <tr>
                <td>Firstname</td>
                <td><input type="text" name="fname" value="<?php echo $fname;?>"/> </td>
            </tr>
            <tr>
                <td>lastname</td>
                <td><input type="text" name="lname" value="<?php echo $lname;?>" /></td>
            </tr>
            <tr>
               
                <td><input type="checkbox" name="lbl" value="1" <?php echo $checked;?>/>Some Checkbox</td>
            </tr>
            <tr>
                <td>checkbox</td>
                <td>
                    <input type="checkbox" name="fruit[]" value="bangla" <?php isfruitChecked("bangla");?>/>bangla<br/>
                    <input type="checkbox" name="fruit[]" value="english" <?php isfruitChecked("english");?>/>english<br/>
                    <input type="checkbox" name="fruit[]" value="urdu" <?php isfruitChecked("urdu");?>/>urdu<br/>
                    <input type="checkbox" name="fruit[]" value="arabic" <?php isfruitChecked("arabic");?>/>arabic<br/>
                    <input type="checkbox" name="fruit[]" value="farsi" <?php isfruitChecked("farsi");?>/>farsi<br/>
                </td>
                
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit"/>
                </td>
               
            </tr>
        </table>

    </form>


</body>
</html>