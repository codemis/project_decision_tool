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
 * Overwriting the pages controller
 */
class PagesController extends AppController {

	/**
	 * The name of this controller
	 *
	 * @var string
	 **/
	public $name = 'Pages';

	/**
 	 * An array of CakePHP/Custom helpers used by this controller
 	 *
 	 * @var array
 	 **/
	public $helpers = array('Html', 'Session');

	/**
	 * This controller does not use a model
	 *
	 * @var array
	 */
	public $uses = array();

	/**
	 * beforeFilter method
	 *
	 *  @param None
	 * 
	 *  @author Technoguru Aka. Johnathan Pulos
	*/
	function beforeFilter() {
		$this->Auth->allow('*');
		parent::beforeFilter();
	}
	
	/**
	 * Displays a view
	 *
	 * @param mixed What page to display
	 * @access public
	 */
	function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			$this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));
		$this->render(implode('/', $path));
	}
}
