<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sản phẩm';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Thêm sản phẩm mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'proID',
            [
              'attribute' => 'proID',
               'headerOptions' => ['style' => 'width:5%'],
            ],
            // 'productName',
            [
              'attribute' => 'productName',
               'headerOptions' => ['style' => 'width:15%'],
            ],
            'price',
            'saleOf',
            'startSale',
            // 'endSale',
            // 'priceSale',
            // 'quanlity',
            [
              'attribute' => 'quanlity',
               'headerOptions' => ['style' => 'width:10%'],
            ],
            // 'size',
            // 'color',
            // 'evaluation',
            // 'image',
            [
             'attribute'=>'image',
             'headerOptions' => ['style' => 'width:15%'],
            'format'=>'html',
             'value' => function ($data) {
                $url =(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]/".$data['image'];
                return Html::img($url, ['alt'=>'myImage','width'=>'70','height'=>'50']);
             }
             ],
            // 'keyword',
            // 'description:ntext',
            // 'content:ntext',
            // 'group_ID',
            // 'cateID',
            // 'suppliresID',
            // 'userID',
            // 'status',
            // 'created_at',
            // 'updated_at',

            // ['class' => 'yii\grid\ActionColumn','contentOptions' => ['style' => 'width:10%;'],
            //     'header'=>'Actions',],

            [
              'class' => 'yii\grid\ActionColumn',
              'header' => 'Actions',
              'headerOptions' => ['style' => 'width:8%;color:#337ab7'],
              'template' => '{view}{update}{delete}',
              'buttons' => [
                'view' => function ($url, $model) {
                    return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                                'title' => Yii::t('app', 'Chi tiết sản phẩm'),
                                'contentOptions' => ['style' => 'padding-right:5px;'],
                    ]);
                },

                'update' => function ($url, $model) {
                    return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                                'title' => Yii::t('app', 'Sửa sản phẩm'),
                    ]);
                },
                'delete' => function ($url, $model) {
                    return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                                'title' => Yii::t('app', 'Xóa sản phẩm'),
                    ]);
                }

              ],
         
            ],
        ],
    ]); ?>
</div>
