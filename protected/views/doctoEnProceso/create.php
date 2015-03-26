<?php
$this->pageCaption='Crear DoctoEnProceso';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo doctoenproceso';
$this->breadcrumbs=array(
	'Docto En Proceso'=>array('index'),
	'Crear',
);
$this->menu=array(
	array('label'=>'Listar DoctoEnProceso','url'=>array('index')),
	array('label'=>'Administrar DoctoEnProceso','url'=>array('admin')),
);
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>