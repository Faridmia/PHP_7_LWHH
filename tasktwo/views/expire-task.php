<?php 

date_default_timezone_set('Asia/Dhaka');
$date = date('m/d/Y h:i:s a', time());


 $data               = array('task_id','task_name');
 $Expire_Task       = $database->getData("task_temp",$data);
 $num_row            = $database->numRows($Expire_Task);
 if($num_row > 0){ ?>
    <h1 class="page-header">Expire Task</h1>
    <span id="successi"></span>
    <form action="#" method="post">
        <table class='table table-striped'>
            <tr>
                <th></th>
                <th>SL NO</th>
                <th>Task Name</th>
                
            </tr>
        <?php 
                $i = 1; 
                while($data = mysqli_fetch_array($Expire_Task)){ 

                    $task_name  = $data['task_name'];
                    $task_id    = $data['task_id'];
                ?>
            <tr>
                <td><input name="taskids[]" class="label-inline" type="checkbox" value="<?php echo $task_id;?>"></td>
                <td><?php echo $i;?></td>
                <td><?php echo $task_name;?></td>
                
            </tr>
            <?php } ?>
        </table>
    </form>
<?php } ?>