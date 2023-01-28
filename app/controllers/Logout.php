<?php




class Logout extends Controller
{
	
	public function index()
	{
    $data['title'] = "Logout";
		$user = new User(); 
    session_start();
		$data['errors'] = [];
    $_SESSION['logout_test'] = 'test logout';
    Auth::logout();
   redirect('home');
		
		
		

		$this->view('home',$data);
	}
	
}