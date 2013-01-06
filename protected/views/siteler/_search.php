<?php
/* @var $this SitelerController */
/* @var $model vtSiteler */
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
		<?php echo $form->label($model,'adi'); ?>
		<?php echo $form->textField($model,'adi',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alanAdiKayitTarih'); ?>
		<?php echo $form->textField($model,'alanAdiKayitTarih'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alanAdiGuncellemeTarih'); ?>
		<?php echo $form->textField($model,'alanAdiGuncellemeTarih'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alanAdiBitisTarih'); ?>
		<?php echo $form->textField($model,'alanAdiBitisTarih'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alexaGlobal'); ?>
		<?php echo $form->textField($model,'alexaGlobal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alexaUlke'); ?>
		<?php echo $form->textField($model,'alexaUlke'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alexaLink'); ?>
		<?php echo $form->textField($model,'alexaLink'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'googleIndex'); ?>
		<?php echo $form->textField($model,'googleIndex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'googlePageRank'); ?>
		<?php echo $form->textField($model,'googlePageRank'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dmozKaydi'); ?>
		<?php echo $form->textField($model,'dmozKaydi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'yahooIndex'); ?>
		<?php echo $form->textField($model,'yahooIndex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bingIndex'); ?>
		<?php echo $form->textField($model,'bingIndex'); ?>
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