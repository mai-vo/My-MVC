<?php 
class QueryBuilder
{	
	protected $pdo;

	public function __construct($pdo) 
	{
		$this->pdo=$pdo;
	}
	public function commonSelectAll($tbl)
	{
		$statement=$this->pdo->prepare("select * from {$tbl}");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS);

	}
	public function commonGetItemById($tbl,$id)
	{
		$statement=$this->pdo->prepare("select * from {$tbl} where id={$id}");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS);
	}

	// public function update($tbl,$parameters){
	// 	$query='UPDATE SET ';
	// 	$statement=$this->pdo->prepare($query);
	// 	$statement->bindParam(':name',$parameters['name']);
	// 	$statement->bindParam(':phone',$parameters['phone']);
	// 	$statement->bindParam(':address',$parameters['address']);
	// 	$statement->execute();	
	// }
	public function commonInsert($tbl,$parameters)
	{
		$sql=sprintf(
			'insert into %s(%s) value(%s)',
			$tbl,
			implode(',',array_keys($parameters)),
			':'.implode(', :',array_keys($parameters))
			);

		try{

			$statement=$this->pdo->prepare($sql);
			$statement->execute($parameters);
		}catch(Exception $e){
			die('Something wrong !');
		}
		
	}
}
?>