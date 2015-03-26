<?php
$this->pageCaption='Actualizar AreaGeneradora '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Area Generadora'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar AreaGeneradora','url'=>array('index')),
	array('label'=>'Crear AreaGeneradora','url'=>array('create')),
	array('label'=>'Ver AreaGeneradora','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administrar AreaGeneradora','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>