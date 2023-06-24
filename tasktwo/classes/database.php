<?php


	class database{

		public $connection;

		public function __construct(){
			$this->connection();
		}
		public function connection(){
			$this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
			if(!$this->connection){
				echo "database is not connected".mysql_error($this->connection);
			}
			
			
		}
		/**
		 * data fetch query
		 */

		public function getData($table,$whichcolumn = array(),$columnname = null,$compare = null,$columnvalue =null){

			if(is_array($whichcolumn)){
				$whichcolumn = implode(",",$whichcolumn);
			}
			
			if(empty($columnname) && empty($columnvalue)){
				$query = "SELECT $whichcolumn FROM $table";
			}
			elseif ($columnname != "" && isset($columnvalue)) {
				$sql ="SELECT $whichcolumn FROM $table WHERE $columnname $compare $columnvalue";
				$query = $sql;
				
			}
			

			$query = mysqli_query($this->connection,$query);
			
			if($query)
				return $query;
			
			else
			
				return false;
			
		}


		/**
		 * data update query
		 */
		public function updatedata( $table, $whichColumn = array(), $columnName = null, $compare = null , $columnValue = null ) {

			$finalData = array();
			foreach ($whichColumn as $name => $value) {
				$finalData[] = "$name = '$value' ";
			}

			$finalData = implode(',', $finalData);

			$sql = "UPDATE $table SET $finalData WHERE $columnName $compare $columnValue";
			
			$query = mysqli_query($this->connection, $sql);

			if($query)
				return $query;
			else 	
				return false;

		}

		/**
		 * data delete query
		 */
		public function deletedata( $table,$columnName , $columnValue) {

		
			$sql = "DELETE FROM $table  WHERE $columnName = $columnValue LIMIT 1";

			$query = mysqli_query($this->connection, $sql);

			if($query)
				return $query;
			else 	
				return false;

		}

		/**
		 * data bulk delete query
		 */
		public function deletedata_bulk( $table,$columnName , $columnValue = array()) {

		
			$sql = "DELETE FROM $table  WHERE $columnName IN ($columnValue)";

			$query = mysqli_query($this->connection, $sql);

			if($query)
				return $query;
			else 	
				return false;

		}

		/**
		 * data insert query
		 */
		public function insertdata( $table, $whichColumn = array()) {

			$columnname = array();
			$columnvalue = array();
			foreach ($whichColumn as $name => $value) {
				$columnvalue[] = "'$value'";
				$columnname[] = $name;
			}

			$columnname = implode(',', $columnname);
			$columnvalue = implode(',', $columnvalue);
			
			$sql = "INSERT INTO $table($columnname)VALUES($columnvalue)";

			$query = mysqli_query($this->connection, $sql);

			if($query)
				return $query;
			else 	
				return false;

		}

		/**
		 * total column count
		 */

		public function numRows($query){
			return mysqli_num_rows($query);
		}

		public static function generatetoken(){
			$value = uniqid();
			return $value;
		}

		public function formtoken(){
			$value = self::generatetoken();
			
			$_SESSION['token'] = $value;


			return "<input id='form_token' type='hidden' name='token' value='$value'/>";
			unset($_SESSION['token']);
		}
		
		public function token($token){
			return $_POST['token'] == $_SESSION['token'] ? true : false;
		}

		/**
		 * get parent task
		 */

		public function get_parent_task(){

			$results = [];

			$results = "SELECT * FROM all_task where parent is NULL";

			return $results;

		}

		/**
		 * bulk get data
		 */

		public function bulkGetData($table,$whichcolumn = array(),$columnname = null,$columnvalue = array()){

			if(is_array($whichcolumn)){
				$whichcolumn = implode(",",$whichcolumn);
			}
			
			if(empty($columnname) && empty($columnvalue)){
				$query = "SELECT $whichcolumn FROM $table";
			}
			elseif ($columnname != "" && isset($columnvalue)) {
				$sql ="SELECT $whichcolumn FROM $table WHERE $columnname IN ($columnvalue)";
				$query = $sql;
				
			}

			$query = mysqli_query($this->connection,$query);
			
			if($query)
				return $query;
			
			else
			
				return false;
			
		}
	}
?>