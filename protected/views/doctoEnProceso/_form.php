
	<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
		'id'=>'docto-en-proceso-form',
		'type'=>'horizontal',
		'enableAjaxValidation'=>false,
	)); ?>

	<div class="alert alert-info">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<h4>Instrucciones</h4>	
		Los campos con <span class="required">*</span> son requeridos.
	</div>	
	<?php echo $form->errorSummary($model); ?>
		<div class="form-group">
		<?php echo $form->labelEx($model,'documento_did',array('class'=>'control-label col-lg-2')); ?>
		<div class="col-lg-3">
			<?php echo $form->dropDownList($model,'documento_did',CHtml::listData(documento::model()->findAll(), "id", "nombre"),array("class"=>"form-control")); ?>			<?php echo $form->error($model,'documento_did'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'fecha_ft',array('class'=>'control-label col-lg-2')); ?>
		<div class="col-lg-3">
			<?php
										Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
										if ($model->fecha_ft!='') 
											$model->fecha_ft=date('d-m-Y',strtotime($model->fecha_ft));
										$this->widget('CJuiDateTimePicker',array(
											'model'=>$model,
							                'attribute'=>'fecha_ft',
							                'mode'=>'datetime',
							                'language' => 'es',
							                'options'=>array('dateFormat'=>'yy/mm/dd'),
							               
								            ));?>			<?php echo $form->error($model,'fecha_ft'); ?>
		</div>
	</div>
	<div class="form-group">
		<?php echo $form->labelEx($model,'estatus_did',array('class'=>'control-label col-lg-2')); ?>
		<div class="col-lg-3">
			<?php echo $form->dropDownList($model,'estatus_did',CHtml::listData(estatus::model()->findAll(), "id", "nombre"),array("class"=>"form-control")); ?>			<?php echo $form->error($model,'estatus_did'); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-offset-2 col-lg-10">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>
