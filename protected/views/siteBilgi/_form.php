<?php
/* @var $this SiteBilgiController */
/* @var $model vtSite */
/* @var $form CActiveForm */
?>

<div class="form">

<?php

if(!$_POST){
	
	?>
		
		<form action="?" method="post"> site url girin : <input id="site_url" value="http://" name="site_url"><input type="submit" value="kayda başla" /></form>
		
	<?php 
	
}else{
	
	
	//$xmt = new Yii::xmt();
	$model->adi = Yii::app()->xmt->UrlTitle($_POST['site_url']);
	$model->url = $_POST['site_url'];
	
	$form=$this->beginWidget('CActiveForm', array(
		'id'=>'vt-site-form',
		'enableAjaxValidation'=>false,
	)); ?>
	
		<p class="note">Fields with <span class="required">*</span> are required.</p>
	
		<?php echo $form->errorSummary($model); ?>
	
		<div class="row">
			<?php echo $form->labelEx($model,'adi'); ?>
			<?php echo $form->textField($model,'adi',array('size'=>60,'maxlength'=>128)); ?>
			<?php echo $form->error($model,'adi'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'url'); ?>
			<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>256)); ?>
			<?php echo $form->error($model,'url'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'alanAdiKayitTarih'); ?>
			<?php echo $form->textField($model,'alanAdiKayitTarih'); ?>
			<?php echo $form->error($model,'alanAdiKayitTarih'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'alanAdiGuncellemeTarih'); ?>
			<?php echo $form->textField($model,'alanAdiGuncellemeTarih'); ?>
			<?php echo $form->error($model,'alanAdiGuncellemeTarih'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'alanAdiBitisTarih'); ?>
			<?php echo $form->textField($model,'alanAdiBitisTarih'); ?>
			<?php echo $form->error($model,'alanAdiBitisTarih'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'alexaGlobal'); ?>
			<?php echo $form->textField($model,'alexaGlobal'); ?>
			<?php echo $form->error($model,'alexaGlobal'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'alexaUlke'); ?>
			<?php echo $form->textField($model,'alexaUlke'); ?>
			<?php echo $form->error($model,'alexaUlke'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'alexaLink'); ?>
			<?php echo $form->textField($model,'alexaLink'); ?>
			<?php echo $form->error($model,'alexaLink'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'googleIndex'); ?>
			<?php echo $form->textField($model,'googleIndex'); ?>
			<?php echo $form->error($model,'googleIndex'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'googlePageRank'); ?>
			<?php echo $form->textField($model,'googlePageRank'); ?>
			<?php echo $form->error($model,'googlePageRank'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'dmozKaydi'); ?>
			<?php echo $form->textField($model,'dmozKaydi'); ?>
			<?php echo $form->error($model,'dmozKaydi'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'yahooIndex'); ?>
			<?php echo $form->textField($model,'yahooIndex'); ?>
			<?php echo $form->error($model,'yahooIndex'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'bingIndex'); ?>
			<?php echo $form->textField($model,'bingIndex'); ?>
			<?php echo $form->error($model,'bingIndex'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'xmUrl'); ?>
			<?php echo $form->textField($model,'xmUrl',array('size'=>60,'maxlength'=>128)); ?>
			<?php echo $form->error($model,'xmUrl'); ?>
		</div>
	
		<div class="row buttons">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		</div>
	
	<?php 
	
	$this->endWidget(); 

}

?>

</div><!-- form -->