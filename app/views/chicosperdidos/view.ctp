<div class="chicosperdidos view">
<h2><?php  __('Chicosperdido');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $chicosperdido['Chicosperdido']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $chicosperdido['Chicosperdido']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Apellidos'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $chicosperdido['Chicosperdido']['apellidos']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Falta Desde'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $chicosperdido['Chicosperdido']['Falta_desde']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Edad En La Foto'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $chicosperdido['Chicosperdido']['Edad_En_La_Foto']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Edad Actual'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $chicosperdido['Chicosperdido']['Edad_Actual']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha De Nacimiento'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $chicosperdido['Chicosperdido']['Fecha_De_Nacimiento']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lugar De Residencia'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $chicosperdido['Chicosperdido']['Lugar_De_Residencia']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Estado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($chicosperdido['Estado']['name'], array('controller' => 'estados', 'action' => 'view', $chicosperdido['Estado']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Chicosperdido', true), array('action' => 'edit', $chicosperdido['Chicosperdido']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Chicosperdido', true), array('action' => 'delete', $chicosperdido['Chicosperdido']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $chicosperdido['Chicosperdido']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Chicosperdidos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Chicosperdido', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Estados', true), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Estado', true), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Envios', true), array('controller' => 'envios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Envio', true), array('controller' => 'envios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Envios');?></h3>
	<?php if (!empty($chicosperdido['Envio'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Chicosperdido Id'); ?></th>
		<th><?php __('Medio Id'); ?></th>
		<th><?php __('Fecha Envio'); ?></th>
		<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($chicosperdido['Envio'] as $envio):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $envio['id'];?></td>
			<td><?php echo $envio['chicosperdido_id'];?></td>
			<td><?php echo $envio['medio_id'];?></td>
			<td><?php echo $envio['fecha_envio'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'envios', 'action' => 'view', $envio['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'envios', 'action' => 'edit', $envio['id'])); ?>
				<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'envios', 'action' => 'delete', $envio['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $envio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Envio', true), array('controller' => 'envios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
