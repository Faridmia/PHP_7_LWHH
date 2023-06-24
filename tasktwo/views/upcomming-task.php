<?php
$conn    = $database->connection;
$data    = array('task_id', 'task_name', 'task_desc', 'task_date', 'task_end_date');
$query   = $database->getData("tasksdata", $data, "status", '=', 0);
$num_row = $database->numRows($query);

if ($num_row == 0) {
    echo "No task found";
} else {
?>
    <form action="" method="POST" id="complete_task">
        <span id="success"></span>
        <table class="table table-striped">
            <tr>
                <th></th>
                <th>Id</th>
                <th>Task Name</th>
                <th>Task Description</th>
                <th>Task start Date</th>
                <th>Task End Date</th>
                <th>Action</th>
            </tr>
            <?php
            $i = 1;
            while ($data = mysqli_fetch_array($query)) {
                date_default_timezone_set('Asia/Dhaka');
                $task_start    = $data['task_date'];
                $date          = date('Y/m/d h:i:s a', $task_start);
                $task_end_date = $data['task_end_date'];
                $task_end      = date('Y/m/d h:i:s a', $task_end_date);

            ?>
                <tr>
                    <td><input name="taskids[]" class="label-inline" type="checkbox" value="<?php echo $data['task_id']; ?>"></td>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $data['task_name']; ?></td>
                    <td><?php echo $data['task_desc']; ?></td>
                    <td><?php echo $date; ?></td>
                    <td><?php echo $task_end; ?></td>
                    <td><a class="delete" data-taskid="<?php echo $data['task_id']; ?>" href='#'>Delete</a> | <a class="complete" data-taskid="<?php echo $data['task_id']; ?>" href='#'>Complete</a></td>
                    <input id="pagename" type="hidden" name="page" value="complete_task" />
                    <?php echo $database->formtoken(); ?>
                </tr>
            <?php $i++;
            }
            mysqli_close($conn);
            ?>
        </table>
        <div class="select-area">
            <select id="action" name="action" class="task-selected">
                <option value="0">With Selected</option>
                <option value="bulkdelete">Delete</option>
                <option value="bulkcomplete">Mark As Complete</option>
            </select>
            <input type="hidden" name="pagebulk" value="bulkcomplete" />
            <input class="btn btn-dark" id="bulksubmit" type="submit" value="Submit">
        </div>
    </form>
<?php } ?>