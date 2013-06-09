<div class="chicosperdidos form">
<?php echo $this->Form->create('Chicosperdido');?>
	<fieldset>
 		<legend><?php __('Edit Chicosperdido'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('Falta_desde');
		echo $this->Form->input('Edad_En_La_Foto');
		echo $this->Form->input('Edad_Actual');
		echo $this->Form->input('Fecha_De_Nacimiento');
		echo $this->Form->input('Lugar_De_Residencia');
		echo $this->Form->input('estado_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $this->Form->value('Chicosperdido.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Chicosperdido.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Chicosperdidos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Estados', true), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Estado', true), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Envios', true), array('controller' => 'envios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Envio', true), array('controller' => 'envios', 'action' => 'add')); ?> </li>
	</ul>
</div>