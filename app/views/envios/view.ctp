<div class="envios view">
<h2><?php  __('Envio');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $envio['Envio']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Chicosperdido'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($envio['Chicosperdido']['nombre'].", ".$envio['Chicosperdido']['apellidos'], array('controller' => 'chicosperdidos', 'action' => 'view', $envio['Chicosperdido']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Medio'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($envio['Medio']['name'], array('controller' => 'medios', 'action' => 'view', $envio['Medio']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Envio'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $envio['Envio']['fecha_envio']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Envio', true), array('action' => 'edit', $envio['Envio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Envio', true), array('action' => 'delete', $envio['Envio']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $envio['Envio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Envios', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Envio', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar chicosperdidos', true), array('controller' => 'chicosperdidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Chicosperdido', true), array('controller' => 'chicosperdidos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Medios', true), array('controller' => 'medios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Medio', true), array('controller' => 'medios', 'action' => 'add')); ?> </li>
	</ul>
</div>
