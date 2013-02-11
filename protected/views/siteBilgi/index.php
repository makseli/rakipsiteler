<?php
/* @var $this SiteBilgiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vt Sites',
);

$this->menu=array(
	array('label'=>'Create vtSite', 'url'=>array('create')),
	array('label'=>'Manage vtSite', 'url'=>array('admin')),
);
?>

<h1>Vt Sites</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
