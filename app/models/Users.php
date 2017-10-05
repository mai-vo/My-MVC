<?php 
namespace App\Models;
use App\Core\App;

class Users
{

	public static function all()
	{
		return App::get('database')->commonSelectAll('users');
	}

	public static function find($id)
	{
		return App::get('database')->commonGetItemById('users',$id);
	}

	public static function insert($new_User)
	{
		return App::get('database')->commonInsert('users',$new_User);
	}

	public static function getAll()
	{
		$query='select * from users';
		
		return App::get('database')->query_fetch($query);

	}
	public static function insert1($new_User){
		$name=$new_User['name'];
		$phone=$new_User['phone'];
		$address=$new_User['address'];
		$query='insert into users(name,phone,address) values('.$name.','.$phone.','.$address.')';
		return App::get('database')->query_excute($query);
	}

}
?>