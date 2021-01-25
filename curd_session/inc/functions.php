<?php 
    define("DB_NAMEFARID","C:\\xampp\\htdocs\\oop\\crud_project\\data\db.txt");
    function seed(){

        $data = array(
            array(
                'id' => 1,
                'fname' => 'farid',
                'lname' => 'mia',
                'roll' => 10
            ),
            array(
                'id' => 2,
                'fname' => 'kamal',
                'lname' => 'mia',
                'roll' => 10
            ),
            array(
                'id' => 3,
                'fname' => 'jamal',
                'lname' => 'mia',
                'roll' => 10
            ),
            array(
                'id' => 4,
                'fname' => 'nikhil',
                'lname' => 'mia',
                'roll' => 10
            ),
            array(
                'id' => 5,
                'fname' => 'rubel',
                'lname' => 'mia',
                'roll' => 10
            ),
            array(
                'id' => 6,
                'fname' => 'munsur',
                'lname' => 'mia',
                'roll' => 10
            ),
            array(
                'id' => 7,
                'fname' => 'harun',
                'lname' => 'mia',
                'roll' => 10
            ),
        );

        $serializeData = serialize($data);
        file_put_contents(DB_NAMEFARID,$serializeData,LOCK_EX);
    }

    function generateReport(){
        $serializeData = file_get_contents(DB_NAMEFARID);
        $students = unserialize($serializeData);?>

        <table border="1px">
            <tr>
                <td>Name</td>
                <td>Roll</td>
                <td>Action</td>
            </tr>
           
            <?php 
                foreach($students as $student){ ?>
                 <tr>
                   <td><?php printf("%s %s",$student['fname'],$student['lname']);?></td>
                   <td><?php printf("%s",$student['roll']);?></td>
                   <td><?php printf('<a  href="index.php?task=edit&id=%s">Edit</a> | <a class="delete" href="index.php?task=delete&id=%s">Delete</a>',$student['id'],$student['id']);?></td>
                   </tr>
                <?php }
            ?>
            
        </table>
    <?php }

    function addStudent($fname,$lname,$roll){
        $found = false;
        $serializeData = file_get_contents(DB_NAMEFARID);
        $students = unserialize($serializeData);

        foreach($students as $student){
            if($student['roll'] == $roll){
                $found = true;
                break;
            }
        }

        if(!$found){
            // $newId = count($students) + 1;
            $newId = getNewId($students);


            $student = array(
                'id' => $newId,
                'fname' => $fname,
                'lname' => $lname,
                'roll' => $roll
            );

            array_push($students,$student);

            $serializeData = serialize($students);
            file_put_contents(DB_NAMEFARID,$serializeData,LOCK_EX);

            return true;

        }

        return false;
        

    }

    function getStudent($id){
       
        $serializeData = file_get_contents(DB_NAMEFARID);
        $students = unserialize($serializeData);

        foreach($students as $student){
            if($student['id'] == $id){
               return $student;
            }
        }

        return false;


    }

    function updateStudent($id,$fname,$lname,$roll){
        $found = false;
        $serializeData = file_get_contents(DB_NAMEFARID);
        $students = unserialize($serializeData);

        foreach($students as $student){
            if($student['roll'] == $roll && $student['id'] != $id){
                $found = true;
                break;
            }
        }

        if(!$found){
            $students[$id-1]['fname'] = $fname;
            $students[$id-1]['lname'] = $lname;
            $students[$id-1]['roll'] = $roll;
    
            $serializeData = serialize($students);
            file_put_contents(DB_NAMEFARID,$serializeData,LOCK_EX);

            return true;
        }
       
        return false;


    }


    function deleteStudent($id){

        $serializeData = file_get_contents(DB_NAMEFARID);
        $students = unserialize($serializeData);

        unset($students[$id-1]);
       
        foreach($students as $offset => $student){
            if($student['id'] == $id){
               unset($student[$offset]);
            }
        }

        $serializeData = serialize($students);
        file_put_contents(DB_NAMEFARID,$serializeData,LOCK_EX);
    }

    function getNewId($students){

        $maxid = max(array_column($students,'id'));
        return  $maxid+1;
    }

