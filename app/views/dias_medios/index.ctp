<div class="diasMedios index">
	<h2><?php __('Dias Medios');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('dia_id');?></th>
			<th><?php echo $this->Paginator->sort('medio_id');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($diasMedios as $diasMedio):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $diasMedio['DiasMedio']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($diasMedio['Dia']['name'], array('controller' => 'dias', 'action' => 'view', $diasMedio['Dia']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($diasMedio['Medio']['id'], array('controller' => 'medios', 'action' => 'view', $diasMedio['Medio']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $diasMedio['DiasMedio']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $diasMedio['DiasMedio']['id'])); ?>
			<?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $diasMedio['DiasMedio']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $diasMedio['DiasMedio']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Dias Medio', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Dias', true), array('controller' => 'dias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Dia', true), array('controller' => 'dias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Medios', true), array('controller' => 'medios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Medio', true), array('controller' => 'medios', 'action' => 'add')); ?> </li>
	</ul>
</div>