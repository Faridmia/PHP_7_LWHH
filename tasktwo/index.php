<?php include_once 'includes/header.php'; ?>

<body>

    <div class="main-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php require_once 'views/expire-task.php'; ?>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-lg-12">
                    <?php require_once 'views/all-task.php'; ?>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-lg-12">
                    <h4>Upcoming Tasks</h4>
                    <?php require_once 'views/upcomming-task.php'; ?>
                </div>
            </div>
            <hr />
            <?php require_once 'views/add-task.php'; ?>

            <?php if (isset($_GET['taskid'])) {

                $getid   = $_GET['taskid'];
                $data    = array('task_id', 'task_name', 'task_desc', 'task_date', 'task_end_date');
                $getTask = $database->getData("tasksdata", $data, "task_id", '=', $getid);

                $fetch_Data = mysqli_fetch_array($getTask);

                $num_row = $database->numRows($getTask);

                if ($num_row > 0) {

                    $task_name = $fetch_Data['task_name'];
                    $task_desc = $fetch_Data['task_desc'];
                    $task_id   = $fetch_Data['task_id'];

                    $start_date = $fetch_Data['task_date'];
                    $task_start = date('Y/m/d h:i:s a', $start_date);
                    $end_date   = $fetch_Data['task_end_date'];
                    $task_end   = date('Y/m/d h:i:s a', $end_date);

            ?>
                    <h1>Update Task</h1>
                    <span id="success"></span>
                    <form action="index.php" method="post" id="update_task" style="padding-bottom: 100px;">
                        <div id="parentsuccess"></div>
                        <div class="mb-3">
                            <label for="add_task" class="form-label">Task Name</label>
                            <input type="text" name="task_name" class="form-control"  value="<?php echo $task_name; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="add_task" class="form-label">Task Start Date</label>
                            <input name="datetime" class="form-control"  value="<?php echo $task_start; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="end_task" class="form-label">Task End Date</label>
                            <input name="end_task_date" class="form-control"  value="<?php echo $task_end; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="short_desc" class="form-label">Short Description</label>
                            <textarea name="short_desc" class="form-control"><?php echo $task_desc; ?></textarea>
                        </div>
                        <input type="hidden" name="taskid" value="<?php echo $task_id; ?>" />
                        <input type="hidden" name="page" value="update_task" />
                        <button type="submit" class="btn btn-dark" id="update_task" name="update">Update Task</button>
                    </form>
            <?php }
            }
            ?>

        </div>
    </div>

    <?php
    require_once 'includes/footer.php';
    ?>

<script>
    $('#update_task').submit(function(e) {
        e.preventDefault();
        var data = new FormData(this);
        
        $.ajax({
            type: 'POST',
            url: 'update_task.php',
            data: data,
            dataType: 'html',
            contentType: false,
            cache: false,
            processData: false,
            beforesend: function() {
                $('#success').html('loading.....');
            },
            success: function(result) {
                $('#success').html(result);
            }
        });
    });
</script>