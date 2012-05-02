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
 * The Projects Controller for managing User CRUD
 */
class ProjectsController extends AppController {
	
	/**
	 * The name of this controller
	 *
	 * @var string
	 **/
	public $name = 'Projects';
	
	/**
 	 * An array of CakePHP/Custom helpers used by this controller
 	 *
 	 * @var array
 	 **/
	public $helpers = array('Time');
	
	/**
 	 * An array of CakePHP/Custom components used by this controller
 	 *
 	 * @var array
 	 **/
	public $components = array('Email');

	/**
	 * beforeFilter method
	 *
	 *  @param None
	 * 
	 *  @author Technoguru Aka. Johnathan Pulos
	*/
	function beforeFilter() {
		$this->Auth->allow();
		parent::beforeFilter();
	}
	
	/**
	 * ADMIN: index of all projects
	 *
	 * @return void
	 * @access public
	 * @author Johnathan Pulos
	 */
	public function admin_index() {
		$this->set('projects', $this->Project->find('all'));
	}
	
}
?>