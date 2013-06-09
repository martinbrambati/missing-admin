<div class="diasMedios form">
<?php echo $this->Form->create('DiasMedio');?>
	<fieldset>
 		<legend><?php __('Edit Dias Medio'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('dia_id');
		echo $this->Form->input('medio_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $this->Form->value('DiasMedio.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('DiasMedio.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Dias Medios', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Dias', true), array('controller' => 'dias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Dia', true), array('controller' => 'dias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Medios', true), array('controller' => 'medios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Medio', true), array('controller' => 'medios', 'action' => 'add')); ?> </li>
	</ul>
</div>