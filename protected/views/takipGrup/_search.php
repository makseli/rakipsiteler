<?php
/* @var $this TakipGrupController */
/* @var $model vtTakipGrup */
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
		<?php echo $form->label($model,'kullanici_id'); ?>
		<?php echo $form->textField($model,'kullanici_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'takipAdi'); ?>
		<?php echo $form->textField($model,'takipAdi',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kayitTarih'); ?>
		<?php echo $form->textField($model,'kayitTarih'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'takipAciklama'); ?>
		<?php echo $form->textField($model,'takipAciklama',array('size'=>60,'maxlength'=>2048)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ozel'); ?>
		<?php echo $form->textField($model,'ozel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'xmUrl'); ?>
		<?php echo $form->textField($model,'xmUrl',array('size'=>60,'maxlength'=>674)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->