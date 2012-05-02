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