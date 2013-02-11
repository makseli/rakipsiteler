<?php
/* @var $this SiteEtiketController */
/* @var $model vtSiteEtiket */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vt-site-etiket-form',
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
		<?php echo $form->labelEx($model,'adi'); ?>
		<?php echo $form->textField($model,'adi',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'adi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kayit'); ?>
		<?php echo $form->textField($model,'kayit'); ?>
		<?php echo $form->error($model,'kayit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'xmUrl'); ?>
		<?php echo $form->textField($model,'xmUrl',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'xmUrl'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->