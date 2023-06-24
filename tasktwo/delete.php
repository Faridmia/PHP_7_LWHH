<?php
require_once('init.php');
require_once('functions.php');
$action = $_POST['action'] ?? '';

$database    = new Database();
$conn        = $database->connection;

if ( ! $action ) {
    header( 'Location: index.php' );
    die();
} else { 

    if('delete' == $action){
        $taskid = $_POST['taskid'];

        $data        = array('c_taskid','parent_id');
        $chid_query  = $database->getData( "child_task",$data, 'parent_id','=',$taskid );

        $child_numRow = $database->numRows( $chid_query);

        if($child_numRow > 0 ){
            echo "<div class='alert alert-success'> task available data not deleted</div>";
           
        }else{
            if($taskid){
                $database->deletedata('tasksdata', 'task_id', $taskid);
                echo "<div class='alert alert-success'>Successfully deleted</div>";
            }
        }
       
        header( 'Location: index.php' );
    }
}