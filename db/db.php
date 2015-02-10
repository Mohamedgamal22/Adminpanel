<?php

  /**
  * database conection
  */
  class db
  {
  	private $name;
  	private $password;
  	private $database;
  	private $host;
    private $id;
    private $bind;
  	function __construct($config)
  	{
  		$this->name = $config['name'];
  		$this->password = $config['password'];
  		$this->database = $config['database'];
  		$this->host = $config['host'];
  	}


  	function conect(){

  		 try{

		    $con = new PDO("mysql:host=".$this->host.";dbname=".$this->database,$this->name,$this->password);
		    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    return $con;
	  	  }catch(PDOException $e) {
	  	    	return false;

		     echo $e->getMessage("error cant conact db !");
	    	}
  	}

  	function query($sql,$con,$bind=null){
        $this->id=$id;
        $this->bind=$bind;
  		$stmt = $con->prepare($sql);
  		$stmt->execute([$this->bind]);
  		$result = $stmt->fetchAll();
  		return $result ? $result : false;
  	}

  }

?>