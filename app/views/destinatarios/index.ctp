<div class="destinatarios index">
	<h2><?php __('Destinatarios');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('medio_id');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('telefono');?></th>
			<th><?php echo $this->Paginator->sort('direccion');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($destinatarios as $destinatario):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $destinatario['Destinatario']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($destinatario['Medio']['name'], array('controller' => 'medios', 'action' => 'view', $destinatario['Medio']['id'])); ?>
		</td>
		<td><?php echo $destinatario['Destinatario']['nombre']; ?>&nbsp;</td>
		<td><?php echo $destinatario['Destinatario']['email']; ?>&nbsp;</td>
		<td><?php echo $destinatario['Destinatario']['telefono']; ?>&nbsp;</td>
		<td><?php echo $destinatario['Destinatario']['direccion']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $destinatario['Destinatario']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $destinatario['Destinatario']['id'])); ?>
			<?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $destinatario['Destinatario']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $destinatario['Destinatario']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nuevo Destinatario', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Medios', true), array('controller' => 'medios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Medio', true), array('controller' => 'medios', 'action' => 'add')); ?> </li>
	</ul>
</div>