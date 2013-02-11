<?php
/* @var $this SiteBilgiController */
/* @var $model vtSite */

$this->breadcrumbs=array(
	'Vt Sites'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List vtSite', 'url'=>array('index')),
	array('label'=>'Create vtSite', 'url'=>array('create')),
	array('label'=>'Update vtSite', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete vtSite', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage vtSite', 'url'=>array('admin')),
);
?>

<h1>View vtSite #<?php echo $model->id; ?></h1>

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
