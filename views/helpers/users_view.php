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
 * A View Helper for the users pages
 */
class UsersViewHelper extends AppHelper{
	
	/**
	 * The textual active state of the user
	 *
	 * @var array
	 */
	public $activeStates = array(0 => 'Pending', 1 => 'Active', 2 => 'Suspended');
	
	/**
	 * Get the active state of the User
	 *
	 * @param integer $active User.active
	 * @return string
	 * @access public
	 * @author Johnathan Pulos
	 */
	function activeState($active){
		return $this->activeStates[$active];
	}
}
?>