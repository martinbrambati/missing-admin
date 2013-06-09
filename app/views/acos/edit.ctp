<div class="acos form">
<?php echo $this->Form->create('Aco');?>
	<fieldset>
 		<legend><?php __('Edit Aco'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('parent_id');
		echo $this->Form->input('model');
		echo $this->Form->input('foreign_key');
		echo $this->Form->input('alias');
		echo $this->Form->input('lft');
		echo $this->Form->input('rght');
		echo $this->Form->input('Aro');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $this->Form->value('Aco.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Aco.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Acos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Acos', true), array('controller' => 'acos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Parent Aco', true), array('controller' => 'acos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Aros', true), array('controller' => 'aros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Aro', true), array('controller' => 'aros', 'action' => 'add')); ?> </li>
	</ul>
</div>