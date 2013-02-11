<?php
/* @var $this SiteBilgiController */
/* @var $model vtSite */

$this->breadcrumbs=array(
	'Vt Sites'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List vtSite', 'url'=>array('index')),
	array('label'=>'Create vtSite', 'url'=>array('create')),
	array('label'=>'View vtSite', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage vtSite', 'url'=>array('admin')),
);
?>

<h1>Update vtSite <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>