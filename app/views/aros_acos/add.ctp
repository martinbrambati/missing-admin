<div class="arosAcos form">
<?php echo $this->Form->create('ArosAco');?>
	<fieldset>
 		<legend><?php __('Agregar Aros Aco'); ?></legend>
	<?php
		echo $this->Form->input('aro_id');
		echo $this->Form->input('aco_id');
		echo $this->Form->input('_create');
		echo $this->Form->input('_read');
		echo $this->Form->input('_update');
		echo $this->Form->input('_delete');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Aros Acos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Aros', true), array('controller' => 'aros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Aro', true), array('controller' => 'aros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Acos', true), array('controller' => 'acos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Aco', true), array('controller' => 'acos', 'action' => 'add')); ?> </li>
	</ul>
</div>