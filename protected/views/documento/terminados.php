<?php
$this->pageCaption='Documentos terminados';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar documentos terminados';
$this->breadcrumbs=array(
	'Documentos terminados',
);


?>

<table id="Client" class="table table-bordered">
    <thead>
        <tr>
        	<th>No.</th>
            <th>Proveedor</th>
            <th>Area Generadora</th>
            <th>Fecha de Creación</th>
            <th>Fecha de Caducidad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

	<?php $numero=0; foreach ($doctosEnProceso as $doctoEnProceso) {$numero=$numero+1;?>
        <tr>
            <td><?php echo $numero; ?></td>
            <td><?php echo $doctoEnProceso->documento->proveedor;?></td>
            <td><?php echo $doctoEnProceso->documento->areaGeneradora->nombre;?></td>
            <td><?php echo date('d-m-Y',strtotime($doctoEnProceso->documento->fecha_f));?></td>
            <td><?php echo date('d-m-Y',strtotime($doctoEnProceso->documento->tiempoValidez));?></td>
            <td>
            <div class="text-center">
          <?php echo CHtml::link('<i class="fa fa-eye"></i>',array('documento/update','id'=>$doctoEnProceso->documento->id),array('class'=>'btn btn-info btn-sm')); ?>
            </div>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
