<?php
class orders{
    private $db;
    public function __construct($database) {
        
	    $this->db = $database;
    }
function Create($Name,$Surname,$Product,$Price,$TimeFrame){
   global $db;

   
    $query 	= $this->db->prepare("INSERT INTO `get_info` (`Name`, `Surname`, `Product`, `Price`, `TimeFrame`) VALUES (?, ?, ?, ?, ?) ");

		$query->bindValue(1, $Name);
		$query->bindValue(2, $Surname);
		$query->bindValue(3, $Product);
		$query->bindValue(4, $Price);
		$query->bindValue(5, $TimeFrame);

		try{
			$query->execute();
			
       
		}catch(PDOException $e){
			die($e->getMessage());
			
		}	
    
}

function Read(){
	$query = $this->db->prepare("SELECT * FROM get_info");
try{
    $query->execute();
	$info = $query->fetchAll(PDO::FETCH_OBJ);
}catch(PDOException $e){
    die($e->getMessage());
}
	return $info;
}	


function GetInfo($ID){
	$query = $this->db->prepare("SELECT * FROM `get_info` WHERE `ID` = ?");
	$query->bindvalue(1,$ID);
		try{
			$query->execute();
				return $query->fetch(PDO::FETCH_OBJ);
		}catch(PDOException $e){
			die($e->getMessage());
		}
}
function updateOrders($Name,$Surname,$Product,$Price,$TimeFrame,$ID){
	$query = $this->db->prepare("UPDATE `get_info` SET
														`Name`			= ?,
														`Surname`		= ?,
														`Product`		= ?,
														`Price`			= ?,
														`TimeFrame`		= ?

														WHERE `ID` = ?");

	$query->bindValue(1, $Name);
	$query->bindValue(2, $Surname);
	$query->bindValue(3, $Product);
	$query->bindValue(4, $Price);
	$query->bindValue(5, $TimeFrame);
	$query->bindValue(6, $ID);

	try{
		$query->execute();

	}catch(PDOException $e){
		die($e->getMessage());
	}	
}



function Delete($ID){
	$query = $this->db->prepare("DELETE FROM `get_info` WHERE ID = ?");
		$query->bindValue(1, $ID);

		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
}
}

