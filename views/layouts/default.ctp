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
<!DOCTYPE html>
<html>
	<head>
		<title><?php __('Project Decision Tool :: '); ?>
		<?php echo $title_for_layout; ?></title>
		<!--[if lt IE 9]>
	    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
	  <![endif]-->
		<?php
			echo $this->Html->css(array('bootstrap.min','application'));
			echo $this->Html->script(array('jquery.min', 'bootstrap.min', 'cakebootstrap', 'application'));
			echo $scripts_for_layout;
		?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div class="navbar navbar-fixed-top">
	    <div class="navbar-inner">
	      <div class="container">
	        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	        </a>
	        <a class="brand" href="#">Project Decision Tool</a>
	        <div class="nav-collapse">
	          <ul class="nav">
	            <li><?php echo $this->Html->link('Home', '/'); ?></li>
							<?php if($session->read('Auth.User.id')): ?>
								<li><?php echo $this->Html->link("Manage Users", array('controller' => 'users', 'action' => 'index', 'admin' => true)); ?></li>
								<li><?php echo $this->Html->link("Manage Projects", array('controller' => 'projects', 'action' => 'index', 'admin' => true)); ?></li>
							<?php endif; ?>
	          </ul>
						<ul class="nav pull-right">
							<?php if($session->read('Auth.User.id')): ?>
								<li><?php echo $this->Html->link("Welcome ".$session->read('Auth.User.username'), array('controller' => 'users', 'action' => 'my_account', 'admin' => false)); ?></li>
								<li><?php echo $this->Html->link('Sign Out', array('controller' => 'users', 'action' => 'sign_out', 'admin' => false)); ?></li>
							<?php endif; ?>
						</ul>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="container">
			<div class="row-fluid">
				<div class="span3"><?php echo $this->element('../users/_sidebar_sign_in'); ?></div>
				<div class="span9">
					<?php echo $this->Session->flash(); ?>
					<?php echo $content_for_layout; ?>
				</div>
			</div>
		</div>
	</body>
</html>