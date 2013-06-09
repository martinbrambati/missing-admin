<div class="acos view">
<h2><?php  __('Aco');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $aco['Aco']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Parent Aco'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($aco['ParentAco']['id'], array('controller' => 'acos', 'action' => 'view', $aco['ParentAco']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Model'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $aco['Aco']['model']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Foreign Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $aco['Aco']['foreign_key']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alias'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $aco['Aco']['alias']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lft'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $aco['Aco']['lft']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rght'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $aco['Aco']['rght']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Aco', true), array('action' => 'edit', $aco['Aco']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Aco', true), array('action' => 'delete', $aco['Aco']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $aco['Aco']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Acos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Aco', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Acos', true), array('controller' => 'acos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Parent Aco', true), array('controller' => 'acos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Aros', true), array('controller' => 'aros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Aro', true), array('controller' => 'aros', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Acos');?></h3>
	<?php if (!empty($aco['ChildAco'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Parent Id'); ?></th>
		<th><?php __('Model'); ?></th>
		<th><?php __('Foreign Key'); ?></th>
		<th><?php __('Alias'); ?></th>
		<th><?php __('Lft'); ?></th>
		<th><?php __('Rght'); ?></th>
		<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($aco['ChildAco'] as $childAco):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $childAco['id'];?></td>
			<td><?php echo $childAco['parent_id'];?></td>
			<td><?php echo $childAco['model'];?></td>
			<td><?php echo $childAco['foreign_key'];?></td>
			<td><?php echo $childAco['alias'];?></td>
			<td><?php echo $childAco['lft'];?></td>
			<td><?php echo $childAco['rght'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'acos', 'action' => 'view', $childAco['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'acos', 'action' => 'edit', $childAco['id'])); ?>
				<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'acos', 'action' => 'delete', $childAco['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $childAco['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Child Aco', true), array('controller' => 'acos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Aros');?></h3>
	<?php if (!empty($aco['Aro'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Parent Id'); ?></th>
		<th><?php __('Model'); ?></th>
		<th><?php __('Foreign Key'); ?></th>
		<th><?php __('Alias'); ?></th>
		<th><?php __('Lft'); ?></th>
		<th><?php __('Rght'); ?></th>
		<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($aco['Aro'] as $aro):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $aro['id'];?></td>
			<td><?php echo $aro['parent_id'];?></td>
			<td><?php echo $aro['model'];?></td>
			<td><?php echo $aro['foreign_key'];?></td>
			<td><?php echo $aro['alias'];?></td>
			<td><?php echo $aro['lft'];?></td>
			<td><?php echo $aro['rght'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'aros', 'action' => 'view', $aro['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'aros', 'action' => 'edit', $aro['id'])); ?>
				<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'aros', 'action' => 'delete', $aro['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $aro['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Aro', true), array('controller' => 'aros', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
