<div class="diasMedios view">
<h2><?php  __('Dias Medio');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $diasMedio['DiasMedio']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Dia'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($diasMedio['Dia']['name'], array('controller' => 'dias', 'action' => 'view', $diasMedio['Dia']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Medio'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($diasMedio['Medio']['id'], array('controller' => 'medios', 'action' => 'view', $diasMedio['Medio']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dias Medio', true), array('action' => 'edit', $diasMedio['DiasMedio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Dias Medio', true), array('action' => 'delete', $diasMedio['DiasMedio']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $diasMedio['DiasMedio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Dias Medios', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Dias Medio', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Dias', true), array('controller' => 'dias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Dia', true), array('controller' => 'dias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Medios', true), array('controller' => 'medios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Medio', true), array('controller' => 'medios', 'action' => 'add')); ?> </li>
	</ul>
</div>
