<?php
$this->pageCaption='Adminsitrar ';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='documento';
$this->breadcrumbs=array(
	'Documento'=>array('index'),
	'Adminsitrar',
);

$this->menu=array(
	array('label'=>'Listar Documento','url'=>array('index')),
	array('label'=>'Crear Documento','url'=>array('create')),
);

$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'documento-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'fecha_f',
		'proveedor',
		array('name'=>'areaGeneradora_did',
		        'value'=>'$data->areaGeneradora->nombre',
			    'filter'=>CHtml::listData(AreaGeneradora::model()->findAll(), 'id', 'nombre'),),
		array('name'=>'estatus_did',
		        'value'=>'$data->estatus->nombre',
			    'filter'=>CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre'),),
		'tiempoValidez',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
