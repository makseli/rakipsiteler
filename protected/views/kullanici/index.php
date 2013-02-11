<?php
/* @var $this KullaniciController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vt Kullanicis',
);

$this->menu=array(
	array('label'=>'Create vtKullanici', 'url'=>array('create')),
	array('label'=>'Manage vtKullanici', 'url'=>array('admin')),
);
?>

<h1>Vt Kullanicis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
