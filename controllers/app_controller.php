<?php
/**
 * This file is part of Project Decision Tool.
 * 
 * Project Decision Tool is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * Project Decision Tool is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see 
 * <http://www.gnu.org/licenses/>.
 *
 * @author Johnathan Pulos <license@missionaldigerati.org>
 * @copyright Copyright 2012 Missional Digerati
 * 
 * 
 * Overwrite the default AppController
 */
class AppController extends Controller {
	
	/**
	 * Initialize the needed CakePHP Helpers for all controllers
	 *
	 * @var array
	 */
	public $helpers = array('Html', 'Session', 'Form');
	/**
	 * Initialize the needed CakePHP Components for all controllers
	 *
	 * @var array
	 */
	public $components = array('Auth', 'Session', 'RequestHandler', 'DebugKit.Toolbar');
	
	/**
	 * CakePHP global callback beforeFilter()
	 *
	 * @return void
	 * @author Technoguru Aka. Johnathan Pulos
	 **/
	function beforeFilter() {
		/**
		 * Handle the user auth filter
		 * This, along with no salt in the config file allows for straight
		 * md5 passwords to be used in the user model
		 *
		 * @author Technoguru Aka. Johnathan Pulos
		 */
		$this->Auth->autoRedirect = false;
		$this->Auth->fields = array('username' => 'username', 'password' => 'password');
		$this->Auth->loginAction = array('controller' => 'users', 'action' => 'sign_in', 'admin' => false);
		$this->Auth->logoutRedirect = '/';
		$this->Auth->loginError = '<h5>Invalid username / password combination. Please try again.</h5>';
		$this->Auth->authorize = 'controller';
		/**
		 * If the request is Ajax hide errors (Catchall)
		 *
		 * @author Johnathan Pulos
		 */
		if($this->RequestHandler->isAjax()){
			Configure::write('debug', '0');
			ini_set("display_errors", '0');
			$this->layout = 'default';
		}
	}
	
	/**
	 * Authorization function for Security Component
	 *
	 * @return boolean
	 * @author Technoguru Aka. Johnathan Pulos
	 */
	function isAuthorized() {
		return true;
	}
	
}
?>