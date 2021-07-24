<?php 
    define("DB_HOST",'localhost');
    define("DB_USER",'root');
    define("DB_PASS",'');
    define("DB_NAME",'mysql_extra');
    
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    $stmt = $mysqli->prepare("INSERT INTO newstudents(name,sex,class,section,roll) values(?,?,?,?,?);");
    $name = ''; $sex = ''; $class = ''; $section = ''; $roll = '';
    $stmt->bind_param("ssisi",$name,$sex,$class,$section,$roll);

    $csv_data = array_map("str_getcsv",file('babynames-clean.csv'));
    shuffle($csv_data);
    // echo '<pre>';
    // print_r($csv_data);
    // echo '</pre>';
   $sections = ['A','B','C','D'];
   $_students = [];

   for($i = 0;$i < 1000;$i++){

        $name = $csv_data[$i][0];
        $sex = $csv_data[$i][1] == 'boy' ? "M" : "F";
        $class = rand(1,10);
        $section = $sections[array_rand($sections)];

        $_students["{$class}{$section}"][] = 1;

        $roll = count($_students["{$class}{$section}"]);

        printf("%s:%s:%s:%s:%s \n",$name,$sex,$class,$section,$roll);
        $stmt->execute();
       
   }
   