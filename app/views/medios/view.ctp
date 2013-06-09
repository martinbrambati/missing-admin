<div class="medios view">
<h2><?php  __('Medio');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $medio['Medio']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $medio['Medio']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipofrecuencia'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($medio['Tipofrecuencia']['name'], array('controller' => 'tipofrecuencias', 'action' => 'view', $medio['Tipofrecuencia']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cantidad Fotos'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $medio['Medio']['cantidad_fotos']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipofoto'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($medio['Tipofoto']['name'], array('controller' => 'tipofotos', 'action' => 'view', $medio['Tipofoto']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Enviadatos'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $medio['Medio']['enviadatos']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Zona'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($medio['Zona']['name'], array('controller' => 'zonas', 'action' => 'view', $medio['Zona']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Medio', true), array('action' => 'edit', $medio['Medio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Medio', true), array('action' => 'delete', $medio['Medio']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $medio['Medio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Medios', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Medio', true), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Destinatarios');?></h3>
	<?php if (!empty($medio['Destinatario'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Medio Id'); ?></th>
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Email'); ?></th>
		<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($medio['Destinatario'] as $destinatario):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $destinatario['id'];?></td>
			<td><?php echo $destinatario['medio_id'];?></td>
			<td><?php echo $destinatario['nombre'];?></td>
			<td><?php echo $destinatario['email'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'destinatarios', 'action' => 'view', $destinatario['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'destinatarios', 'action' => 'edit', $destinatario['id'])); ?>
				<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'destinatarios', 'action' => 'delete', $destinatario['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $destinatario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Destinatario', true), array('controller' => 'destinatarios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Envios');?></h3>
	<?php if (!empty($medio['Envio'])):?>
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
		foreach ($medio['Envio'] as $envio):
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
<div class="related">
	<h3><?php __('Related Dias');?></h3>
	<?php if (!empty($medio['Dia'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($medio['Dia'] as $dia):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $dia['id'];?></td>
			<td><?php echo $dia['name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'dias', 'action' => 'view', $dia['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'dias', 'action' => 'edit', $dia['id'])); ?>
				<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'dias', 'action' => 'delete', $dia['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $dia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Dia', true), array('controller' => 'dias', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
