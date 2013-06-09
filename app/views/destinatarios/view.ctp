<div class="destinatarios view">
<h2><?php  __('Destinatario');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $destinatario['Destinatario']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Medio'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($destinatario['Medio']['name'], array('controller' => 'medios', 'action' => 'view', $destinatario['Medio']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $destinatario['Destinatario']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $destinatario['Destinatario']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Telefono'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $destinatario['Destinatario']['telefono']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Direccion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $destinatario['Destinatario']['direccion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Destinatario', true), array('action' => 'edit', $destinatario['Destinatario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Destinatario', true), array('action' => 'delete', $destinatario['Destinatario']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $destinatario['Destinatario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Destinatarios', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Destinatario', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Medios', true), array('controller' => 'medios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Medio', true), array('controller' => 'medios', 'action' => 'add')); ?> </li>
	</ul>
</div>
