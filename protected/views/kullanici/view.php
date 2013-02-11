<?php
/* @var $this KullaniciController */
/* @var $model vtKullanici */

$this->breadcrumbs=array(
	'Vt Kullanicis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List vtKullanici', 'url'=>array('index')),
	array('label'=>'Create vtKullanici', 'url'=>array('create')),
	array('label'=>'Update vtKullanici', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete vtKullanici', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage vtKullanici', 'url'=>array('admin')),
);
?>

<h1>View vtKullanici #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'takmaAd',
		'isim',
		'soyisim',
		'eposta',
		'sifre',
		'KayitTarihi',
		'last_login_ip',
		'last_login_date',
		'xmUrl',
	),
)); ?>
