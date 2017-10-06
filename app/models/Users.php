<?php 
namespace App\Models;
use App\Core\App;

class Users
{

	public static function all()
	{
		$query='select * from users';
		return App::get('database')->query_fetch($query);
	}

	public static function find($id)
	{
		$query='select * from users where id='.$id;
		return App::get('database')->query_fetch($query);
	}

	public static function insert($new_User){
		$name=$new_User['name'];
		$phone=$new_User['phone'];
		$address=$new_User['address'];
		$query='insert into users(name,phone,address) values("'.$name.'","'.$phone.'","'.$address.'")';
		return App::get('database')->query_excute($query);
	}

	public function deleteById($id)
	{
		$query='delete from users where id='.$id;
		return App::get('database')->query_excute($query);
	}

	public function update($edit_User,$id)
	{
		$name=$edit_User['name'];
		$phone=$edit_User['phone'];
		$address=$edit_User['address'];
		$query='update users set name="'.$name.'",phone="'.$phone.'",address="'.$address.'" where id='.$id; 
		return App::get('database')->query_excute($query);
	}

}
?>