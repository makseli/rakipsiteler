<?php
/* @var $this SiteEtiketController */
/* @var $model vtSiteEtiket */

$this->breadcrumbs=array(
	'Vt Site Etikets'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List vtSiteEtiket', 'url'=>array('index')),
	array('label'=>'Create vtSiteEtiket', 'url'=>array('create')),
	array('label'=>'View vtSiteEtiket', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage vtSiteEtiket', 'url'=>array('admin')),
);
?>

<h1>Update vtSiteEtiket <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>