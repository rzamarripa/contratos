<?php
$this->pageCaption='Ver DoctoEnProceso #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Docto En Proceso'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar DoctoEnProceso','url'=>array('index')),
	array('label'=>'Crear DoctoEnProceso','url'=>array('create')),
	array('label'=>'Actualizar DoctoEnProceso','url'=>array('update','id'=>$model->id)),
	array('label'=>'Eliminar DoctoEnProceso','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estás seguro que quieres eliminar este elemento?')),
	array('label'=>'Administrar DoctoEnProceso','url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'htmlOptions'=>array('class'=>'table table-bordered table-striped'),
	'attributes'=>array(
		'id',
		array(	'name'=>'documento_did',
			        'value'=>$model->documento->nombre,),
		array(	'name'=>'proceso_did',
			        'value'=>$model->proceso->nombre,),
		'fecha_ft',
		array(	'name'=>'estatus_did',
			        'value'=>$model->estatus->nombre,),
	),
)); ?>
