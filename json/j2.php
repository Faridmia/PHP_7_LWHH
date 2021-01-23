<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>json data sending</title>
</head>
<body>

    <h4>PHP To Javascript</h4>
    <button type="submit" id="button" value="Show Something">button</button>


</body>
    <script>
        <?php
        $data = [
            'fname' => 'farid',
            'lname' => 'mia',
            'email' => 'mdfarid7830@gmail.com'
        ];
    ?>
    
         let data = <?php echo json_encode($data); ?>

        document.getElementById("button").addEventListener("click",function(){
           // alert(data.email);
           alert(data["fname"]);
        });
    </script>

</html>