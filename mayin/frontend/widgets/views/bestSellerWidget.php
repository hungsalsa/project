<div class="sidebar-widget wow fadeInUp outer-bottom-vs">
   <h3 class="section-title">Best seller</h3>
   <div class="sidebar-widget-body outer-top-xs">
      <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
      <?php 
   $myUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] && !in_array(strtolower($_SERVER['HTTPS']),array('off','no'))) ? 'https' : 'http';
   $myUrl .= '://'.$_SERVER['HTTP_HOST'];
 ?>
   <?php foreach ($newProduct as $value): ?>
      <?php $image = str_replace("uploads","thumbs",$value['image']); ?>
         <div class="item">
            <div class="products best-product">
               <div class="product">
                  <div class="product-micro">
                     <div class="row product-micro-row">
                        <div class="col col-xs-5">
                           <div class="product-image">
                              <div class="image">
                                 <a href="images/products/s1.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                    <img data-echo="images/products/s1.jpg" src="images/blank.gif" alt="">
                                    <div class="zoom-overlay"></div>
                                 </a>
                              </div>
                              <!-- /.image -->
                              <div class="tag tag-micro new">
                                 <span>new</span>
                              </div>
                           </div>
                           <!-- /.product-image -->
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                           <div class="product-info">
                              <h3 class="name"><a href="#">Asus Zenphone 6</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price">   
                                 <span class="price">
                                 $650.99           </span>
                              </div>
                              <!-- /.product-price -->
                              <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                           </div>
                        </div>
                        <!-- /.col -->
                     </div>
                     <!-- /.product-micro-row -->
                  </div>
                  <!-- /.product-micro -->
               </div>
               <div class="product">
                  <div class="product-micro">
                     <div class="row product-micro-row">
                        <div class="col col-xs-5">
                           <div class="product-image">
                              <div class="image">
                                 <a href="images/products/s1.jpg" data-lightbox="image-1" data-title="Nunc ullamcors">
                                    <img data-echo="images/products/s1.jpg" src="images/blank.gif" alt="">
                                    <div class="zoom-overlay"></div>
                                 </a>
                              </div>
                              <!-- /.image -->
                           </div>
                           <!-- /.product-image -->
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                           <div class="product-info">
                              <h3 class="name"><a href="#">Asus Zenphone 6</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price">   
                                 <span class="price">
                                 $650.99           </span>
                              </div>
                              <!-- /.product-price -->
                              <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                           </div>
                        </div>
                        <!-- /.col -->
                     </div>
                     <!-- /.product-micro-row -->
                  </div>
                  <!-- /.product-micro -->
               </div>
            </div>
         </div>
   <?php endforeach ?>
      </div>
   </div>
   <!-- /.sidebar-widget-body -->
</div>
<!-- /.sidebar-widget -->