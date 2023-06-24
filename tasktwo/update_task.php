<?php
require_once 'init.php';
require_once 'functions.php';
$database = new Database();
$conn     = $database->connection;
// print_r($_POST);

if ( $_POST ) {
    
    $taskid     = (int) $_POST['taskid'];
    $task_name  = escape( $_POST['task_name'] );
    $start_date =  $_POST['datetime'] ;
    $end_task   = $_POST['end_task_date'];
    $short_desc = escape( $_POST['short_desc'] );

    $data = array(
        'task_name'      => $task_name,
        'task_desc'      => $short_desc,
        'task_date'      => strtotime($start_date),
        'task_end_date ' => strtotime($end_task),
    );

    $query = $database->updatedata( 'tasksdata', $data, 'task_id', '=', $taskid );
    if ( $query ) {
        echo "<div class='alert alert-success'>Update Successfully.</div>";
        ?>
            <script>
                setTimeout(function(){
                    window.location = "index.php";

                },3000);
            </script>
    <?php
} else {
        echo "<div class='alert alert-danger'>data not updated</div>";
        echo mysqli_error( $conn );
    }
}

?>