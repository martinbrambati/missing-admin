<div class="chicosperdidos index">
	<h2><?php __('Chicosperdidos');?></h2>
	<div>
	<?php echo $this->Form->create('Chicosperdido');?>
	<fieldset>
 		<legend><?php __('Buscar Chicosperdido'); ?></legend>
 	 	
	<!--div class="input text"><label for="ChicosperdidoNombreOApellido">Nombre O Apellido</label><input name="data[Chicosperdido][nombre_o_apellido]" type="text" id="ChicosperdidoNombreOApellido" onchange="javascript:complette();"-->
	<!--script>
	function complette(){
		document.getElementById('ChicosperdidoNombre').value = document.getElementById('ChicosperdidoNombreOApellido').value;
		document.getElementById('ChicosperdidoApellidos').value = document.getElementById('ChicosperdidoNombreOApellido').value;
		 
	}
	</script-->
 	<!--div id="campos_ocultos" style="display:none;visibility:hidden;"-->
	<?php
		echo $this->Form->input('nombre_apellido');
		//echo $this->Form->input('apellidos');
	?>
	<!--/div-->
	<?php
		//echo $this->Form->input('estado_id');
		echo $this->Form->label('estado_id','<b>Estado');
		echo $this->Form->select('estado_id',$estados,array('selected' => $this->data["Chicosperdido"]["estado_id"]));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
	
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('apellidos');?></th>
			<th><?php echo $this->Paginator->sort('estado_id');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($chicosperdidos as $chicosperdido):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $chicosperdido['Chicosperdido']['id']; ?>&nbsp;</td>
		<td><?php echo $chicosperdido['Chicosperdido']['nombre']; ?>&nbsp;</td>
		<td><?php echo $chicosperdido['Chicosperdido']['apellidos']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($chicosperdido['Estado']['name'], array('controller' => 'estados', 'action' => 'view', $chicosperdido['Estado']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $chicosperdido['Chicosperdido']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $chicosperdido['Chicosperdido']['id'])); ?>
			<?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $chicosperdido['Chicosperdido']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $chicosperdido['Chicosperdido']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nuevo Chico perdido', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Buscar Chico perdido', true), array('action' => 'find')); ?></li>
		
	</ul>
</div>