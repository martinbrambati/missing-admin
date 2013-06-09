<div class="init index">
	<h2><?php __('Bienvenido/a');?></h2>
	<p>Hola! Bienvenido al sistema de administraci&oacute;n de <strong>chicos perdidos en argentina</strong>. </p><p>Para empezar, las acciones est&aacute;n en el panel izquierdo, siempre!, y en el panel central se despliegan los listados e informaci&oacute;n importante. 

El sistema est&aacute; organizado de forma tal que algunos usuarios tengan ciertos roles, por ejemplo, un 'admin' tiene mas privilegios que un 'manager' y un manager tiene mas privilegios que un 'user'.

El &uacute;nico usuario que puede administrar usuarios es el 'admin'.
El 'manager' no puede administrar usuarios pero puede generar contenido.
El rol 'user' solo puede visualizar informaci&oacute;n.
	</p>
	<p>
	Ante cualquier inconveniente, por favor mandame un mail a <a href="mailto:martinbrambati@hotmail.com">martinbrambati@hotmail.com</a>, que soy el responsable por el c&oacute;digo fuente de este sistema.
	</p>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
<?php 
if(!$voluntario){
?>
		<li><?php echo $this->Html->link(__('Medios de informacion', true), array('controller' => 'medios', 'action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Destinatarios de medios', true), array('controller' => 'destinatarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Chicos perdidos', true), array('controller' => 'chicosperdidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Envios a los medios', true), array('controller' => 'envios', 'action' => 'index')); ?> </li>
		
		<li><?php echo $this->Html->link(__('Usuarios del sistema', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
</div>
<?php }else{?>

		<li><?php echo $this->Html->link(__('Envios a los medios', true), array('controller' => 'envios', 'action' => 'index')); ?> </li>
<?php }?>
	</ul>