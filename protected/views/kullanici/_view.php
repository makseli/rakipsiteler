<?php
/* @var $this KullaniciController */
/* @var $data vtKullanici */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('takmaAd')); ?>:</b>
	<?php echo CHtml::encode($data->takmaAd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isim')); ?>:</b>
	<?php echo CHtml::encode($data->isim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('soyisim')); ?>:</b>
	<?php echo CHtml::encode($data->soyisim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eposta')); ?>:</b>
	<?php echo CHtml::encode($data->eposta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sifre')); ?>:</b>
	<?php echo CHtml::encode($data->sifre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KayitTarihi')); ?>:</b>
	<?php echo CHtml::encode($data->KayitTarihi); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('last_login_ip')); ?>:</b>
	<?php echo CHtml::encode($data->last_login_ip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_login_date')); ?>:</b>
	<?php echo CHtml::encode($data->last_login_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('xmUrl')); ?>:</b>
	<?php echo CHtml::encode($data->xmUrl); ?>
	<br />

	*/ ?>

</div>