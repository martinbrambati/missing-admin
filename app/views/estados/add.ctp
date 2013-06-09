<div class="estados form">
<?php echo $this->Form->create('Estado');?>
	<fieldset>
 		<legend><?php __('Agregar Estado'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Estados', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Chicosperdidos', true), array('controller' => 'chicosperdidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Chicosperdido', true), array('controller' => 'chicosperdidos', 'action' => 'add')); ?> </li>
	</ul>
</div>