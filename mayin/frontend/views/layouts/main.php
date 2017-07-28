<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\widgets\topMenuWidget;
use app\widgets\mainHeaderWidget;
use app\widgets\headerNavWidget;
use app\widgets\sidebarWidget;
use app\widgets\sectionHeroWidget;
use app\widgets\infoBoxesWidget;
use app\widgets\scrollTabsWidget;
use app\widgets\newProductsWidget;
use app\widgets\featuredProductWidget;
use app\widgets\wideBannersWidget;
use app\widgets\bestSellerWidget;
use app\widgets\blogSliderWidget;
use app\widgets\newArrivalsWidget;
use app\widgets\brandsCarouselWidget;
use app\widgets\footerWidget;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/favicon.ico">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="cnt-home">
<?php $this->beginBody() ?>
    
<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">
    <!-- ============================================== TOP MENU ============================================== -->
    <?= topMenuWidget::widget(); ?>    
    <!-- ============================================== TOP MENU : END ============================================== -->
    <?= mainHeaderWidget::widget(); ?>
    <!-- ============================================== NAVBAR ============================================== -->
    <?= headerNavWidget::widget(); ?>
    <!-- ============================================== NAVBAR : END ============================================== -->
</header>
<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <!-- ============================================== SIDEBAR ============================================== -->     
            <?= sidebarWidget::widget(); ?>
            <!-- ============================================== SIDEBAR : END ============================================== -->

            <!-- ============================================== CONTENT ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                <!-- ========================================== SECTION – HERO ========================================= -->
                <?= sectionHeroWidget::widget(); ?>
                <!-- ========================================= SECTION – HERO : END ========================================= --> 
                <!-- ============================================== INFO BOXES ============================================== -->
                <?= infoBoxesWidget::widget(); ?>
                <!-- ============================================== INFO BOXES : END ============================================== -->
                <!-- ============================================== SCROLL TABS ============================================== -->
                <?= scrollTabsWidget::widget(); ?>
                <!-- ============================================== SCROLL TABS : END ============================================== -->
                <!-- ============================================== WIDE PRODUCTS ============================================== -->
                <?= newProductsWidget::widget(); ?>
                <!-- ============================================== WIDE PRODUCTS : END ============================================== -->

                <!-- ============================================== FEATURED PRODUCTS ============================================== -->
                <?= featuredProductWidget::widget(); ?>                
                <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
                
                <!-- ============================================== WIDE PRODUCTS ============================================== -->
                <?= wideBannersWidget::widget(); ?>
                <!-- ============================================== WIDE PRODUCTS : END ============================================== -->

                <!-- ============================================== BEST SELLER ============================================== -->
                <?= bestSellerWidget::widget(); ?>
                <!-- ============================================== BEST SELLER : END ============================================== -->

                <!-- ============================================== BLOG SLIDER ============================================== -->
                <?= blogSliderWidget::widget(); ?>
                <!-- ============================================== BLOG SLIDER : END ============================================== -->

                <!-- ============================================== FEATURED PRODUCTS ============================================== -->
                <?= newArrivalsWidget::widget(); ?>
                <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->

            </div><!-- /.homebanner-holder -->
            <!-- ============================================== CONTENT : END ============================================== -->

        </div><!-- /.row -->

        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
        <?= brandsCarouselWidget::widget(); ?>
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->

    </div><!-- /.container -->
</div><!-- /#top-banner-and-menu -->

<!-- ============================================================= FOOTER ============================================================= -->
        <?= footerWidget::widget(); ?>
<!-- ============================================================= FOOTER : END============================================================= -->

<!-- For demo purposes – can be removed on production -->
<div class="config open">
        <div class="config-options">
            <h4>Pages</h4>
            <ul class="list-unstyled animate-dropdown">
                <li class="dropdown">
                    <button class="dropdown-toggle btn btn-primary btn-block" data-toggle="dropdown">View Pages</button>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation" class="dropdown-header">Home Pages</li>
                        <li><a href="home.html">Home</a></li>
                        <li><a href="home2.html">Home II</a></li>
                        <li><a href="home-furniture.html">Home Furniture</a></li>
                        <li><a href="homepage1.html">Home Page I</a></li>
                        <li><a href="homepage2.html">Home Page II</a></li>
                        <li class="divider"></li>
                        <li role="presentation" class="dropdown-header">Other Pages</li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                        <li><a href="category.html">Category</a></li>
                        <li><a href="category-2.html">Category II</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="detail.html">Detail</a></li>
                        <li><a href="detail2.html">Detail II</a></li>
                        <li><a href="shopping-cart.html">Shopping Cart Summary</a></li>                     
                        
                    </ul>
                </li>
            </ul>
            <h4>Header Styles</h4>
            <ul class="list-unstyled">
                <li><a href="home.html">Header 1</a></li>
                <li><a href="homepage1.html">Header 2</a></li>
                <li><a href="home-furniture.html">Header 3</a></li>
            </ul>
            <h4>Layouts</h4>
            <ul class="list-unstyled">
                <li><a href="homepage1.html">Full Width</a></li>
                <li><a href="homepage2.html">Boxed</a></li>
            </ul>
            <h4>Colors</h4>
            <ul>
                <li><a class="changecolor green-text" href="#" title="Green color">Green</a></li>
                <li><a class="changecolor blue-text" href="#" title="Blue color">Blue</a></li>
                <li><a class="changecolor red-text" href="#" title="Red color">Red</a></li>
                <li><a class="changecolor orange-text" href="#" title="Orange color">Orange</a></li>
                <li><a class="changecolor dark-green-text" href="#" title="Darkgreen color">Dark Green</a></li>
            </ul>
        </div>
        <a class="show-theme-options" href="#"><i class="fa fa-wrench"></i></a>
    </div>
    <!-- For demo purposes – can be removed on production : End -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
