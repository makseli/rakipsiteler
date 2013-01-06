<?php
/* @var $this SitelerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vt Sitelers',
);

$this->menu=array(
	array('label'=>'Create vtSiteler', 'url'=>array('create')),
	array('label'=>'Manage vtSiteler', 'url'=>array('admin')),
);
?>

<h1>Vt Sitelers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
