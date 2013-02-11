<?php
/* @var $this SiteBilgiController */
/* @var $data vtSite */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adi')); ?>:</b>
	<?php echo CHtml::encode($data->adi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alanAdiKayitTarih')); ?>:</b>
	<?php echo CHtml::encode($data->alanAdiKayitTarih); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alanAdiGuncellemeTarih')); ?>:</b>
	<?php echo CHtml::encode($data->alanAdiGuncellemeTarih); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alanAdiBitisTarih')); ?>:</b>
	<?php echo CHtml::encode($data->alanAdiBitisTarih); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alexaGlobal')); ?>:</b>
	<?php echo CHtml::encode($data->alexaGlobal); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('alexaUlke')); ?>:</b>
	<?php echo CHtml::encode($data->alexaUlke); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alexaLink')); ?>:</b>
	<?php echo CHtml::encode($data->alexaLink); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('googleIndex')); ?>:</b>
	<?php echo CHtml::encode($data->googleIndex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('googlePageRank')); ?>:</b>
	<?php echo CHtml::encode($data->googlePageRank); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dmozKaydi')); ?>:</b>
	<?php echo CHtml::encode($data->dmozKaydi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('yahooIndex')); ?>:</b>
	<?php echo CHtml::encode($data->yahooIndex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bingIndex')); ?>:</b>
	<?php echo CHtml::encode($data->bingIndex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('xmUrl')); ?>:</b>
	<?php echo CHtml::encode($data->xmUrl); ?>
	<br />

	*/ ?>

</div>