<div class="envios form">
<?php echo $this->Form->create('Envio');?>
	<fieldset>
 		<legend><?php __('Edit Envio'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('chicosperdido_id');
		echo $this->Form->input('medio_id');
		echo $this->Form->input('fecha_envio');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $this->Form->value('Envio.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Envio.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Envios', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar chicosperdidos', true), array('controller' => 'chicosperdidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Chicosperdido', true), array('controller' => 'chicosperdidos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Medios', true), array('controller' => 'medios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Medio', true), array('controller' => 'medios', 'action' => 'add')); ?> </li>
	</ul>
</div>