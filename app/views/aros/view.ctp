<div class="aros view">
<h2><?php  __('Aro');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $aro['Aro']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Parent Aro'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($aro['ParentAro']['id'], array('controller' => 'aros', 'action' => 'view', $aro['ParentAro']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Model'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $aro['Aro']['model']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Foreign Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $aro['Aro']['foreign_key']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alias'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $aro['Aro']['alias']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lft'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $aro['Aro']['lft']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rght'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $aro['Aro']['rght']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Aro', true), array('action' => 'edit', $aro['Aro']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Aro', true), array('action' => 'delete', $aro['Aro']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $aro['Aro']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Aros', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Aro', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Aros', true), array('controller' => 'aros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Parent Aro', true), array('controller' => 'aros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Acos', true), array('controller' => 'acos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Aco', true), array('controller' => 'acos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Aros');?></h3>
	<?php if (!empty($aro['ChildAro'])):?>
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
		foreach ($aro['ChildAro'] as $childAro):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $childAro['id'];?></td>
			<td><?php echo $childAro['parent_id'];?></td>
			<td><?php echo $childAro['model'];?></td>
			<td><?php echo $childAro['foreign_key'];?></td>
			<td><?php echo $childAro['alias'];?></td>
			<td><?php echo $childAro['lft'];?></td>
			<td><?php echo $childAro['rght'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'aros', 'action' => 'view', $childAro['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'aros', 'action' => 'edit', $childAro['id'])); ?>
				<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'aros', 'action' => 'delete', $childAro['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $childAro['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Child Aro', true), array('controller' => 'aros', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Acos');?></h3>
	<?php if (!empty($aro['Aco'])):?>
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
		foreach ($aro['Aco'] as $aco):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $aco['id'];?></td>
			<td><?php echo $aco['parent_id'];?></td>
			<td><?php echo $aco['model'];?></td>
			<td><?php echo $aco['foreign_key'];?></td>
			<td><?php echo $aco['alias'];?></td>
			<td><?php echo $aco['lft'];?></td>
			<td><?php echo $aco['rght'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'acos', 'action' => 'view', $aco['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'acos', 'action' => 'edit', $aco['id'])); ?>
				<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'acos', 'action' => 'delete', $aco['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $aco['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Aco', true), array('controller' => 'acos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
