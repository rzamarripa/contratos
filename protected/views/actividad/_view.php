	<tr>
		<td>
			<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->mensaje); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->usuario); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaCreacion_f); ?>
		</td>
	</tr>