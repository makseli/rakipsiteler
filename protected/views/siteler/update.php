<?php
/* @var $this SitelerController */
/* @var $model vtSiteler */

$this->breadcrumbs=array(
	'Vt Sitelers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List vtSiteler', 'url'=>array('index')),
	array('label'=>'Create vtSiteler', 'url'=>array('create')),
	array('label'=>'View vtSiteler', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage vtSiteler', 'url'=>array('admin')),
);
?>

<h1>Update vtSiteler <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>