
	<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
		'id'=>'documento-form',
		'type'=>'horizontal',
		'enableAjaxValidation'=>false,
	)); ?>

	<div class="alert alert-info">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<h4>Instrucciones</h4>	
		Los campos con <span class="required">*</span> son requeridos.
	</div>	
	<?php echo $form->errorSummary($model); ?>
		<?php /*<div class="form-group">
		<?php echo $form->labelEx($model,'fecha_f',array('class'=>'control-label col-lg-2')); ?>
		<div class="col-lg-3">
			
							<?php
							if ($model->fecha_f!='') 
								$model->fecha_f=date('d-m-Y',strtotime($model->fecha_f));
							$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                   'model'=>$model,
                   'attribute'=>'fecha_f',
                   'value'=>$model->fecha_f,
                   'language' => 'es',
                   'htmlOptions' => array('readonly'=>""),
                  'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'dd-mm-yy', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
								),)); ?>			<?php echo $form->error($model,'fecha_f'); ?>
		</div>
	</div> */?>
	<div class="form-group">
		<?php echo $form->labelEx($model,'proveedor',array('class'=>'control-label col-lg-2')); ?>
		<div class="col-lg-3">
			<?php echo $form->textField($model,'proveedor',array('size'=>30,'maxlength'=>30,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'proveedor'); ?>
		</div>
	</div>
	<div class="form-group">
		<?php echo $form->labelEx($model,'areaGeneradora_did',array('class'=>'control-label col-lg-2')); ?>
		<div class="col-lg-3">
			<?php echo $form->dropDownList($model,'areaGeneradora_did',CHtml::listData(areageneradora::model()->findAll(), "id", "nombre"),array("class"=>"form-control")); ?>			<?php echo $form->error($model,'areaGeneradora_did'); ?>
		</div>
	</div>
	<?php /*
	<div class="form-group">
		<?php echo $form->labelEx($model,'estatus_did',array('class'=>'control-label col-lg-2')); ?>
		<div class="col-lg-3">
			<?php echo $form->dropDownList($model,'estatus_did',CHtml::listData(estatus::model()->findAll(), "id", "nombre"),array("class"=>"form-control")); ?>			<?php echo $form->error($model,'estatus_did'); ?>
		</div>
	</div>
	*/?>
	<div class="form-group">
		<?php echo $form->labelEx($model,'tiempoValidez',array('class'=>'control-label col-lg-2')); ?>
		<div class="col-lg-3">
			<?php
										Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
										if ($model->tiempoValidez!='') 
											$model->tiempoValidez=date('d-m-Y',strtotime($model->tiempoValidez));
										$this->widget('CJuiDateTimePicker',array(
											'model'=>$model,
							                'attribute'=>'tiempoValidez',
							                'mode'=>'datetime',
							                'language' => 'es',
							                'options'=>array('dateFormat'=>'yy/mm/dd'),
							               
								            ));?>			<?php echo $form->error($model,'tiempoValidez'); ?>
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
