<?php
/* @var $this SiteBilgiController */
/* @var $model vtSite */

$this->breadcrumbs=array(
	'Vt Sites'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List vtSite', 'url'=>array('index')),
	array('label'=>'Manage vtSite', 'url'=>array('admin')),
);
?>

<h1>Create vtSite</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>