<?php
/* @var $this KullaniciController */
/* @var $model vtKullanici */

$this->breadcrumbs=array(
	'Vt Kullanicis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List vtKullanici', 'url'=>array('index')),
	array('label'=>'Create vtKullanici', 'url'=>array('create')),
	array('label'=>'View vtKullanici', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage vtKullanici', 'url'=>array('admin')),
);
?>

<h1>Update vtKullanici <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>