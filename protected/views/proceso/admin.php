<?php
$this->pageCaption='Adminsitrar ';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='proceso';
$this->breadcrumbs=array(
	'Proceso'=>array('index'),
	'Adminsitrar',
);

$this->menu=array(
	array('label'=>'Listar Proceso','url'=>array('index')),
	array('label'=>'Crear Proceso','url'=>array('create')),
);

$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'proceso-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array('name'=>'area_did',
		        'value'=>'$data->area->nombre',
			    'filter'=>CHtml::listData(Area::model()->findAll(), 'id', 'nombre'),),
		'tiempo',
		array('name'=>'estatus_did',
		        'value'=>'$data->estatus->nombre',
			    'filter'=>CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre'),),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
