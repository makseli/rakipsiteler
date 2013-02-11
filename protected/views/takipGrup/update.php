<?php
/* @var $this TakipGrupController */
/* @var $model vtTakipGrup */

$this->breadcrumbs=array(
	'Vt Takip Grups'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List vtTakipGrup', 'url'=>array('index')),
	array('label'=>'Create vtTakipGrup', 'url'=>array('create')),
	array('label'=>'View vtTakipGrup', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage vtTakipGrup', 'url'=>array('admin')),
);
?>

<h1>Update vtTakipGrup <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>