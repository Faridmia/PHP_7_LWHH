<?php 

define("DB_HOST",'localhost');
define("DB_USER",'root');
define("DB_PASS",'');
define("DB_NAME",'mysql_extra');

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

$queries = [];
for($class=1;$class<=10;$class++){
    
    foreach(['A','B','C','D'] as $section){

        $queries[] = "SET @roll=0; UPDATE student SET roll=@roll:=@roll+1 WHERE class={$class} AND section = '{$section}';";
        

    }

}

$resutl = mysqli_multi_query($conn,join('',$queries));

if(mysqli_error($conn)){
    echo mysqli_error($conn);
}

