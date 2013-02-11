<?php
/* @var $this SiteEtiketController */
/* @var $model vtSiteEtiket */
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
		<?php echo $form->label($model,'adi'); ?>
		<?php echo $form->textField($model,'adi',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kayit'); ?>
		<?php echo $form->textField($model,'kayit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'xmUrl'); ?>
		<?php echo $form->textField($model,'xmUrl',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->