<?php
$this->pageCaption='Documentos En Proceso';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar documentos en proceso';
$this->breadcrumbs=array(
	'Documentos En Proceso',
);


?>

<table id="Client" class="table table-bordered">
    <thead>
        <tr>
        	<th>No.</th>
            <th>Proveedor</th>
            <th>Area Generadora</th>
            <th>Fecha Creación</th>
            <th>Ubicación Actual</th>
            <th>Plazo</th>
            <th>Paso</th>
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
            <td class="<?php if($doctoEnProceso->estatus_did == 3){echo 'danger';} ?>"><?php
            if($doctoEnProceso->area->nombre == 'Area Generadora'){$areaNombre = $doctoEnProceso->documento->areaGeneradora->nombre;}else{$areaNombre =$doctoEnProceso->area->nombre;} echo 'En '.$areaNombre . ' desde el ' . date('d-m-Y',strtotime($doctoEnProceso->fecha_ft));?></td>
            <td class="<?php $fechaProceso = date('d-m-Y H:i:s', strtotime('+'.$doctoEnProceso->tiempo. 'hour',strtotime($doctoEnProceso->fecha_ft))); if(date('d-m-Y H:i:s')>=$fechaProceso){echo 'danger';} ?>"><?php echo $doctoEnProceso->tiempo .' hrs'; ?></td>
            <td><?php echo $doctoEnProceso->area_did.'-10';?></td>
            <td>
            <div class="text-center">
            <?php if($doctoEnProceso->area_did ==1){echo CHtml::link('<i class="fa fa-arrow-left"></i>',array('doctoEnProceso/update','id'=>$doctoEnProceso->id,'Back'=>'RetrasarProceso'),array('class'=>'btn btn-success btn-sm disabled'));}else{
                    echo CHtml::link('<i class="fa fa-arrow-left"></i>',array('doctoEnProceso/update','id'=>$doctoEnProceso->id,'Back'=>'RetrasarProceso'),array('class'=>'btn btn-success btn-sm'));
                } ?>
          <?php echo CHtml::link('<i class="fa fa-arrow-right"></i>',array('doctoEnProceso/update','id'=>$doctoEnProceso->id,'Next'=>'AvanzarProceso'),array('class'=>'btn btn-info btn-sm')); ?>
         <?php echo CHtml::link('<i class="fa fa-exclamation"></i>',array('doctoEnProceso/update','id'=>$doctoEnProceso->id,'Urgente'=>'Urgente'),array('class'=>'btn btn-danger btn-sm')); ?>
            </div>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
