<?php

class Controller_Users extends Controller_Template
{

	public function action_login()
	{
		$data["subnav"] = array('login'=> 'active' );
		$this->template->title = 'Users &raquo; Login';
		$this->template->content = View::forge('users/login', $data);
	}

	public function action_logout()
	{
		$data["subnav"] = array('logout'=> 'active' );
		$this->template->title = 'Users &raquo; Logout';
		$this->template->content = View::forge('users/logout', $data);
	}

	public function action_register()
	{
		$data["subnav"] = array('register'=> 'active' );
		$this->template->title = 'Users &raquo; Register';
		$this->template->content = View::forge('users/register', $data);
	}

}
