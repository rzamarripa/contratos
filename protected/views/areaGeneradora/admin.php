<?php
$this->pageCaption='Adminsitrar ';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='area generadora';
$this->breadcrumbs=array(
	'Area Generadora'=>array('index'),
	'Adminsitrar',
);

$this->menu=array(
	array('label'=>'Listar AreaGeneradora','url'=>array('index')),
	array('label'=>'Crear AreaGeneradora','url'=>array('create')),
);

$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'area-generadora-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombre',
		'responsable',
		array('name'=>'estatus_did',
		        'value'=>'$data->estatus->nombre',
			    'filter'=>CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre'),),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
