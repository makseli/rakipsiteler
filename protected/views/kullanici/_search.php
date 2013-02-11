<?php
/* @var $this KullaniciController */
/* @var $model vtKullanici */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'takmaAd'); ?>
		<?php echo $form->textField($model,'takmaAd',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isim'); ?>
		<?php echo $form->textField($model,'isim',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soyisim'); ?>
		<?php echo $form->textField($model,'soyisim',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eposta'); ?>
		<?php echo $form->textField($model,'eposta',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sifre'); ?>
		<?php echo $form->textField($model,'sifre',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KayitTarihi'); ?>
		<?php echo $form->textField($model,'KayitTarihi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_login_ip'); ?>
		<?php echo $form->textField($model,'last_login_ip',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_login_date'); ?>
		<?php echo $form->textField($model,'last_login_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'xmUrl'); ?>
		<?php echo $form->textField($model,'xmUrl',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->