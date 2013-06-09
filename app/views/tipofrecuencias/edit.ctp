<div class="tipofrecuencias form">
<?php echo $this->Form->create('Tipofrecuencia');?>
	<fieldset>
 		<legend><?php __('Edit Tipofrecuencia'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('dias');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $this->Form->value('Tipofrecuencia.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Tipofrecuencia.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Tipofrecuencias', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Medios', true), array('controller' => 'medios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Medio', true), array('controller' => 'medios', 'action' => 'add')); ?> </li>
	</ul>
</div>