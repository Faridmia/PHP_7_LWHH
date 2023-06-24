<?php
require_once 'init.php';
require_once 'functions.php';

$database = new Database();
$conn     = $database->connection;
$action   = $_POST['action'] ?? '';
$page     = $_POST['pagename'] ?? "";

if ( $action == 'bulkcomplete' || $action == 'complete_task' || $action == 'uncomplete_task' || $page ) {

	if ( $page == 'complete_task' ) {

		$taskid = $_POST['taskid'];
		$added 	= time();
		$data   = array('task_complete_date' => $added,'status' => 1);
		$query  = $database->updatedata('tasksdata', $data, 'task_id', '=', $taskid);

		if ( $query ) {
			echo "<div class='alert alert-success'>";
			echo "tasks updated";
			echo "<div>";
			?>
			<script>
				setTimeout(function() {
					window.location = "index.php";

				}, 3000);
			</script>
			<?php
		} else {
			echo "<div class='alert alert-danger'>";
			echo "tasks is not updated" . mysqli_error($conn);
			echo "<div>";
		}
	} elseif ( $page == 'uncomplete_task' ) {

		$taskid = $_POST['taskid'];
		$data   = array('status' => 0);
		$query  = $database->updatedata('tasksdata', $data, 'task_id', '=', $taskid);

		if ( $query ) {
			echo "<div class='alert alert-success'>";
			echo "tasks Completed";
			echo "<div>"; ?>
			<script>
				setTimeout(function() {
					window.location = "index.php";

				}, 3000);
			</script>
			<?php } else {
			echo "<div class='alert alert-danger'>";
			echo "tasks is not Completed" . mysqli_error($conn);
			echo "<div>";
		}
	} elseif ( isset($_POST['pagebulk']) && isset($_POST['taskids']) && $action == 'bulkcomplete' ) {

		$bulkids  = $_POST['taskids'] ?? "";
		$join_ids = join( ",", $bulkids );

		if ( $join_ids ) {
			$added 	= time();
			$data  = array('task_complete_date' => $added,'status' => 1);
			$sql   = "UPDATE tasksdata SET task_complete_date = $added,status = 1 WHERE task_id IN ( $join_ids )";
			$query = mysqli_query($conn, $sql);

			if ( $query ) {
				echo "<div class='alert alert-success'>";
				echo "tasks completed";
				echo "<div>";
			?>
				<script>
					setTimeout(function() {
						window.location = "index.php";

					}, 3000);
				</script>
			<?php
			} else {
				echo "<div class='alert alert-danger'>";
				echo "tasks is not completed" . mysqli_error($conn);
				echo "<div>";
			}
		}
	}
} elseif ( isset( $_POST['pagebulk'] ) && isset( $_POST['taskids'] ) && $action == 'bulkdelete' ) {

	$taskids  = $_POST['taskids'] ?? "";
	$join_ids = join(",", $taskids);

	$data       = array('c_taskid', 'parent_id');
	$chid_query = $database->bulkGetData( "child_task", $data, 'parent_id', $join_ids );

	$child_numRow = $database->numRows( $chid_query );
	if($child_numRow > 0) {
		$i       = 0;
		$bulk_id = [];
		while ( $data = mysqli_fetch_array( $chid_query ) ) {

			$p_id = $data['parent_id'];
	
			$bulk_id[]    = $p_id;
			$result       = array_diff( $taskids, $bulk_id );
			$inner_joinid = join(",", $result );
	
			if ( $bulk_id ) {
				if ( $database->deletedata_bulk('tasksdata', 'task_id', $inner_joinid ) ) {
					echo "<div class='alert alert-success'>Successfully Deleted.</div>";
				?>
					<script>
						setTimeout(function() {
							window.location = "index.php";
	
						}, 3000);
					</script>
	<?php
				} else {
					echo "<div class='alert alert-danger'>Task is not deleted Available child task.</div>";
				}
			}
	
			$i++;
		}
	} else{

		if ( $join_ids ) {
			if ( $database->deletedata_bulk('tasksdata', 'task_id', $join_ids ) ) {
				echo "<div class='alert alert-success'>Successfully Deleted.</div>";
			?>
				<script>
					setTimeout(function() {
						window.location = "index.php";

					}, 3000);
				</script>
<?php
			} else {
				echo "<div class='alert alert-danger'>Task is not deleted.</div>";
			}
		}

	}
	
	
}

?>