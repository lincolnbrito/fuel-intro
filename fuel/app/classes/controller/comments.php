<?php

class Controller_Comments extends Controller_Template
{

	public function action_edit()
	{
		$data["subnav"] = array('edit'=> 'active' );
		$this->template->title = 'Comments &raquo; Edit';
		$this->template->content = View::forge('comments/edit', $data);
	}

	public function action_create()
	{
		$data["subnav"] = array('create'=> 'active' );
		$this->template->title = 'Comments &raquo; Create';
		$data['form'] = View::forge('comments/_form');
		$this->template->content = View::forge('comments/create', $data);
	}

}
