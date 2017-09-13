<?php 

namespace Core\Database;

use \PDO;

class QueryBuilder {

protected $dbh;

	function __construct ($dbh) {

		$this->dbh = $dbh;
	}

	public function QSelect () {

		$sql = "SELECT * FROM tadressbook";
		$sth = $this->dbh->prepare($sql);
		$sth -> execute();
		$statement = $sth->fetchall(PDO::FETCH_CLASS, 'Core\AddressBook');
		return $statement;	

	}

	public function QInsert ($Author, $Title, $Description) {

		$sql = "INSERT INTO tadressbook (Author, Title, Description) 
				VALUES (:Author, :Title, :Description)";

		$sth = $this->dbh->prepare($sql);
		$sth->bindParam(':Author', $Author);
		$sth->bindParam(':Title', $Title);
		$sth->bindParam(':Description', $Description);
		$sth -> execute();

	}

	public function QUpdate ($id, $Author, $Title, $Description) {

		$sql = "UPDATE tadressbook SET Author=:Author, 
				Title =:Title, 
				Description =:Description WHERE id =:id";

		$sth = $this->dbh->prepare($sql);
		$sth->bindParam(':Author', $Author);
		$sth->bindParam(':Title', $Title);
		$sth->bindParam(':Description', $Description);
		$sth->bindParam(':id', $id);
		$sth -> execute();

	}

	public function QDelete ($id) {

		$sql = "DELETE FROM tadressbook WHERE tadressbook.id = :id";

		$sth = $this->dbh->prepare($sql);
		$sth->bindParam(':id', $id);
		$sth -> execute();

	}


	public function QCreateTable() {

		$sql = "CREATE TABLE IF NOT EXISTS tadressbook (
				id INT(11) NOT NULL AUTO_INCREMENT Primary key, 
				Author VARCHAR(15) NOT NULL, 
				Title VARCHAR(25) NULL, 
				Description TEXT(25) NULL,  
				CreationDate DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP)";

		$sth = $this->dbh->prepare($sql);
		$sth -> execute();

	}

}