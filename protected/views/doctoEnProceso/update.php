<?php
$this->pageCaption='Actualizar DoctoEnProceso '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Docto En Proceso'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar DoctoEnProceso','url'=>array('index')),
	array('label'=>'Crear DoctoEnProceso','url'=>array('create')),
	array('label'=>'Ver DoctoEnProceso','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administrar DoctoEnProceso','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>