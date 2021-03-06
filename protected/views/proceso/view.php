<?php
$this->pageCaption='Ver Proceso #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Proceso'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Proceso','url'=>array('index')),
	array('label'=>'Crear Proceso','url'=>array('create')),
	array('label'=>'Actualizar Proceso','url'=>array('update','id'=>$model->id)),
	array('label'=>'Eliminar Proceso','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estás seguro que quieres eliminar este elemento?')),
	array('label'=>'Administrar Proceso','url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'htmlOptions'=>array('class'=>'table table-bordered table-striped'),
	'attributes'=>array(
		'id',
		array(	'name'=>'area_did',
			        'value'=>$model->area->nombre,),
		'tiempo',
		array(	'name'=>'estatus_did',
			        'value'=>$model->estatus->nombre,),
	),
)); ?>
