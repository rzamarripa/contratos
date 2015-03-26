<?php
$this->pageCaption='Proceso';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar proceso';
$this->breadcrumbs=array(
	'Proceso',
);

$this->menu=array(
	array('label'=>'Crear Proceso','url'=>array('create')),
	array('label'=>'Administrar Proceso','url'=>array('admin')),
);
?>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
