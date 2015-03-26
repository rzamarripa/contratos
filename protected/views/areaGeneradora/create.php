<?php
$this->pageCaption='Crear AreaGeneradora';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo areageneradora';
$this->breadcrumbs=array(
	'Area Generadora'=>array('index'),
	'Crear',
);
$this->menu=array(
	array('label'=>'Listar AreaGeneradora','url'=>array('index')),
	array('label'=>'Administrar AreaGeneradora','url'=>array('admin')),
);
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>