<div class="groups form">
<?php echo $this->Form->create('Group');?>
	<fieldset>
 		<legend><?php __('Edit Group'); ?></legend>
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

		<li><?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $this->Form->value('Group.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Group.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Groups', true), array('action' => 'index'));?></li>
	</ul>
</div>