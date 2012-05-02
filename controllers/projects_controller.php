<?php
/**
 * The Projects Controller for managing User CRUD
 *
 * @package default
 * @author Johnathan Pulos
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