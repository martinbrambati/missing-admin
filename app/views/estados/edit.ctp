<div class="estados form">
<?php echo $this->Form->create('Estado');?>
	<fieldset>
 		<legend><?php __('Edit Estado'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $this->Form->value('Estado.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Estado.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Estados', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Chicosperdidos', true), array('controller' => 'chicosperdidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Chicosperdido', true), array('controller' => 'chicosperdidos', 'action' => 'add')); ?> </li>
	</ul>
</div>