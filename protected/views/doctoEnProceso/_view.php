	<tr>
		<td>
			<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->documento->nombre); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->proceso->nombre); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fecha_ft); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->estatus->nombre); ?>
		</td>
	</tr>