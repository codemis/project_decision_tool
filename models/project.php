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
 * Project Model
 */
class Project extends AppModel {
	
	/**
	 * The name of this model
	 *
	 * @var string
	 */
	public $name = 'Project';
	
	/**
	 * The column to display as default
	 *
	 * @var string
	 */
	public $displayField = 'title';
	
	/**
	 * Setup the validations for this model
	 *
	 * @var array
	 */
	public $validate = array(
													'title' => array(
																			array('rule' => 'notEmpty',
																				'message' =>'Please enter a valid title.'
																			)
										        	),
						    						'submitter_name' => 	array(
																array(	'rule' => 'notEmpty',
													              'message' =>'Please enter a valid name.'
														        )
														),
														'submitter_email' => 	array(
																array(	'rule' => 'email',
													              'message' =>'Please enter a valid email.'
														        )
														)
												);

	/**
	 * CakePHP callback beforeSave(); Before save function for the Project's Model.
	 *
	 * @return boolean
	 * @author Technoguru Aka. Johnathan Pulos
	 */
	function beforeSave() {
		if (isset($this->data[$this->name]['title'])) {
			$this->data[$this->name]['title'] = Sanitize::paranoid($this->data[$this->name]['title'],  array(' ','?','.',',',';','-'));
		}
		if (isset($this->data[$this->name]['submitter_name'])) {
			$this->data[$this->name]['submitter_name'] = Sanitize::paranoid($this->data[$this->name]['submitter_name'],  array(' ','?','.',',',';','-'));
		}
		if (isset($this->data[$this->name]['submitter_email'])) {
			$this->data[$this->name]['submitter_email'] = Sanitize::paranoid($this->data[$this->name]['submitter_email'],  array(' ','?','.',',',';','_','@','-'));
		}
		if (isset($this->data[$this->name]['submitter_phone'])) {
			$this->data[$this->name]['submitter_phone'] = Sanitize::paranoid($this->data[$this->name]['submitter_phone'],  array());
			$this->data[$this->name]['submitter_phone'] = preg_replace('/\D/', '', $this->data[$this->name]['submitter_phone']);
		}
		if (isset($this->data[$this->name]['video_url'])) {
			$this->data[$this->name]['video_url'] = Sanitize::escape($this->data[$this->name]['video_url']);
		}
		return true;
	}

}
?>