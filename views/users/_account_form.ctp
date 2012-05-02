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
 */
	echo $form->create('User');
	echo $form->input('username', array('type' => 'text'));
	echo $form->input('name', array('type' => 'text'));
	echo $form->input('email', array('type' => 'text'));
	echo $form->input('password_original', array('type' => 'password', 'label' => 'New Password'));
	echo $form->input('password_confirmation', array('type' => 'password', 'label' => 'Confirm Password'));
	if($change_pass == 1):
		echo $form->input('changePass', array('label'=>'Change Password','type'=>'checkbox','value'=>'1', 'div' => 'checkbox')); 
	endif;
?>
<?php echo $form->end($btn_txt); ?>