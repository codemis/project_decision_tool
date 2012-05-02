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
<div class="row">
  <div class="span6"><h1>Current Projects</h1></div>
  <div class="span3 right"><?php echo $this->Html->link("<i class='icon-plus icon-white'></i>&nbsp;Add Project", array('controller' => 'projects', 'action' => 'add', 'admin' => true), array('escape' => false, 'class' => 'btn btn-primary')); ?></div>
</div>
<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-condensed">
	<thead>
		<tr>
			<th>Projects</th>
			<th class="actions"><?php __('Actions');?></th>
		</tr>
	</thead>
	<tbody>
		<?php
		$i = 0;
		foreach ($projects as $project):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
			<tr<?php echo $class;?>>
				<td>
					<?php echo $user['Project']['title']; ?> by <?php echo $user['Project']['submitter_name']; ?>
				</td>
				<td class="actions">
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>