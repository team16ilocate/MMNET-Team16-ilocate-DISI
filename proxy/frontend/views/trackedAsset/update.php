<?php
$this->breadcrumbs=array(
	'Tracked Assets'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=> 'Options', 'itemOptions'=>array('class'=>'nav-header')),
	'---',
	array('label'=>'Back to list','url'=>array('index')),
);
?>

<h1>Update TrackedAsset <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>