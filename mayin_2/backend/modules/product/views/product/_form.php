<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\product\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'productName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'group_ID')->dropDownlist($allGroup,['prompt'=>'-- Chọn nhóm danh mục --']) ?>

    <?= $form->field($model, 'cateID')->dropDownlist($datacat,['prompt'=>'-- Chọn danh mục sản phẩm --']) ?>

    <?= $form->field($model, 'suppliresID')->dropDownlist($allSuppliers,['prompt'=>'-- Chọn nhà cung cấp --']) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true,'id'=>'imageFile','placeholder'=>' Click chọn ảnh']) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'saleOf')->textInput() ?>

    <?= $form->field($model, 'startSale')->textInput() ?>

    <?= $form->field($model, 'endSale')->textInput() ?>

    <?= $form->field($model, 'priceSale')->textInput() ?>

    <?= $form->field($model, 'quanlity')->textInput() ?>

    <?= $form->field($model, 'size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'evaluation')->textInput() ?>

    <?= $form->field($model, 'keyword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 8]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 10]) ?>

    <?= $form->field($model, 'group_ID')->dropDownlist(['1'=>'Hiện','0'=>'Ẩn']) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
