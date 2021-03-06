<?php namespace controllers;
use core\view as View;

class Consultoria extends \core\controller{

	public function __construct(){
		parent::__construct();
		
	}

	public function index(){
		$data['title'] = $this->language->get('welcome_text');
        $data['welcome_message'] = $this->language->get('welcome_message');

        View::rendertemplate('header', $data);
        View::render('consultoria/index', $data);
        View::rendertemplate('footer', $data);
	}
	
}