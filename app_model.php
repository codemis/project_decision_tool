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
 * Overwrite CakePHP's AppModel to add functionality for all models
 * 
 */
/**
 * Import the Sanitizer 
 *
 * @author Johnathan Pulos
 */
App::import('Sanitize');
class AppModel extends Model { 
	/**
	 * Setup CakePHP behaviors
	 *
	 * @var array
	 */
	public $actsAs = array('Containable');
	
	/**
	 * Set the level of recursion when doing a find call
	 *
	 * @var integer
	 */
  public $recursive = -1;
	
	/**
	* Validates that the field is unique.
	*
	* @return Boolen
	* @author Johnathan Pulos
	*/
	function _isUnique($check, $field) {
		$conditions = array();
		foreach($check as $c) {
			$conditions[] = "$this->name.$field=\"" . addslashes($c) . "\"";
		}
		/**
		 * If they are updating,  make sure not to get to get the current by excluding its id
		 *
		 * @author Johnathan Pulos
		 */
		if(isset($this->data[$this->name]['id'])) {
			$conditions[] = "$this->name.id<>\"".addslashes($this->data[$this->name]['id'])."\"";
		}
		$results = $this->find($conditions);
		return (!empty($results)) ? false : true;
	}
}
?>