<div class="tipofotos form">
<?php echo $this->Form->create('Tipofoto');?>
	<fieldset>
 		<legend><?php __('Edit Tipofoto'); ?></legend>
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

		<li><?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $this->Form->value('Tipofoto.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Tipofoto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Tipofotos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Medios', true), array('controller' => 'medios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Medio', true), array('controller' => 'medios', 'action' => 'add')); ?> </li>
	</ul>
</div>