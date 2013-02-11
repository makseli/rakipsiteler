<?php
/* @var $this SiteEtiketController */
/* @var $model vtSiteEtiket */

$this->breadcrumbs=array(
	'Vt Site Etikets'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List vtSiteEtiket', 'url'=>array('index')),
	array('label'=>'Create vtSiteEtiket', 'url'=>array('create')),
	array('label'=>'Update vtSiteEtiket', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete vtSiteEtiket', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage vtSiteEtiket', 'url'=>array('admin')),
);
?>

<h1>View vtSiteEtiket #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'kullanici_id',
		'adi',
		'kayit',
		'xmUrl',
	),
)); ?>
