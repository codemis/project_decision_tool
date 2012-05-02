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
?>
<?php if($session->read('Auth.User.id')): ?>
	&nbsp;
<?php else: ?>
<div id="sign_in_options_wrapper">
	<div id="sign_in_form_wrapper">
		<h3>Sign In</h3>
		<?php echo $this->element('../users/_sign_in_form', array('form_class' => 'form-vertical')); ?>
		<a href="#" class="show_sign_in_option" rel="resend_activation_wrapper">Resend Activation</a> | <a href="#" class="show_sign_in_option" rel="forgot_password_wrapper">Forgot Password</a>
	</div>
	<div id="resend_activation_wrapper" class="hide">
		<h3>Resend Activation</h3>
		<?php 
			echo $form->create('User', array('action' => 'resend_activation'));
			echo $form->input('email', array('type' => 'text'));
			echo $form->end('Resend Activation');
		?>
		<a href="#" class="show_sign_in_option" rel="sign_in_form_wrapper">Sign In</a>  | <a href="#" class="show_sign_in_option" rel="forgot_password_wrapper">Forgot Password</a>
	</div>
	<div id="forgot_password_wrapper" class="hide">
		<h3>Forgot Password</h3>
		<?php 
				echo $form->create('User', array('action' => 'forgot_password'));
				echo $form->input('email');
				echo $form->end('Request Password Change');
		?>
		<a href="#" class="show_sign_in_option" rel="sign_in_form_wrapper">Sign In</a>  | <a href="#" class="show_sign_in_option" rel="resend_activation_wrapper">Resend Activation</a>
	</div>
</div>
<?php endif; ?>
