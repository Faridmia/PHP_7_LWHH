<?php
require_once 'init.php';
require_once 'functions.php';

$database = new Database();
$token    = $database->token($database->generatetoken());

if (isset($_POST['token'])) {
	$page = $_POST['page'];

	// add Task
	if ($page == 'add_task') {

		$task_name     = escape($_POST['task_name']);
		$short_desc    = escape($_POST['short_desc']);
		$datetime      = escape($_POST['datetime']);
		$end_task_date = escape($_POST['end_task_date']);

		$errors = array();
		if (isset($task_name, $short_desc)) {
			if (empty($task_name) && empty($short_desc)) {
				$errors[] = 'All field are required';
			} else {
				if (empty($task_name)) {
					$errors[] = 'Task name are required<br/>';
				}
				if (empty($short_desc)) {
					$errors[] = 'Description are required<br/>';
				}
			}
			if (!empty($errors)) {
				foreach ($errors as $error) {
					echo $error;
				}
			} else {

				$conn = $database->connection;

				date_default_timezone_set('Asia/Dhaka');

				$data = array(
					'task_name'     => $task_name,
					'task_desc'     => $short_desc,
					'task_date'     => strtotime($datetime),
					'task_end_date' => strtotime($end_task_date),
				);
				$query = $database->insertdata('tasksdata', $data);
				if ($query) {
					echo "<div class='alert alert-success'>New data added successfully.</div>"; ?>
					<script>
						setTimeout(function() {
							window.location = "index.php";

						}, 3000);
					</script>

				<?php
				} else {
					echo "<div class='alert alert-danger'>data not added</div>";
					echo mysqli_error($conn);
				}
			}
		} // isset if end
	} // end of elseif ...
	// add child Task
	elseif ($page == 'add_child_task') {

		$child_task_name = escape($_POST['child_task_name']);
		$parent_task     = escape($_POST['parent_task']);

		$errors = array();
		if (isset($child_task_name, $parent_task)) {
			if (empty($child_task_name) && empty($parent_task)) {
				$errors[] = 'All field are required';
			} else {
				if (empty($child_task_name)) {
					$errors[] = 'child task are required<br/>';
				}
				if (empty($parent_task)) {
					$errors[] = 'parent task are required<br/>';
				}
			}
			if (!empty($errors)) {
				foreach ($errors as $error) {
					echo $error;
				}
			} else {

				$conn  = $database->connection;
				$added = time();

				$data = array(
					'child_task' => $child_task_name,
					'parent_id'  => $parent_task,
				);
				$query = $database->insertdata('child_task', $data);
				if ($query) {
					echo "<div class='alert alert-success'>task added.</div>"; ?>
					<script>
						setTimeout(function(){
							window.location = "index.php";

						},3000);	
					</script>

<?php
				} else {
					echo "<div class='alert alert-danger'>task not added</div>";
					echo mysqli_error($conn);
				}
			}
		} // isset if end
	} // end of elseif

} // post token check if
else {
	echo "oop! you are wrong";
}

?>