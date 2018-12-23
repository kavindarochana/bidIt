<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<section class="container-fluid padding-top-1x pb-5 widget widget-colors">
      <h3 style = "margin-bottom: 15px !important;" class="text-center mb-30">Live Auction</h3>
      <div class="row">
        <!-- Special Offer-->
        <div class="col-xl-3 col-md-4">
        <div class="card pt-3 pb-2 mb-30">
            <div class="card-body text-center">
            <h4 style = "margin-bottom: 15px;  margin-top: -20px;"><?=$products->name;?><span class='text-danger'>-30%</span></h2>
            <div style = "margin-top: 1.0rem !important;" class="mt-4">
                <div class="countdown countdown-alt" data-date-time="<?=date('Y-m-d', strtotime($products->end_date))?>">
                  <div class="item">
                    <div class="days">00</div><span class="days_ref">Days</span>
                  </div>
                  <div class="item">
                    <div class="hours">00</div><span class="hours_ref">Hours</span>
                  </div>
                  <div class="item">
                    <div class="minutes">00</div><span class="minutes_ref">Mins</span>
                  </div>
                  <div class="item">
                    <div class="seconds">00</div><span class="seconds_ref">Secs</span>
                  </div>
                </div>
              </div>
              <a class="d-inline-block" href="unishop/v3-0/template-2/shop-single.html"><img style = "max-width:85%;" src="<?php echo Url::base(true) . $products->image; ?>" alt="Special Offer"></a>
              <h3 style = "margin-bottom: 10px;" class="h5 text-normal pt-2"><a class="navi-link" href="unishop/v3-0/template-2/shop-single.html"></a></h3>
              <span class="h4 text-danger"><?=$products->price?> LKR</span>
          </div>
        </div>
        <!-- Fetured Products-->
        <div class="col-xl-9 col-md-8">
          <div class="row">
            <!-- Item-->
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product-card mb-30">
                <div class="product-card-thumb"> <span class="product-badge text-danger">Sale</span><a class="product-card-link" href="unishop/v3-0/template-2/shop-single.html"></a><img src="unishop/v3.0/template-2/img/shop/th01.jpg" alt="Product">
                  <div class="product-card-buttons">
                    <button class="btn btn-white btn-sm btn-wishlist" data-toggle="tooltip" title="Wishlist"><i class="material-icons favorite_border"></i></button>
                    <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="material-icons check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                  </div>
                </div>
                <div class="product-card-details">
                  <h3 class="product-card-title"><a href="unishop/v3-0/template-2/shop-single.html">Storage Box</a></h3>
                  <h4 class="product-card-price">
                    <del>$49.00</del>$38.00
                  </h4>
                </div>
              </div>
            </div>
            <!-- Item-->

    </section>