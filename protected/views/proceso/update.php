<?php
$this->pageCaption='Actualizar Proceso '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Proceso'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Proceso','url'=>array('index')),
	array('label'=>'Crear Proceso','url'=>array('create')),
	array('label'=>'Ver Proceso','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administrar Proceso','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>