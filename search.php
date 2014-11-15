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
		$this->_acces = 0;
		$this->_token = $_POST['token'];

		$this->_id = 0;
		$this->_cityName = ($this->_cityName) ? $this->filter($_POST['cityName']) : $_SESSION['username'];
		$this->_dateInfraction = ($this->_dateInfraction) ? $_POST['password'] : '';
		$this->_speedLimit = ($this->_speedLimit) ? $this->_speedLimit: $_POST['speedLimit'];
	}

	/*public function isLoggedIn(){
		($this->_login) ? $this->verifyPost() : $this->verifySession();
		return $this->_access;
	}

	public function filter($var){
		return preg_replace('/[^a-zA-Z0-9]/', '', $var);
	}*/
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

	public function verifyDatabase(){
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$db = "tickets";

		// Create connection
		$conn = new mysqli($servername, $username, $password,$db);
		$sql = "select id from City where Name='$this->_city'";
		$data = $conn->query($sql);
		if ($data->num_rows > 0) {
			return true;
		}
		else{
			return false;
		}
	}
	public function verifySession(){
		if($this->sessionExist() && $this->verifyDatabase())
			$this->_access=1;
	}

	public function isDataValid(){
		return (preg_match('/^[A-Za-z]$/', $this->_cityName)) ? 1:0;
	}

	public function isTokenValid(){
		return (!isset($_SESSION['token']) || $this->_token!=$_SESSION['token']) ? 0 : 1;
	}

	public function registerSession(){
		$_SESSION['ID'] = $this->_id;
		$_SESSION['cityName'] = $this->_cityName;
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