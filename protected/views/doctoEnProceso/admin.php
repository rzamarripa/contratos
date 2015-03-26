<?php
$this->pageCaption='Adminsitrar ';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='docto en proceso';
$this->breadcrumbs=array(
	'Docto En Proceso'=>array('index'),
	'Adminsitrar',
);

$this->menu=array(
	array('label'=>'Listar DoctoEnProceso','url'=>array('index')),
	array('label'=>'Crear DoctoEnProceso','url'=>array('create')),
);

$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'docto-en-proceso-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array('name'=>'documento_did',
		        'value'=>'$data->documento->nombre',
			    'filter'=>CHtml::listData(Documento::model()->findAll(), 'id', 'nombre'),),
		array('name'=>'proceso_did',
		        'value'=>'$data->proceso->nombre',
			    'filter'=>CHtml::listData(Proceso::model()->findAll(), 'id', 'nombre'),),
		'fecha_ft',
		array('name'=>'estatus_did',
		        'value'=>'$data->estatus->nombre',
			    'filter'=>CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre'),),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
