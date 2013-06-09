<div class="medios index">
	<h2><?php __('Medios');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('tipofrecuencia_id');?></th>
			<th><?php echo $this->Paginator->sort('cantidad_fotos');?></th>
			<th><?php echo $this->Paginator->sort('tipofoto_id');?></th>
			<th><?php echo $this->Paginator->sort('enviadatos');?></th>
			<th><?php echo $this->Paginator->sort('zona_id');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($medios as $medio):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $medio['Medio']['id']; ?>&nbsp;</td>
		<td><?php echo $medio['Medio']['name']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($medio['Tipofrecuencia']['name'], array('controller' => 'tipofrecuencias', 'action' => 'view', $medio['Tipofrecuencia']['id'])); ?>
		</td>
		<td><?php echo $medio['Medio']['cantidad_fotos']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($medio['Tipofoto']['name'], array('controller' => 'tipofotos', 'action' => 'view', $medio['Tipofoto']['id'])); ?>
		</td>
		<td><?php echo $medio['Medio']['enviadatos']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($medio['Zona']['name'], array('controller' => 'zonas', 'action' => 'view', $medio['Zona']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $medio['Medio']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $medio['Medio']['id'])); ?>
			<?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $medio['Medio']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $medio['Medio']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nuevo Medio', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Buscar Medio', true), array('action' => 'find')); ?></li>
		
		
	</ul>
</div>