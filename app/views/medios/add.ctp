<div class="medios form">
<?php echo $this->Form->create('Medio');?>
	<fieldset>
 		<legend><?php __('Agregar Medio'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('tipofrecuencia_id');
		echo $this->Form->input('cantidad_fotos');
		echo $this->Form->input('tipofoto_id');
		echo $this->Form->input('enviadatos');
		echo $this->Form->input('zona_id');
		echo $this->Form->input('Dia');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Medios', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Tipofrecuencias', true), array('controller' => 'tipofrecuencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Tipofrecuencia', true), array('controller' => 'tipofrecuencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Tipofotos', true), array('controller' => 'tipofotos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Tipofoto', true), array('controller' => 'tipofotos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Zonas', true), array('controller' => 'zonas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Zona', true), array('controller' => 'zonas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Destinatarios', true), array('controller' => 'destinatarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Destinatario', true), array('controller' => 'destinatarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Envios', true), array('controller' => 'envios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Envio', true), array('controller' => 'envios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Dias', true), array('controller' => 'dias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Dia', true), array('controller' => 'dias', 'action' => 'add')); ?> </li>
	</ul>
</div>