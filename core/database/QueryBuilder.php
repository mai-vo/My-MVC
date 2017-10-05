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
	public function insert($tbl,$parameters){
		$query='INSERT INTO '.$tbl.'(name) VALUES(:name)';
		$statement=$this->pdo->prepare($query);
		$statement->bindParam(':name',$parameters['name']);
		$statement->execute();	
	}
}
?>