<?php
/* @var $this TakipGrupController */
/* @var $model vtTakipGrup */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vt-takip-grup-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kullanici_id'); ?>
		<?php echo $form->textField($model,'kullanici_id'); ?>
		<?php echo $form->error($model,'kullanici_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'takipAdi'); ?>
		<?php echo $form->textField($model,'takipAdi',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'takipAdi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kayitTarih'); ?>
		<?php echo $form->textField($model,'kayitTarih'); ?>
		<?php echo $form->error($model,'kayitTarih'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'takipAciklama'); ?>
		<?php echo $form->textField($model,'takipAciklama',array('size'=>60,'maxlength'=>2048)); ?>
		<?php echo $form->error($model,'takipAciklama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ozel'); ?>
		<?php echo $form->textField($model,'ozel'); ?>
		<?php echo $form->error($model,'ozel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'xmUrl'); ?>
		<?php echo $form->textField($model,'xmUrl',array('size'=>60,'maxlength'=>674)); ?>
		<?php echo $form->error($model,'xmUrl'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->