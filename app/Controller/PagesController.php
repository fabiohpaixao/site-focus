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
		
		$service = $this->request->params['service'];

		if(strlen($service) >= 1)
			$this->set("service", $service);

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

		//debug($this->data);
		$this->set("page_active", "home");

        if(!empty($this->data)) {
			$Email = new CakeEmail('smtp');
            
            //$Email->from = $this->request->data['name'] . ' <' . $this->request->data['email'] . '>';

            $Email->to('web@focusautomation.com.br');
            $Email->subject('Contato do Site');
            $Email->emailFormat = 'html';
            $Email->template = 'focus';
			$Email->sendAs = 'html';


            $message = "<div>";
            $message = "<h3>Mensagem</h3>";
            $message .= "<div><span style='font-weight=bold'>" . 'Nome' . "</span>" . $this->request->data['Page']['name'] . "</div>";
            $message .= "<div><span style='font-weight=bold'>" . 'Email' . "</span>" . $this->request->data['Page']['email'] . "</div>";
            $message .= "<div><span style='font-weight=bold'>" . 'Fone' . "</span>" . $this->request->data['Page']['phone'] . "</div>";
            $message .= "<div><span style='font-weight=bold'>" . 'Mensagem' . "</span>" . $this->request->data['Page']['message'] . "</div>";
            $message .= "</div>";

            $Email->send($message);

            $this->redirect(array('action' => 'contact'));


   				// $Email = new CakeEmail('smtp');
				// $Email->to('destinatario@email.com.br');
				// $Email->subject('Assunto');
				// $Email->send('Mensagem');
        } else{
        	$this->redirect(array('action' => 'about'));
        }
    }
}
