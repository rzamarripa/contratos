<?php
$this->pageCaption='Ver AreaGeneradora #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Area Generadora'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar AreaGeneradora','url'=>array('index')),
	array('label'=>'Crear AreaGeneradora','url'=>array('create')),
	array('label'=>'Actualizar AreaGeneradora','url'=>array('update','id'=>$model->id)),
	array('label'=>'Eliminar AreaGeneradora','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estás seguro que quieres eliminar este elemento?')),
	array('label'=>'Administrar AreaGeneradora','url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'htmlOptions'=>array('class'=>'table table-bordered table-striped'),
	'attributes'=>array(
		'id',
		'nombre',
		'responsable',
		array(	'name'=>'estatus_did',
			        'value'=>$model->estatus->nombre,),
	),
)); ?>
