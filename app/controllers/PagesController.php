<?php 
namespace App\Controllers;
use App\Core\App;
use App\Models\Users;

class PagesController
{
	public function home()
	{
		$users=Users::getAll();
		return view('index',['users'=>$users]);
	}

	public function about()
	{
		return view('about');
	}

	public function contact()
	{
		return view('contact');
	}
}
?>