<?php 
class QueryBuilder
{	
	protected $pdo;

	public function __construct($pdo) 
	{
		$this->pdo=$pdo;
	}
	public function selectAll($tbl)
	{
		$statement=$this->pdo->prepare("select * from {$tbl}");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS);

	}
}
?>