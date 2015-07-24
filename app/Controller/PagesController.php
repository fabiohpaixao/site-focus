<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

	var $components = array('Email');

/**
 * Displays a view
 *
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	public function home() {

		$page_active = "home";

		$this->set("page_active", $page_active);

	}	

	public function about() {

		$page_active = "about";

		$this->set("page_active", $page_active);

	}
	
	public function services() {

		$page_active = "services";

		$this->set("page_active", $page_active);

	}

	public function clients() {

		$page_active = "clients";

		$this->set("page_active", $page_active);

	}

	public function cases() {

		$page_active = "cases";

		$this->set("page_active", $page_active);

	}

	public function downloads() {

		$page_active = "downloads";

		$this->set("page_active", $page_active);

	}

	public function contact() {

		$page_active = "contact";

		$this->set("page_active", $page_active);

	}

	public function work() {

		$page_active = "work";

		$this->set("page_active", $page_active);

	}

	public function send() {
        if(!empty($this->data)) {
            $this->Contact->set($this->data);
            if($this->Contact->validates()) {
                $this->Email->from = $this->data['Contact']['name'] . ' <' . $this->data['Contact']['email'] . '>';

                $this->Email->to = 'web@dfocusautomation.com.br';
                $this->Email->subject = 'Contato do Site';
                $this->Email->send($this->data['Contact']['message']);
                $this->render('contact');
            } else {
                $this->render('contact');
            }
        }
    }
}
