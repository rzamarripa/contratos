<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>


	<div class="clearfix">
		<?php echo $form->label($model,'id'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'id',array('size'=>11,'maxlength'=>11,'class'=>'form-control')); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'documento_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,"documento_did",CHtml::listData(Documento::model()->findAll(), 'id', 'nombre')); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'proceso_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,"proceso_did",CHtml::listData(Proceso::model()->findAll(), 'id', 'nombre')); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fecha_ft'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'fecha_ft'); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'estatus_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,"estatus_did",CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre')); ?>		</div>
	</div>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
