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
		<?php echo $form->label($model,'fecha_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fecha_f!='') 
						$fecha_f=date('d-m-Y',strtotime($fecha_f));
					else
						$fecha_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fecha_f',
					                                       'value'=>$fecha_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fecha_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'proveedor'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'proveedor',array('size'=>30,'maxlength'=>30,'class'=>'form-control')); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'areaGeneradora_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,"areaGeneradora_did",CHtml::listData(AreaGeneradora::model()->findAll(), 'id', 'nombre')); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'estatus_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,"estatus_did",CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre')); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'tiempoValidez'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'tiempoValidez'); ?>
		</div>
	</div>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
