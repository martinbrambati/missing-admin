<div class="destinatarios form">
<?php echo $this->Form->create('Destinatario');?>
	<fieldset>
 		<legend><?php __('Edit Destinatario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('medio_id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('email');
		echo $this->Form->input('telefono');
		echo $this->Form->input('direccion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $this->Form->value('Destinatario.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Destinatario.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Destinatarios', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Medios', true), array('controller' => 'medios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Medio', true), array('controller' => 'medios', 'action' => 'add')); ?> </li>
	</ul>
</div>