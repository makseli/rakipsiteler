<?php
/* @var $this KullaniciController */
/* @var $model vtKullanici */

$this->breadcrumbs=array(
	'Vt Kullanicis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List vtKullanici', 'url'=>array('index')),
	array('label'=>'Manage vtKullanici', 'url'=>array('admin')),
);
?>

<h1>Create vtKullanici</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>