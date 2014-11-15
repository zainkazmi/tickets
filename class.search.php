<?php
//include('class.login.php');
class Search
{
	private $_id;
	private $_cityName;
	private $_dateInfraction;
	private $_speedLimit;
	private $_errors;
	private $_access;
	private $_search;
	private $_token;
	public function __construct(){
		$this->_errors = array();
		$this->_search = isset($_POST['search']);
		$this->_access = 0;
		$this->_token = isset($_POST['token'])? $_POST['token'] : $_SESSION['token'];

		$this->_id = 0;
		$this->_cityName = ($this->_search) ? $_POST['cityName'] : $_SESSION['cityName'];
		$this->_dateInfraction = ($this->_search) ? $_POST['speedInfractionDate'] : $_SESSION['dateInfraction'];
		$this->_speedLimit = ($this->_search) ? $_POST['speedLimit']: $_SESSION['speedLimit'];
	}
	public function didSearch(){
		($this->_cityName) ? $this->verifyPost() : $this->verifySession();
		return $this->_access;
	}
	public function verifyPost(){
		try{
			if(!$this->isTokenValid())
				throw new Exception('Invalid Form Submission');
			if(!$this->isDataValid())
				throw new Exception('Invalid Form Data');
			if(!$this->verifyDatabase())
				throw new Exception('Invalid Username/Password');

			$this->_access=1;
			$this->registerSession();
		}
		catch (Exception $e){
			$this->_errors[] = $e->getMessage();
		}
	}

	public function conn(){
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$db = "tickets";
		// Create connection
		return new mysqli($servername, $username, $password,$db);
	}

	public function verifyDatabase(){
		$conn = $this->conn();
		$sql = "select * from City where Name='$this->_cityName'";
		$data = $conn->query($sql);
		if ($data->num_rows > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	public function getResults(){
		$conn = $this->conn();
		$sql = "select * from City, traffic_ticket where City.id=traffic_ticket.city_id LIMIT 10;";// where City.id = traffic_ticket.city_id and Name='$this->_cityName'";
		//echo $sql;
		return $conn->query($sql);
	}

	public function verifySession(){
		if($this->sessionExist() && $this->verifyDatabase())
			$this->_access=1;
	}

	public function isDataValid(){
		return (preg_match('/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/', $this->_cityName)) ? 1:0;
	}
	public function isTokenValid(){
		return (!isset($_SESSION['token']) || $this->_token!=$_SESSION['token']) ? 0 : 1;
	}
	public function registerSession(){
		$_SESSION['ID'] = $this->_id;
		$_SESSION['cityName'] = $this->_cityName;
		$_SESSION['dateInfraction'] = $this->_dateInfraction;
		$_SESSION['speedLimit'] = $this->_speedLimit;
		$_SESSION['token'] = $this->_token;
	}
	public function sessionExist(){
		return (isset($_SESSION['_cityName'])) ? 1 : 0;
	}
	public function showErrors(){
		echo "<h3>Errors</h3>";
		foreach ($this->_errors as $key => $value) {
			echo $value."<br>";
		}
	}
}
?>