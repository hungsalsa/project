<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
// use backend\modules\product\models\Group;;
/* @var $this yii\web\View */
/* @var $model backend\modules\product\models\Category */

$this->title = $model->cateName;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idCate], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idCate], [
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
            'idCate',
            'icon',
            'cateName',
            'parent_id',
            'keywords',
            'description:ntext',
            [
                'attribute' => 'group_ID',
                'format' => 'raw',
                'value' => $group[$model->group_ID],
            ],
            'status',
            [
                'attribute' => 'created_at',
                'format' => ['date', 'php:d/m/Y']
            ],
            [
                'attribute' => 'updated_at',
                'format' => ['date', 'php:d/m/Y']
            ],
        ],
    ]) ?>
</div>
