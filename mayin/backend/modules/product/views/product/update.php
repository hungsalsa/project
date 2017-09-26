<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */

$this->title = 'Cập nhật sản phẩm: ' . $model->productName;
$this->params['breadcrumbs'][] = ['label' => 'Sản phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->productName, 'url' => ['view', 'id' => $model->proID]];
$this->params['breadcrumbs'][] = 'Chỉnh sửa';
?>
<div class="product-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'model' => $model,
	    'allGroup' => $allGroup,
	    'datacat' => $datacat,
	    'allSuppliers' => $allSuppliers,
    ]) ?>

</div>
