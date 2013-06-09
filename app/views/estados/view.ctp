<div class="estados view">
<h2><?php  __('Estado');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estado['Estado']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estado['Estado']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estado', true), array('action' => 'edit', $estado['Estado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Estado', true), array('action' => 'delete', $estado['Estado']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $estado['Estado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Estados', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Estado', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Chicosperdidos', true), array('controller' => 'chicosperdidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Chicosperdido', true), array('controller' => 'chicosperdidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Chicosperdidos');?></h3>
	<?php if (!empty($estado['Chicosperdido'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Apellidos'); ?></th>
		<th><?php __('Estado Id'); ?></th>
		<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($estado['Chicosperdido'] as $chicosperdido):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $chicosperdido['id'];?></td>
			<td><?php echo $chicosperdido['nombre'];?></td>
			<td><?php echo $chicosperdido['apellidos'];?></td>
			<td><?php echo $chicosperdido['estado_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'chicosperdidos', 'action' => 'view', $chicosperdido['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'chicosperdidos', 'action' => 'edit', $chicosperdido['id'])); ?>
				<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'chicosperdidos', 'action' => 'delete', $chicosperdido['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $chicosperdido['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Chicosperdido', true), array('controller' => 'chicosperdidos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
