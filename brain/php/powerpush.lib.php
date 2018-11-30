<?php  
//biblioteca powerpush versão 3.0.1
session_start();
ob_start();

class PowerPush
{
	private $server = "127.0.0.1:3306";
	private $server_user = "root";
	private $server_password = "";
	private $server_db = "powerpushdb";	

	private $isError = false; 
	private $errorMessage = null;

	//tratativa de erros
	private function CleanError()
	{
		$this->isError = false;
		$this->errorMessage = null;
	}

	private function SetError($message)
	{
		$this->isError = true;
		$this->errorMessage = $message;
	}

	public function HaveError()
	{
		return $this->isError;
	}

	public function GetErrorMessage()
	{
		return $this->errorMessage;
	}

	//banco de dados
	private function OpenConnection()
	{
		$connection = mysqli_connect($this->server, $this->server_user, $this->server_password, $this->server_db);
		if(!$connection)
		{
			$this->SetError(mysqli_connect_error());
			return false;
		}
		else
		{
			return $connection;
		}
	}

	private function CloseConnection($connection)
	{
		mysqli_close($connection);
	}

	public function RunSql($query)
	{
		$conn = $this->OpenConnection();
		if($this->HaveError())
		{
			return false;
		}

		$result = mysqli_query($conn, $query);

		if(!$result)
		{
			$this->SetError(mysqli_error($conn));
			return false;
		}
		else
		{
			return $result;
		}
	}

	public function GetQueryRows($query, $type = "assoc")
	{
		$conn = $this->OpenConnection();
		if($this->HaveError())
		{
			return false;
		}

		$result = mysqli_query($conn, $query);

		if(!$result)
		{
			$this->SetError(mysqli_error($conn));
			return false;
		}

		switch($type) 
		{
			case 'assoc':
				return mysqli_fetch_assoc($result);
				break;
			
			case 'normal':
				return mysqli_fetch();
				break;
		}
	}

	public function GetResultRows($result, $type = "assoc")
	{
		$conn = $this->OpenConnection();
		if($this->HaveError())
		{
			return false;
		}

		switch ($type) {
			case 'assoc':
				return mysqli_fetch_assoc($result);
				break;
			
			case 'normal':
				return mysqli_fetch($result);
				break;
		}
	}

	public function GetNumRows($result)
	{
		return mysqli_num_rows($result);
	}

	//funçoes de sessao
	public function KillSession()
	{
		foreach ($_SESSION as &$valor) 
		{
			unset($_SESSION[$valor]);
		}
		
		return false;
	}

	public function SessionValidate()
	{
		if(!isset($_SESSION['login']))
		{
			return $this->KillSession();
		}
		else
		{
			return true;
		}
	}

	//miscelanias
	public function MoveTo($path, $samePath = true)
	{
		if($samePath)
			echo "<script>location.href = '{$path}'</script>";
		else
			echo "<script>location.href = '../../../{$path}'</script>";
	}

	public function CleanSqlString($string)
	{
		$con = $this->OpenConnection();
		if($this->HaveError())
		{
			return $string;
		}

		$newString = mysqli_real_escape_string($con, $string);

		return $newString;
	}
}
?>