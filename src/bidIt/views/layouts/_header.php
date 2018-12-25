<?php 
  use yii\helpers\Html;
  use yii\helpers\Url;
?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Unishop - Universal E-Commerce Template">
    <meta name="keywords" content="shop, e-commerce, modern, flat style, responsive, online store, business, mobile, blog, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Rokaux">
    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="unishop/v3.0/template-2/favicon.ico">
    <link rel="icon" type="image/png" href="unishop/v3.0/template-2/favicon.png">
    <link rel="apple-touch-icon" href="unishop/v3.0/template-2/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="unishop/v3.0/template-2/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="unishop/v3.0/template-2/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="unishop/v3.0/template-2/touch-icon-ipad-retina.png">
    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="unishop/v3.0/template-2/css/vendor.min.css">
    <!-- Main Template Styles-->
    <link id="mainStyles" rel="stylesheet" media="screen" href="unishop/v3.0/template-2/css/styles.min.css">
    <!-- Customizer Styles-->
    <link rel="stylesheet" media="screen" href="unishop/v3.0/template-2/customizer/customizer.min.css">
    <!-- Google Tag Manager-->
    <!-- Modernizr-->
    <script src="unishop/v3.0/template-2/js/modernizr.min.js"></script>
    <script data-require="jquery@*" data-semver="2.0.3" src="js/jquery-2.0.3.min.js"></script>
</head>
<body>


