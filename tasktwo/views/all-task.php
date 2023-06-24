<?php
$data         = array('task_id', 'task_name', 'task_desc', 'task_complete_date', 'task_end_date');
$completeTask = $database->getData("tasksdata", $data, "status", '=', 1);
$num_row      = $database->numRows($completeTask);
$conn = $database->connection;


if ($num_row > 0) { ?>
    <h1 class="page-header">Complete Task</h1>
    <span id="successi"></span>
    <form action="#" method="post">
        <table class='table table-striped'>
            <tr>
                <th></th>
                <th>SL NO</th>
                <th>Task Name</th>
                <th>Task Description</th>
                <th>Task Complete Date</th>
                <th>Task Expire Date</th>
                <th>Action</th>
            </tr>
            <?php

            $i = 1;
            while ($data = mysqli_fetch_array($completeTask)) {
                $task_complete_date = $data['task_complete_date'];
                $task_complete = date('Y/m/d h:i:s a', $task_complete_date);

                $end_date   = $data['task_end_date'];
                $task_end   = date('Y/m/d h:i:s a', $end_date);
                $task_name  = $data['task_name'];
                $task_desc  = $data['task_desc'];
                $task_id    = $data['task_id'];

                $expie_date = date('Y/m/d h:i:s a', strtotime($task_complete . " +48 hours"));

                $get_data   = getdate();
                $array_data = $get_data[0];
                $today      = date('Y/m/d h:i:s a', $array_data );
               
                if($today >= $expie_date)
                {

                    $data = array(
                        'task_name'     => $task_name,
                        'task_id'     => $task_id,
                        
                    );
                    $query = $database->insertdata('task_temp', $data);
				    

                    $database->deletedata('tasksdata', 'task_id', $task_id);
                   
                }

            ?>
                <tr>
                    <td><input name="taskids[]" class="label-inline" type="checkbox" value="<?php echo $data['task_id']; ?>"></td>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $task_name; ?></td>
                    <td><?php echo $task_desc; ?></td>
                    <td><?php echo $task_complete; ?></td>
                    <td><?php echo $expie_date; ?></td>
                    <input id="ipagename" type="hidden" name="page" value="uncomplete_task" />
                    <td>
                        <a class="" href="index.php?taskid=<?php echo $task_id; ?>">Edit</a> | <a class="delete" data-taskidi="<?php echo $task_id; ?>" href=''>Delete</a> | <a data-taskidi="<?php echo $task_id; ?>" class="mark_incomplete" href='#'>Mark Incomplete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </form>
<?php } ?>