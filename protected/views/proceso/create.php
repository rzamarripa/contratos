<?php
$this->pageCaption='Crear Proceso';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo proceso';
$this->breadcrumbs=array(
	'Proceso'=>array('index'),
	'Crear',
);
$this->menu=array(
	array('label'=>'Listar Proceso','url'=>array('index')),
	array('label'=>'Administrar Proceso','url'=>array('admin')),
);
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>