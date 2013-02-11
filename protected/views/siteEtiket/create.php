<?php
/* @var $this SiteEtiketController */
/* @var $model vtSiteEtiket */

$this->breadcrumbs=array(
	'Vt Site Etikets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List vtSiteEtiket', 'url'=>array('index')),
	array('label'=>'Manage vtSiteEtiket', 'url'=>array('admin')),
);
?>

<h1>Create vtSiteEtiket</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>