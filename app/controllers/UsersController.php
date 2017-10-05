<?php 
namespace App\Controllers;
use App\Core\App;
use App\Models\Users;

class UsersController
{
	public function index()
	{

		$users=Users::getAll();
		return view('users',['users'=>$users]);
	}
	public function add()
	{
		return view('users-add');
	}
	public function store()
	{

		$new_User=[
			'name' =>$_POST['name'],
			'phone' =>$_POST['phone'],
			'address' =>$_POST['address']
		];
		Users::insert1($new_User);
		return redirect('users');
	}


}

?>