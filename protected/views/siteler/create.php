<?php
/* @var $this SitelerController */
/* @var $model vtSiteler */

$this->breadcrumbs=array(
	'Vt Sitelers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List vtSiteler', 'url'=>array('index')),
	array('label'=>'Manage vtSiteler', 'url'=>array('admin')),
);
?>

<h1>Create vtSiteler</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>