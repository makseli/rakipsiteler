<?php
/* @var $this SiteEtiketController */
/* @var $data vtSiteEtiket */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kullanici_id')); ?>:</b>
	<?php echo CHtml::encode($data->kullanici_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adi')); ?>:</b>
	<?php echo CHtml::encode($data->adi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kayit')); ?>:</b>
	<?php echo CHtml::encode($data->kayit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('xmUrl')); ?>:</b>
	<?php echo CHtml::encode($data->xmUrl); ?>
	<br />


</div>