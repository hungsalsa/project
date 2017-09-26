<?php use app\modules\product\models\Category; ?>
<div class="header-nav animate-dropdown">
<div class="container">
   <div class="yamm navbar navbar-default" role="navigation">
      <div class="navbar-header">
         <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"/>
         <span class="icon-bar"/>
         <span class="icon-bar"/>
         </button>
      </div>
      <div class="nav-bg-class">
         <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
               <ul class="nav navbar-nav">
                  <li class="active dropdown yamm-fw">
                     <a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Trang chủ</a>
                     <ul class="dropdown-menu">
                        <li>
                           <div class="yamm-content">
                              <div class="row">
                                 <div class="col-md-8 col-sm-8">
                                    <div class="row">
                                       <div class='col-md-12'>

                                        <?php foreach ($dataCat as $key => $value): ?>
                                           
                                        
                                          <div class="col-xs-12 col-sm-6 col-md-3">
                                             <h2 class="title"><?=  $value['cateName']; ?></h2>
                                             <ul class="links">
                                             <?php 
                                             $catsub1 = new Category;
                                             $dataCatsub1 = $catsub1->getCategoryByParent($value['idCate']);
                                              ?>
                                              <?php foreach ($dataCatsub1 as $key1 => $value1): ?>
                                                 
                                              
                                                <li>
                                                   <a href="#"><?=  $value1['cateName']; ?></a>
                                                </li>
                                                
                                             <?php endforeach ?>
                                             </ul>
                                          </div>
                                          <!-- /.col -->
                                       <?php endforeach ?>
                                          
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                 </div>
                              </div>
                              <!-- /.row -->
                              <!-- ============================================== WIDE PRODUCTS ============================================== -->
                              <div class="wide-banners megamenu-banner">
                                 <div class="row">
                                    <div class="col-sm-12 col-md-8">
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="col-sm-6 col-md-6">
                                                <div class="wide-banner cnt-strip">
                                                   <div class="image">
                                                      <img class="img-responsive" data-echo="images/banners/4.jpg" src="images/blank.gif" alt="">
                                                   </div>
                                                   <!-- <div class="strip">
                                                      <div class="strip-inner text-right">
                                                         <h3 class="white">new trend</h3>
                                                         <h2 class="white">apple product</h2>
                                                      </div>
                                                   </div> -->
                                                </div>
                                                <!-- /.wide-banner -->
                                             </div>
                                             <!-- /.col -->
                                             <div class="col-sm-6 col-md-6">
                                                <div class="wide-banner cnt-strip">
                                                   <div class="image">
                                                      <img class="img-responsive" data-echo="images/banners/5.jpg" src="images/blank.gif" alt="">
                                                   </div>
                                                   <div class="strip">
                                                      <div class="strip-inner text-left">
                                                         <h3 class="white">camera collection</h3>
                                                         <h2 class="white">new arrivals</h2>
                                                      </div>
                                                   </div>
                                                </div>
                                                <!-- /.wide-banner -->
                                             </div>
                                             <!-- /.col -->
                                          </div>
                                       </div>
                                       <!-- /.row -->
                                    </div>
                                    <div class="col-sm-12 col-md-4 hidden-xs hidden-sm">
                                       <p class="text ">LenovoProin gravida nibh vel velit auctor aliquet es  Aenean sollicitudin,lorem quis bibendu auctor,nisi elit consequat ipsum auctor.</p>
                                    </div>
                                 </div>
                              </div>
                              <!-- /.wide-banners -->
                              <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
                           </div>
                           <!-- /.yamm-content -->
                        </li>
                     </ul>
                  </li>
                  <li class="dropdown yamm">

                     <a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Máy in<span class="menu-label hot-menu hidden-xs">hot</span></a>
                     <ul class="dropdown-menu printer">
                        <li>
                           <div class="yamm-content">
                              <div class="row">
                                 <div class='col-sm-12 col-md-12'>
                                 <?php 
                                    $printer = new Category;
                                    $dataprinter = $printer->getCategoryByParent(1);
                                  ?>
                                 <?php foreach ($dataprinter as $key => $value): ?>
                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                       <h2 class="title"><?= $value['cateName'] ?></h2>
                                       <ul class="links">
                                       <?php 
                                          $dataprinter1 = new Category;
                                          $dataprinter1 = $dataprinter1->getCategoryByParent($value['idCate']);
                                        ?>
                                        <?php foreach ($dataprinter1 as $key10 => $value10): ?>
                                          <li>
                                             <a href="#"><?= $value10['cateName'] ?></a>
                                          </li>
                                       <?php endforeach ?>
                                       </ul>
                                    </div>
                                    <!-- /.col -->
                                 <?php endforeach ?>

                                 </div>
                              </div>
                              <!-- /.row -->
                           </div>
                           <!-- /.yamm-content -->
                        </li>
                     </ul>
                  </li>
                  <li class="dropdown yamm">
                     <a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Máy tính</a>
                     <ul class="dropdown-menu computer">
                        <li>
                           <div class="yamm-content">
                              <div class="row">
                                 <div class='col-sm-12'>
                                 <?php 
                                    $computer = new Category;
                                    $datacomputer = $computer->getCategoryByParent(2);
                                  ?>
                                 <?php foreach ($datacomputer as $key => $value): ?>
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                       <h2 class="title"><?= $value['cateName'] ?></h2>
                                       <ul class="links">
                                       <?php 
                                          $computersub1 = new Category;
                                          $datacomputersub1 = $computersub1->getCategoryByParent($value['idCate']);
                                        ?>
                                        <?php foreach ($datacomputersub1 as $key11 => $value11): ?>
                                          <li>
                                             <a href="#"><?= $value11['cateName'] ?></a>
                                          </li>
                                       <?php endforeach ?>
                                       </ul>
                                    </div>
                                    <!-- /.col -->
                                 <?php endforeach ?>

                                 </div>
                              </div>
                              <!-- /.row -->
                           </div>
                           <!-- /.yamm-content -->
                        </li>
                     </ul>
                  </li>

                  <li class="dropdown hidden-sm">
                     <a href="category.html">Máy photocopy
                     <span class="menu-label new-menu hidden-xs">new</span>
                     </a>
                  </li>
                  <li class="dropdown hidden-sm">
                     <a href="category.html">Linh kiện</a>
                  </li>
                  
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Pages</a>
                     <ul class="dropdown-menu pages pages_info">
                        <li>
                           <div class="yamm-content">
                              <div class="row">
                                 <div class='col-xs-12 col-sm-4 col-md-4'>
                                    <ul class='links'>
                                       <li>
                                          <a href="home.html">Home I</a>
                                       </li>
                                       <li>
                                          <a href="home2.html">Home II</a>
                                       </li>
                                       <li>
                                          <a href="category.html">Category</a>
                                       </li>
                                       <li>
                                          <a href="category-2.html">Category II</a>
                                       </li>
                                       <li>
                                          <a href="detail.html">Detail</a>
                                       </li>
                                       <li>
                                          <a href="detail2.html">Detail II</a>
                                       </li>
                                       <li>
                                          <a href="shopping-cart.html">Shopping Cart Summary</a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class='col-xs-12 col-sm-4 col-md-4'>
                                    <ul class='links'>
                                       <li>
                                          <a href="checkout.html">Checkout</a>
                                       </li>
                                       <li>
                                          <a href="blog.html">Blog</a>
                                       </li>
                                       <li>
                                          <a href="blog-details.html">Blog Detail</a>
                                       </li>
                                       <li>
                                          <a href="contact.html">Contact</a>
                                       </li>
                                       <li>
                                          <a href="homepage1.html">Homepage 1</a>
                                       </li>
                                       <li>
                                          <a href="homepage2.html">Homepage 2</a>
                                       </li>
                                       <li>
                                          <a href="home-furniture.html">Home Furniture</a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class='col-xs-12 col-sm-4 col-md-4'>
                                    <ul class='links'>
                                       <li>
                                          <a href="sign-in.html">Sign In</a>
                                       </li>
                                       <li>
                                          <a href="my-wishlist.html">Wishlist</a>
                                       </li>
                                       <li>
                                          <a href="terms-conditions.html">Terms and Condition</a>
                                       </li>
                                       <li>
                                          <a href="track-orders.html">Track Orders</a>
                                       </li>
                                       <li>
                                          <a href="product-comparison.html">Product-Comparison</a>
                                       </li>
                                       <li>
                                          <a href="faq.html">FAQ</a>
                                       </li>
                                       <li>
                                          <a href="404.html">404</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </li>
                  <li class="dropdown navbar-right">
                     <a href="contact.html">Contact</a>
                  </li>
               </ul>
               <!-- /.navbar-nav -->
               <div class="clearfix"/>              
               </div>
               <!-- /.nav-outer -->
            </div>
            <!-- /.navbar-collapse -->
         </div>
         <!-- /.nav-bg-class -->
      </div>
      <!-- /.navbar-default -->
   </div>
   <!-- /.container-class -->
</div>
<!-- /.header-nav -->