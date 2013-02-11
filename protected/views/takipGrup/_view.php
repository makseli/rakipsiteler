<?php
/* @var $this TakipGrupController */
/* @var $data vtTakipGrup */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kullanici_id')); ?>:</b>
	<?php echo CHtml::encode($data->kullanici_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('takipAdi')); ?>:</b>
	<?php echo CHtml::encode($data->takipAdi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kayitTarih')); ?>:</b>
	<?php echo CHtml::encode($data->kayitTarih); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('takipAciklama')); ?>:</b>
	<?php echo CHtml::encode($data->takipAciklama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ozel')); ?>:</b>
	<?php echo CHtml::encode($data->ozel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('xmUrl')); ?>:</b>
	<?php echo CHtml::encode($data->xmUrl); ?>
	<br />


</div>