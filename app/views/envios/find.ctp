<div class="envios index">
	<h2><?php __('Envios');?></h2>
	<div>
	<?php echo $this->Form->create('Envio');?>
	<fieldset>
 		<legend><?php __('Buscar Envio'); ?></legend>
	<?php
		//echo $this->Form->input('chicosperdido_input',array('label'=>'<b>Apellido'));
		//echo $this->Form->input('medio_input',array('label'=>'<b>Medio'));
		echo $this->Form->input('fecha_envio_input',array('label'=>'<b>Fecha en formato 10-03-2011'));
		echo $this->Form->label('chicosperdido_id','<b>chicosperdidos');
		echo $this->Form->select('chicosperdido_id',$chicosperdidos,array('selected' => $this->data["Envio"]["chicosperdido_id"]));
		echo $this->Form->label('medio_id','<b>Medio');
		echo $this->Form->select('medio_id',$medios,array('selected' => $this->data["Envio"]["medio_id"]));
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('chicosperdido_id');?></th>
			<th><?php echo $this->Paginator->sort('medio_id');?></th>
			<th><?php echo $this->Paginator->sort('fecha_envio');?></th>
			<?php if(!$voluntario){ ?>
			<th class="actions"><?php __('Acciones');?></th>
			<?php }?>
	</tr>
	<?php
	$i = 0;
	foreach ($envios as $envio):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $envio['Envio']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($envio['Chicosperdido']['nombre_apellido'], array('controller' => 'chicosperdidos', 'action' => 'view', $envio['Chicosperdido']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($envio['Medio']['name'], array('controller' => 'medios', 'action' => 'view', $envio['Medio']['id'])); ?>
		</td>
		<td><?php echo $envio['Envio']['fecha_envio']; ?>&nbsp;</td>
		<?php if(!$voluntario){ ?>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $envio['Envio']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $envio['Envio']['id'])); ?>
			<?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $envio['Envio']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $envio['Envio']['id'])); ?>
		</td>
		<?php }?>
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
	<?php if(!$voluntario){ ?>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Envio', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar chicosperdidos', true), array('controller' => 'chicosperdidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Chicosperdido', true), array('controller' => 'chicosperdidos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Medios', true), array('controller' => 'medios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Medio', true), array('controller' => 'medios', 'action' => 'add')); ?> </li>
		
		
	</ul>
</div>
		<?php } ?>