<?php 

class QueryBuilder {

protected $dbh;

	function __construct ($dbh) {

		$this->dbh = $dbh;
	}

	public function Q_SELECT () {

		$sql = "SELECT * FROM `tadressbook`";

		$sth = $this->dbh->prepare($sql);
		$sth -> execute();
		$statement = $sth->fetchall(PDO::FETCH_CLASS, 'AdressBook');
		return $statement;	

	}

	public function Q_INSERT ($Author, $Title, $Description) {

		$sql = "INSERT INTO `tadressbook`(`id`, `Author`, `Title`, `Description`, `CreationDate`) 
		VALUES (NULL,'$Author','$Title','$Description',CURRENT_TIMESTAMP)";

		$sth = $this->dbh->prepare($sql);
		$sth -> execute();

	}

	public function Q_UPDATE ($id, $Author, $Title, $Description) {

		$sql = "UPDATE `tadressbook` SET `id`='$id',`Author`='$Author',`Title`='$Title',`Description`=
		'$Description',`CreationDate`= CURRENT_TIMESTAMP WHERE `id`='$id'";

		$sth = $this->dbh->prepare($sql);
		$sth -> execute();
	}

	public function Q_DELETE ($id) {

		$sql = "DELETE FROM `tadressbook` WHERE `tadressbook`.`id` = '$id'";

		$sth = $this->dbh->prepare($sql);
		$sth -> execute();

	}


	public function Q_CREATE_TABLE() {

		$sql = "CREATE TABLE IF NOT EXISTS tadressbook (
		id INT(11) NOT NULL AUTO_INCREMENT Primary key, 
		Author VARCHAR(15) NOT NULL, 
		Title VARCHAR(25) NULL, 
		Description TEXT(25) NULL,  
		CreationDate DATETIME NOT NULL)";

		$sth = $this->dbh->prepare($sql);
		$sth -> execute();

	}

}