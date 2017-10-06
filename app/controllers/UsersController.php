<?php 
namespace App\Controllers;
use App\Core\App;
use App\Models\Users;

class UsersController
{
	public function index()
	{
		$users=Users::all();
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
		if(Users::insert($new_User)==true){
			return redirect('users');
		}
	}
	public function destroy()
	{
		$id=$_GET['id'];
		if(Users::deleteById($id)==true){
			return redirect('users');
		}
	}

	public function edit()
	{
		$id=$_GET['id'];
		$user=Users::find($id);
		return view('user-edit',['user'=>$user]);
	}

	public function update()
	{
		$id=$_POST['id'];
		$edit_User=[
			'name' =>$_POST['name'],
			'phone' =>$_POST['phone'],
			'address' =>$_POST['address']
		];
		if(Users::update($edit_User,$id)){
			return redirect('users');
		}
	}
}

?>