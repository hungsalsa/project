<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */
/* @var $form yii\widgets\ActiveForm */
$myUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] && !in_array(strtolower($_SERVER['HTTPS']),array('off','no'))) ? 'https' : 'http';
        // Get domain portion
        $myUrl .= '://'.$_SERVER['HTTP_HOST'];
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'productName')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'group_ID',['options' =>  ['class' => 'col-md-6']])->dropdownlist($allGroup,['prompt'=>'- Chọn nhóm danh mục -']) ?>

    <?= $form->field($model, 'cateID',['options' =>  ['class' => 'col-md-6']])->dropdownlist($datacat,['prompt'=>'- Chon nhom danh muc -','id'=>'product_category_id']) ?>

    <?= $form->field($model, 'suppliresID',['options' =>  ['class' => 'col-md-6']])->dropdownlist($allSuppliers,['prompt'=>'- Chon nha cung cap -']) ?>
    
    <?= $form->field($model, 'quanlity',['options' =>  ['class' => 'col-md-6']])->textInput() ?>
    
    
    <?= $form->field($model, 'image',['options' =>  ['class' => 'col-md-6']])->textInput(['maxlength' => true,'id'=>'imageFile','placeholder'=>'Click chọn ảnh']) ?>
    <div class="imgpre col-md-6">
        <img id="previewImage" width="100px" class="" src="<?= isset($model->image)?$myUrl.'/'.$model->image:''; ?>">
    </div>
    
    <div class="clearfix"></div>


    <?= $form->field($model, 'price',['options' =>  ['class' => 'col-md-6']])->textInput() ?>

    <?= $form->field($model, 'saleOf',['options' =>  ['class' => 'col-md-6']])->textInput() ?>

    <?= $form->field($model, 'priceSale',['options' =>  ['class' => 'col-md-6']])->textInput() ?>

    <?= $form->field($model, 'startSale',['options' =>  ['class' => 'col-md-6']])->textInput() ?>

    <?= $form->field($model, 'endSale',['options' =>  ['class' => 'col-md-6']])->textInput() ?>


    <?= $form->field($model, 'size',['options' =>  ['class' => 'col-md-6']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'color',['options' =>  ['class' => 'col-md-6']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'evaluation',['options' =>  ['class' => 'col-md-6']])->textInput() ?>

    <?= $form->field($model, 'keyword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->dropdownlist(array('1'=>'Trạng thái hiện','0'=>'Trạng thái ẩn')) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Thêm mới' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
