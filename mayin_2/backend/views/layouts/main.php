<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;;
use common\widgets\Alert;
use backend\widgets\leftcolWidget;
use backend\widgets\topNavigationWidget;
use backend\widgets\footerWidget;
use backend\widgets\ModalBootstrapWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="nav-md">
<?php $this->beginBody() ?>
    <div class="container body">
        <div class="main_container">
            <!-- sideBar Left -->
            <?= leftcolWidget::widget(); ?>

            <!-- top navigation -->
            <?= topNavigationWidget::widget(); ?>        
            <!-- /top navigation -->
            <!-- page content -->
            <div class="right_col" role="main">

                <?= Breadcrumbs::widget([
                    'homeLink' => ['label' => 'Trang chủ','url' => Yii::$app->getHomeUrl()],
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <!-- top tiles -->

                <?= $content ?>
            </div>
            <!-- /page content -->
            <!-- footer content -->
            <?= footerWidget::widget(); ?>                
            <!-- /footer content -->
        </div>
    </div>
    <!-- Modal bootstrap -->
    <?= ModalBootstrapWidget::widget(); ?>                    

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
