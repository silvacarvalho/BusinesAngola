<?php
/**
 * Arquivo index onde conterá a Home do sistema.
 * @User: Rafael
 * @Date: 18/04/2015
 * @Time: 22:21
 */

namespace controllers;

use core\View;

/**
 * Class Index Home do Sistema.
 * @package controllers
 */
class Index extends \core\Controller
{
    private $_title;
    private $_model;

    public function __construct()
    {
        parent::__construct();

        $this->_model = new \models\Admin();
        $this->language->load('welcome');
        $this->_title = $this->language->get('welcome_text');
    }

    /**
     * Define Index page title and load template files
     */
    public function index()
    {
        $data['title'] = $this->_title;
        View::rendertemplate('header', $data);
        View::render('index/index', $data);
        View::rendertemplate('footer', $data);
    }


    /**
     * Define a administração dos usuários.
     */
    public function admin()
    {
//        Insere
//        $array = array('nome' => 'Rafael Silva Carvalho', 'email' => 'silva_carvalho20@hotmail.com');
//        $array1 = array('login' => 'admin', 'senha' => 'root', 'nome' => 'Rafael Carvalho', 'email' => 'teste@yahoo.com');

        $dados = $this->_model->get_usuarios();
        $titulo['title'] = "Adimistração do Sistema";

        View::rendertemplate('header',$titulo);
        View::render('index/admin', $dados);
        View::rendertemplate('footer', $dados);


    }
}