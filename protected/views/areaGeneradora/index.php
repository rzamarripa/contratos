<?php
$this->pageCaption='Area Generadora';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar area generadora';
$this->breadcrumbs=array(
	'Area Generadora',
);

$this->menu=array(
	array('label'=>'Crear AreaGeneradora','url'=>array('create')),
	array('label'=>'Administrar AreaGeneradora','url'=>array('admin')),
);
?>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