<noscript>
      <iframe src="index.html" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Template Customizer-->
    <div class="customizer-backdrop"></div>
    <!-- Navbar-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="navbar navbar-sticky">
      <!-- Site Branding-->
      <div class="site-branding"><a class="site-logo hidden-xs-down" href="<?=Url::to(["site/index"])?>"><img src="unishop/v3.0/template-2/img/logo/logo.png" alt="Unishop"></a><a class="site-logo logo-sm hidden-sm-up" href="<?=Url::to(["site/index"])?>"><img style = "max-width: 120px; max-height: 36px;" src="unishop/v3.0/template-2/img/logo/logo-sm.png" alt="Unishop"></a>
        <div class="lang-currency-switcher">
          <div class="lang-currency-toggle"><img src="unishop/v3.0/template-2/img/flags/GB.png" alt="English"><span>USD</span><i class="material-icons arrow_drop_down"></i>
          </div>
        </div>
      </div>
      <!-- Main Navigation-->
      <nav class="site-menu">
        <ul>
          <li class="active"><a href="<?=Url::to(["site/index"])?>"><span>Home</span></a>
            <ul class="sub-menu">
              <li class="active has-children"><a href="unishop/v3-0/template-2/index.html"><span>Hero Slider</span></a>
                <ul class="sub-menu w-400 p-0">
                  <li><a class="p-0" href="unishop/v3-0/template-2/index.html"><img src="unishop/v3.0/template-2/img/banners/home01.jpg" alt="Hero Slider Home"></a></li>
                </ul>
              </li>
              <li class="has-children"><a href="unishop/v3-0/template-2/home-featured-categories.html"><span>Categories Grid</span></a>
                <ul class="sub-menu w-400 p-0">
                  <li><a class="p-0" href="unishop/v3-0/template-2/home-featured-categories.html"><img src="unishop/v3.0/template-2/img/banners/home02.jpg" alt="Categories Grid Home"></a></li>
                </ul>
              </li>
            </ul>
          </li>
          
          <li><a href="unishop/v3-0/template-2/account-orders.html"><span>Account</span></a>
            <ul class="sub-menu">
                <li><a href="unishop/v3-0/template-2/account-orders.html">Orders List</a></li>
                <li><a href="unishop/v3-0/template-2/account-wishlist.html">Wishlist</a></li>
                <li><a href="unishop/v3-0/template-2/account-profile.html">Profile Page</a></li>
                <li><a href="unishop/v3-0/template-2/account-address.html">Contact / Shipping Address</a></li>
                <li><a href="unishop/v3-0/template-2/account-tickets.html">My Tickets</a></li>
                <li><a href="unishop/v3-0/template-2/account-single-ticket.html">Single Ticket</a></li>
                <li><a href="unishop/v3-0/template-2/account-password-recovery.html">Password Recovery</a></li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- Toolbar-->
      <div class="toolbar">
        <div class="inner"><a class="toolbar-toggle mobile-menu-toggle" href="#mobileMenu"><i class="material-icons menu"></i></a><a class="toolbar-toggle search-toggle" href="#search"><i class="material-icons search"></i></a><a class="toolbar-toggle" href="#account"><i class="material-icons person"></i></a><a class="toolbar-toggle" href="#cart"><i><span class="material-icons shopping_basket"></span><span class="count"><?=$this->params['user']->bid_balance;?></span></i></a></div>
        <!-- Toolbar Dropdown-->
        <div class="toolbar-dropdown">
          <!-- Mobile Menu Section-->
          <div class="toolbar-section" id="mobileMenu">
            <!-- Slideable (Mobile) Menu-->
            <nav class="slideable-menu mt-4">
              <ul class="menu">
                <li class=""><span><a href="<?=Url::to(["site/index"])?>"><span>Home</span></a><span class="sub-menu-toggle"></span></span>
                  
                </li>
                <li class="has-children"><span><a href="<?=Url::to(["site/about"])?>"><span>Shop</span></a><span class="sub-menu-toggle"></span></span>
                  <ul class="slideable-submenu">
                      <li><a href="unishop/v3-0/template-2/shop-categories.html">Shop Categories</a></li>
                    <li class="has-children"><span><a href="unishop/v3-0/template-2/shop-boxed-ls.html"><span>Shop Layout</span></a><span class="sub-menu-toggle"></span></span>
                      <ul class="slideable-submenu">
                          <li><a href="unishop/v3-0/template-2/shop-boxed-ls.html">Boxed Left Sidebar</a></li>
                          <li><a href="unishop/v3-0/template-2/shop-boxed-rs.html">Boxed Right Sidebar</a></li>
                          <li><a href="unishop/v3-0/template-2/shop-boxed-ft.html">Boxed Filters Top</a></li>
                          <li><a href="unishop/v3-0/template-2/shop-full-ls.html">Full Width Left Sidebar</a></li>
                          <li><a href="unishop/v3-0/template-2/shop-full-rs.html">Full Width Right Sidebar</a></li>
                          <li><a href="unishop/v3-0/template-2/shop-full-ft.html">Full Width Filters Top</a></li>
                      </ul>
                    </li>
                      <li><a href="unishop/v3-0/template-2/shop-single.html">Single Product</a></li>
                      <li><a href="unishop/v3-0/template-2/cart.html">Cart</a></li>
                    <li class="has-children"><span><a href="unishop/v3-0/template-2/checkout-address.html"><span>Checkout</span></a><span class="sub-menu-toggle"></span></span>
                      <ul class="slideable-submenu">
                          <li><a href="unishop/v3-0/template-2/checkout-address.html">Address</a></li>
                          <li><a href="unishop/v3-0/template-2/checkout-shipping.html">Shipping</a></li>
                          <li><a href="unishop/v3-0/template-2/checkout-payment.html">Payment</a></li>
                          <li><a href="unishop/v3-0/template-2/checkout-review.html">Review</a></li>
                          <li><a href="unishop/v3-0/template-2/checkout-complete.html">Complete</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="has-children"><span><a href="unishop/v3-0/template-2/account-orders.html"><span>Account</span></a><span class="sub-menu-toggle"></span></span>
                  <ul class="slideable-submenu">
                      <li><a href="unishop/v3-0/template-2/account-orders.html">Orders List</a></li>
                      <li><a href="unishop/v3-0/template-2/account-wishlist.html">Wishlist</a></li>
                      <li><a href="unishop/v3-0/template-2/account-profile.html">Profile Page</a></li>
                      <li><a href="unishop/v3-0/template-2/account-address.html">Contact / Shipping Address</a></li>
                      <li><a href="index.html">Open Ticket</a></li>
                      <li><a href="unishop/v3-0/template-2/account-tickets.html">My Tickets</a></li>
                      <li><a href="unishop/v3-0/template-2/account-single-ticket.html">Single Ticket</a></li>
                      <li><a href="unishop/v3-0/template-2/account-password-recovery.html">Password Recovery</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
          <!-- Search Section-->
          <div class="toolbar-section" id="search">
            <form class="search-form mb-2" method="get">
              <input type="search" placeholder="Type search query"><i class="material-icons search"></i>
            </form>
            <!-- Products-->
            <div class="widget widget-featured-products">
              <h3 class="widget-title">Found in Products</h3>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="unishop/v3-0/template-2/shop-single.html"><img src="unishop/v3.0/template-2/img/shop/widget/01.png" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="unishop/v3-0/template-2/shop-single.html">Max <span class='text-highlighted'>Task Chair</span></a></h4><span class="entry-meta">299.00LKR</span>
                </div>
              </div>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="unishop/v3-0/template-2/shop-single.html"><img src="unishop/v3.0/template-2/img/shop/widget/02.png" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="unishop/v3-0/template-2/shop-single.html"><span class='text-highlighted'>Drawer</span> File Cabinet</a></h4><span class="entry-meta">265.00LKR</span>
                </div>
              </div>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="unishop/v3-0/template-2/shop-single.html"><img src="unishop/v3.0/template-2/img/shop/widget/03.png" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="unishop/v3-0/template-2/shop-single.html">Campfire <span class='text-highlighted'>Paper</span> Table</a></h4><span class="entry-meta">570.00LKR</span>
                </div>
              </div>
            </div>
            <!-- Blog-->
            <div class="widget widget-featured-products">
              <h3 class="widget-title">Found in Blog</h3>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="unishop/v3-0/template-2/blog-single.html"><img src="unishop/v3.0/template-2/img/blog/widget/01.jpg" alt="Post"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="unishop/v3-0/template-2/blog-single.html"><span class='text-highlighted'>Modern</span> Working Space</a></h4><span class="entry-meta">May 09</span>
                </div>
              </div>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="unishop/v3-0/template-2/blog-single.html"><img src="unishop/v3.0/template-2/img/blog/widget/02.jpg" alt="Post"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="unishop/v3-0/template-2/blog-single.html">Interior <span class='text-highlighted'>Design</span> Tricks</a></h4><span class="entry-meta">April 18</span>
                </div>
              </div>
            </div>
          </div>
          <!-- Account Section-->
          <div class="toolbar-section" id="account">
            <ul class="nav nav-tabs nav-justified" role="tablist">
              <li class="nav-item"><a class="nav-link active" href="#myAccount" data-toggle="tab" role="tab">My Account</a></li>
              <li class="nav-item"><a class="nav-link" href="#signup" data-toggle="tab" role="tab">Sign Up</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade show active" id="myAccount" role="tabpanel">
                
              <div class="col-md-6">
                <ul class="list-unstyled text-sm mb-4">
                  <li><strong>MSIDN:</strong>  <?=$this->params['user']->cust->msisdn;?></li>
                  <li><strong>Name:</strong>  <?=$this->params['user']->cust->name;?></li>
                  <li><strong>Balance:</strong>  <?=$this->params['user']->bid_balance;?> bids</li>
                </ul>
              </div>
                 
                  
                  
                
              </div>
              <div class="tab-pane fade" id="signup" role="tabpanel">
                <form autocomplete="off" id="signup-form">
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Full Name" required>
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="email" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="password" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="password" placeholder="Confirm Password" required>
                  </div>
                  <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
                  <p class="text-muted text-sm mt-4">OR sign up with your social account</p><a class="media-btn media-facebook" href="#"><i class="socicon-facebook"></i><span>Signup with Facebook</span></a><a class="media-btn media-google" href="#"><i class="socicon-googleplus"></i><span>Signup with Google+</span></a><a class="media-btn media-twitter" href="#"><i class="socicon-twitter"></i><span>Signup with Twitter</span></a>
                </form>
              </div>
            </div>
          </div>
          <!-- Shopping Cart Section-->
          <div class="toolbar-section" id="cart">
            <div class="table-responsive shopping-cart mb-0">
              <table class="table">
                <thead>
                  <tr>
                    <th colspan="2">
                      <div class="d-flex justify-content-between align-items-center">Packages<a class="navi-link text-uppercase" href="unishop/v3-0/template-2/cart.html"></a></div>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="product-item"><a class="product-thumb" href="unishop/v3-0/template-2/shop-single.html"><img src="unishop/v3.0/template-2/img/shop/cart/01.jpg" alt="Product"></a>
                        <div class="product-info">
                        <i class="material-icons favorite_border"></i> <h4 class="product-title"><a data-toggle="modal" data-target="#modalDefault">3-Pack Saver</a></h4><span><em>Price:</em> 20.00LKR</span><span><em>Bids:</em> 3</span>
                        </div>
                      </div>
                    </td>
                    <td class="text-center"><a class="remove-from-cart" href="#"><i class="material-icons arrow_forward"></i></a></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="product-item"><a class="product-thumb" href="unishop/v3-0/template-2/shop-single.html"><img src="unishop/v3.0/template-2/img/shop/cart/02.jpg" alt="Product"></a>
                        <div class="product-info">
                          <h4 class="product-title"><a href="unishop/v3-0/template-2/shop-single.html">10-Pack Saver</a></h4><span><em>Price:</em> 65.00LKR</span><span><em>Bids:</em> 10</span>
                        </div>
                      </div>
                    </td>
                    <td class="text-center"><a class="remove-from-cart" href="#"><i class="material-icons arrow_forward"></i></a></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="product-item"><a class="product-thumb" href="unishop/v3-0/template-2/shop-single.html"><img src="unishop/v3.0/template-2/img/shop/cart/03.jpg" alt="Product"></a>
                        <div class="product-info">
                          <h4 class="product-title"><a href="unishop/v3-0/template-2/shop-single.html">20-Pack Saver</a></h4><span><em>Price:</em> 120.00LKR</span><span><em>Bids:</em> 20</span>
                        </div>
                      </div>
                    </td>
                    <td class="text-center"><a class="remove-from-cart" href="#"><i class="material-icons arrow_forward"></i></a></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- <hr class="mb-3">
            <div class="d-flex flex-wrap justify-content-between align-items-center">
              <div class="pr-2 py-1 text-sm">Subtotal: <span class='text-dark text-medium'>622.40LKR</span></div><a class="btn btn-sm btn-success mb-0 mr-0" href="unishop/v3-0/template-2/checkout-address.html">Checkout</a>
            </div> -->
          </div>
        </div>
      </div>
    </header>