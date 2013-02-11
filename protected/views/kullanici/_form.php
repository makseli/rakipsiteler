<?php
/* @var $this KullaniciController */
/* @var $model vtKullanici */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vt-kullanici-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'takmaAd'); ?>
		<?php echo $form->textField($model,'takmaAd',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'takmaAd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isim'); ?>
		<?php echo $form->textField($model,'isim',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'isim'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'soyisim'); ?>
		<?php echo $form->textField($model,'soyisim',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'soyisim'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'eposta'); ?>
		<?php echo $form->textField($model,'eposta',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'eposta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sifre'); ?>
		<?php echo $form->textField($model,'sifre',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'sifre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'xmUrl'); ?>
		<?php echo $form->textField($model,'xmUrl',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'xmUrl'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->