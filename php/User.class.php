<?php
class User
{
	private $id;
	private $session_id;
	private $uinfo;

	//make a new user
	function __construct($db)
	{
		//
	}

	//check for a valid login
	function checkLogin($user, $pass)
	{
		//
	}

	//make a new session id
	function genSession()
	{
    		if(!empty($_SESSION['deleted_time']) && $_SESSION['deleted_time'] < time() - 180)
		{
			session_destroy();
			session_start();
		}

		$id = session_create_id('sid-');
		session_commit();
		$this->session_id = session_id($id);
	}
}

?>
