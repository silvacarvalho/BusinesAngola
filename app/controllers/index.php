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
    public function __construct()
    {
        parent::__construct();

        $this->language->load('welcome');
    }

    /**
     * Define Index page title and load template files
     */
    public function index ()
    {
        $data['title'] = $this->language->get('welcome_text');
        $data['welcome_message'] = $this->language->get('welcome_message');

        View::rendertemplate('header', $data);
        View::render('index/index', $data);
        View::rendertemplate('footer', $data);
    }
}