<div class="medios index">
	<h2><?php __('Medios');?></h2>
<div>	
	<?php echo $this->Form->create('Medio');?>
	<fieldset>
 		<legend><?php __('Buscar Medio'); ?></legend>
	<?php
		echo $this->Form->input('name');
		//echo $this->Form->input('tipofrecuencia_id');
		echo $this->Form->label('tipofrecuencia_id','<b>Frecuencia');
		echo $this->Form->select('tipofrecuencia_id',$tipofrecuencias,array('selected' => $this->data["Medio"]["tipofrecuencia_id"]));
		echo $this->Form->input('cantidad_fotos');
		//echo $this->Form->input('tipofoto_id');
		echo $this->Form->label('tipofoto_id','<b>Tipo de foto');
		echo $this->Form->select('tipofoto_id',$tipofotos,array('selected' => $this->data["Medio"]["tipofoto_id"]));
		echo $this->Form->input('enviadatos');
		//echo $this->Form->input('zona_id');
		echo $this->Form->label('zona_id','<b>Zona');
		echo $this->Form->select('zona_id',$zonas,array('selected' => $this->data["Medio"]["zona_id"]));
		
		echo $this->Form->input('Dia');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>

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
