<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */

$this->title = $model->productName;
$this->params['breadcrumbs'][] = ['label' => 'Sản phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Sửa sản phẩm', ['update', 'id' => $model->proID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Xóa sản phẩm', ['delete', 'id' => $model->proID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'proID',
            'productName',
            'price',
            'saleOf',
            'startSale',
            'endSale',
            'priceSale',
            'quanlity',
            'size',
            'color',
            'evaluation',
            // 'image',
            [
             'attribute'=>'image',
            'format'=>'html',
             'value' => function ($data) {
                $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]/".$data['image'];
                return Html::img($url, ['alt'=>'myImage','width'=>'70','height'=>'50']);
             }
             ],
            'keyword',
            'description:ntext',
            'content:ntext',
            'group_ID',
            'cateID',
            'suppliresID',
            'userID',
            'status',
            // 'created_at',
                [
                    'attribute' => 'created_at',
                    'format' => ['date', 'php:d/m/Y']
                ], 
                [
                    'attribute' => 'updated_at',
                    'format' => ['date', 'php:d/m/Y']
                ],  
            // 'updated_at',
        ],
    ]) ?>

</div>
