<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\product\models\Category */
/* @var $form yii\widgets\ActiveForm */
$myUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] && !in_array(strtolower($_SERVER['HTTPS']),array('off','no'))) ? 'https' : 'http';
        // Get domain portion
        $myUrl .= '://'.$_SERVER['HTTP_HOST'];
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cateName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'group_ID',['options' =>  ['class' => 'col-md-6']])->dropDownlist($allGroup,['prompt'=>'-- Chọn nhóm danh mục --']) ?>

    <?= $form->field($model, 'parent_id',['options' =>  ['class' => 'col-md-6']])->dropDownlist($datacat,['prompt'=>'-- Chọn nhóm danh mục --']) ?>

    <?= $form->field($model, 'icon',['options' =>  ['class' => 'col-md-6']])->textInput(['maxlength' => true,'id'=>'imageFile','placeholder'=>'Click chọn ảnh']) ?>
    <div class="imgpre col-md-6">
        <img id="previewImage" width="100px" class="" src="<?= isset($model->icon)?$myUrl.'/'.$model->icon:''; ?>">
    </div>
    
    <div class="clearfix"></div>



    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>


    <?= $form->field($model, 'status')->dropDownlist(array('1'=>'Trạng thái hiện','0'=>'Trạng thái ẩn')) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
