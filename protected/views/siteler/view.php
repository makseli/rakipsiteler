<?php
/* @var $this SitelerController */
/* @var $model vtSiteler */

$this->breadcrumbs=array(
	'Vt Sitelers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List vtSiteler', 'url'=>array('index')),
	array('label'=>'Create vtSiteler', 'url'=>array('create')),
	array('label'=>'Update vtSiteler', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete vtSiteler', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage vtSiteler', 'url'=>array('admin')),
);
?>

<h1>View vtSiteler #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'adi',
		'url',
		'alanAdiKayitTarih',
		'alanAdiGuncellemeTarih',
		'alanAdiBitisTarih',
		'alexaGlobal',
		'alexaUlke',
		'alexaLink',
		'googleIndex',
		'googlePageRank',
		'dmozKaydi',
		'yahooIndex',
		'bingIndex',
		'xmUrl',
	),
)); ?>
