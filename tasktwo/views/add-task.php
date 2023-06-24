
<h1>Add Parent Task</h1>
<form action="#" method="post" id="add_task">
    <div id="parentsuccess"></div>
    <div class="mb-3">
        <label for="add_task" class="form-label">Task Name</label>
        <input type="text" name="task_name" class="form-control" id="add_task" aria-describedby="taskhelp">
    </div>
    <div class="mb-3">
        <label for="add_task" class="form-label">Task Start Date</label>
        <input  name="datetime"  class="form-control" id="datetimepicker1">
    </div>

    <div class="mb-3">
        <label for="end_task" class="form-label">Task End Date</label>
        <input  name="end_task_date"  class="form-control" id="datetimepicker2">
    </div>

    <div class="mb-3">
        <label for="short_desc" class="form-label">Short Description</label>
        <textarea name="short_desc" class="form-control"></textarea>
    </div>
    <input type="hidden" name="page" value="add_task"/>
    <?php echo $database->formtoken();?>
    <button type="submit" class="btn btn-dark" id="add_task" name="submit">Add Task</button>
</form>

<hr/></hr/><hr/></hr/>

<h1>Add Child Task</h1>
<form action="#" method="post" id="add_child_task">
    <div id="childsuccess"></div>
    <div class="mb-3">
        <label for="child_task" class="form-label">Child Task Name</label>
        <input type="text" name="child_task_name" class="form-control" id="child_task" aria-describedby="taskhelp">
    </div>
    <div class="mb-3">
        <label for="parent_task" class="form-label">Parent Task</label>
        <select name="parent_task" id="parent_task" class="form-control">
            <option value="">--select--</option>
            <?php 
                $database    = new Database();
                $conn        = $database->connection;
                $data        = array('task_id','task_name');
                $query       = $database->getData("tasksdata",$data);

                while($row = mysqli_fetch_array($query)){
                    $task_id    	  = (int) $row['task_id'];
                    $task_name        = $row['task_name'];

                    echo "<option value='$task_id'>$task_name</option>";
                }
            ?>
        </select>											
    </div>
    <input type="hidden" name="page" value="add_child_task"/>
    <?php echo $database->formtoken();?>
    <button type="submit" class="btn btn-dark" id="add_child_task" name="submit">Add Child Task</button>
</form>
