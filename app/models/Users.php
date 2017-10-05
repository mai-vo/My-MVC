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

}
?>