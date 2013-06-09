<div class="dias view">
<h2><?php  __('Dia');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dia['Dia']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dia['Dia']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dia', true), array('action' => 'edit', $dia['Dia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Dia', true), array('action' => 'delete', $dia['Dia']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $dia['Dia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Dias', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Dia', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Medios', true), array('controller' => 'medios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Medio', true), array('controller' => 'medios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Medios');?></h3>
	<?php if (!empty($dia['Medio'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Tipofrecuencia Id'); ?></th>
		<th><?php __('Cantidad Fotos'); ?></th>
		<th><?php __('Tipofoto Id'); ?></th>
		<th><?php __('Enviadatos'); ?></th>
		<th><?php __('Zona Id'); ?></th>
		<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($dia['Medio'] as $medio):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $medio['id'];?></td>
			<td><?php echo $medio['name'];?></td>
			<td><?php echo $medio['tipofrecuencia_id'];?></td>
			<td><?php echo $medio['cantidad_fotos'];?></td>
			<td><?php echo $medio['tipofoto_id'];?></td>
			<td><?php echo $medio['enviadatos'];?></td>
			<td><?php echo $medio['zona_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'medios', 'action' => 'view', $medio['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'medios', 'action' => 'edit', $medio['id'])); ?>
				<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'medios', 'action' => 'delete', $medio['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $medio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Medio', true), array('controller' => 'medios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
