<?php
/* @var $this TakipGrupController */
/* @var $model vtTakipGrup */

$this->breadcrumbs=array(
	'Vt Takip Grups'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List vtTakipGrup', 'url'=>array('index')),
	array('label'=>'Create vtTakipGrup', 'url'=>array('create')),
	array('label'=>'Update vtTakipGrup', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete vtTakipGrup', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage vtTakipGrup', 'url'=>array('admin')),
);
?>

<h1>View vtTakipGrup #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'kullanici_id',
		'takipAdi',
		'kayitTarih',
		'takipAciklama',
		'ozel',
		'xmUrl',
	),
)); ?>
