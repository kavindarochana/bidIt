<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'My Yii Application';

// if (Yii::$app->session->hasFlash('success'))
// echo Yii::$app->session->getFlash('success');
$msg =  json_decode(Yii::$app->cache->get($this->params['user']->cust->id.'notice_message'));

$message = ($msg == null ? @$message:$msg);

if (@$message[0] == 'success') {
 
    echo "<script type=\"text/javascript\">
              $.growl.notice({ title: \"\", message: \"$message[1]\" });
          </script>";
          
          
}

if (@$message[0] == 'error') {
    echo "<script type=\"text/javascript\">
              $.growl.error({ title: \"\", message: \"$message[1]\" });
          </script>";
}

// Yii::$app->session->set('notice_message', null);
// $.growl.error({ message: "The kitten is attacking!" });
// $.growl.notice({ message: "The kitten is cute!" });
// $.growl.warning({ message: "The kitten is ugly!" });
?>

<script>
$(

".screenshot-link").click(function () {
var site = $(this).attr("site");
var num = $(this).attr("num");
// $.post(

// "/Development/Main/Screenshot",
// {

// site: site, num: num }
// );
$.confirm({

  content: x,
});
$('a.twitter').confirm({
  buttons: {
      hey: function(){
         // location.href = this.$target.attr(\'href\');
      }
  }
});

console.log(num);
});
</script>

<?php $a = 'aaaa';
echo '
<script>


var x = $("#er").data(\'id\');
console.log(x);console.log(x);

$(\'a.twitter\').confirm({
  content: $("#er").data(\'id\'),
  buttons: {
      hey: function(){
          location.href = this.$target.attr(\'href\');
      }
  }
});

function openDialog() {
  console.log(2131);
}
</script>';

?>

<a href="#gardenImage" data-name="xcv" data-id="http://localhost/bidIt/bid/data/images/bidproducts/iphonex.jpeg" class="openImageDialog thumbnail" data-toggle="modal">
    click
</a>

<script type="text/javascript">
var ul = "'" + <?php Url::base(true); ?> + "'";
console.log(ul);
$(document).on("click", ".openImageDialog", function () {
    console.log('Ok');
    var myImageId = $(this).data('id');
    var myTxt = $(this).data('name');
    console.log(myTxt);
    $(".modal-body #myImage").attr("src", myImageId);
    $('.modal-body #aaaqqq').html("1aaaaa");

    
    $('#aqw').on('click', function (event) {
      
      $.ajax({
       url: '<?php echo Yii::$app->request->baseUrl. '/index.php?r=site/axz' ?>',
       type: 'post',
       data: {
                 searchname:'a', 
                 searchby:'b' , 
                 _csrf : '<?=Yii::$app->request->getCsrfToken()?>'
             },
       success: function (data) {
          console.log('a');
          window.location='index.php';

          //this.redirect;
       }
  });
});
    
});
</script>

<div class="modal fade" id="gardenImage" tabindex="-1" role="dialog" aria-labelledby="gardenImageLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img id="myImage" class="img-responsive" src="" alt="">
                <p id=''></p>
                <span id = "aaaqqq" class="input-number-increment" ></span>
                <!-- <input type="text" class="input-xlarge" id="date" name="date" /> -->
                    
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button type="button" id = "aqw" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>



<!-- Modal
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->


<section style = "margin-bottom: -45px; border-bottom: 0px solid #eaeaea;" class="container-fluid padding-top-1x pb-5 widget widget-colors">
      <h3 style = "margin-bottom: 15px !important;" class="text-center mb-30">Live Auction</h3>
      <div class="row">
        <!-- Special Offer-->
        <div class="col-xl-3 col-md-4">
        <div class="card pt-3 pb-2 mb-30">
          <div class="card-body text-center"><span class="product-badge text-danger">Live</span>
            <h4 style = "margin-bottom: 15px;  margin-top: -20px;"><?=$products->name;?><!-- <span class='text-danger'>-30%</span> --></h4>
            <div style = "margin-top: -0.2rem !important;" class="mt-4">
              <span class="days_ref">Expire - <span class= "text-success"><?=date('M d Y H:i', strtotime($products->end_date))?></span></span>
                <div class="countdown countdown-alt" data-date-time="<?=date('m/d/Y H:i:s', strtotime($products->end_date));?>">
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
              <a class="d-inline-block" href="unishop/v3-0/template-2/shop-single.html"><img style = "max-width:100%;" src="<?php echo Url::base(true) . $products->image; ?>" alt="Special Offer"></a>
              <h3 style = "margin-bottom: 10px;" class="h5 text-normal pt-2"><a class="navi-link" href="unishop/v3-0/template-2/shop-single.html"></a></h3>
              <span class="h4 text-danger"><?=$products->price?> LKR</span>
              <div style = "margin-left: 14%; margin-top: 10px;" class = "row">
                <input style = "width:180px;"class="form-control form-control-pill form-control-sm" type="text" id="small-pill-input" placeholder="Place your bid">
                <button style = "margin-top: 0px; margin-bottom:0px" class="btn btn-pill btn-success btn-sm btn-secondary" type="button">Bid</button>
              </div>
          </div>
        </div>
      </div>
    </div>
    </section>

    <section class="hero-slider">
       <h3 class="text-center mb-30">Upcoming</h3>
      <div class="owl-carousel large-controls dots-inside pb-4" data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: true, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 8000 }">
        <div class="container-fluid">
          <div class="col-md-3 col-sm-6 mb-30"><span class="product-badge text-success">Queue</span><a class="category-card flex-wrap text-center pt-0" href="unishop/v3-0/template-2/shop-boxed-ls.html">
            <div class="category-card-thumb w-100"><img src="unishop/v3.0/template-2/img/shop/categories/03.jpg" alt="Category"></div>
            <div class="category-card-info w-100">
              <h3 class="category-card-title">Seating</h3>
              <h4 class="category-card-subtitle">Starting from 269.00 LKR</h4>
            </div></a></div>
        </div>
        <div class="container-fluid">
          <div class="col-md-3 col-sm-6 mb-30"><span class="product-badge text-success">Queue</span><a class="category-card flex-wrap text-center pt-0" href="unishop/v3-0/template-2/shop-boxed-ls.html">
            <div class="category-card-thumb w-100"><img src="unishop/v3.0/template-2/img/shop/categories/04.jpg" alt="Category"></div>
            <div class="category-card-info w-100">
              <h3 class="category-card-title">Cabinets</h3>
              <h4 class="category-card-subtitle">Starting from 220.00 LKR</h4>
            </div></a></div>
        </div>
        <div class="container-fluid">
          <div class="col-md-3 col-sm-6 mb-30"><span class="product-badge text-success">Queue</span><a class="category-card flex-wrap text-center pt-0" href="unishop/v3-0/template-2/shop-boxed-ls.html">
            <div class="category-card-thumb w-100"><img src="unishop/v3.0/template-2/img/shop/categories/05.jpg" alt="Category"></div>
            <div class="category-card-info w-100">
              <h3 class="category-card-title">Tables</h3>
              <h4 class="category-card-subtitle">Starting from 198.00 LKR</h4>
            </div></a></div>
        </div>
      </div>
    </section>

<section class="container padding-top-3x padding-bottom-3x">
      <h3 class="text-center mb-30">Past Auctions</h3>
      <div class="row">
        <div class="col-md-3 col-sm-6 mb-30"><a class="category-card flex-wrap text-center pt-0" href="unishop/v3-0/template-2/shop-boxed-ls.html">
            <div class="category-card-thumb w-100"><img src="unishop/v3.0/template-2/img/shop/categories/03.jpg" alt="Category"></div>
            <span class="product-badge btn-link-secondary">Expired</span>
            <div class="category-card-info w-100">
              <h3 class="category-card-title">Seating</h3>
              <h4 class="category-card-subtitle">Starting from 269.00 LKR</h4>
            </div></a></div>
        <div class="col-md-3 col-sm-6 mb-30"><a class="category-card flex-wrap text-center pt-0" href="unishop/v3-0/template-2/shop-boxed-ls.html">
            <div class="category-card-thumb w-100"><img src="unishop/v3.0/template-2/img/shop/categories/04.jpg" alt="Category"></div>
            <span class="product-badge btn-link-secondary">Expired</span>
            <div class="category-card-info w-100">
              <h3 class="category-card-title">Cabinets</h3>
              <h4 class="category-card-subtitle">Starting from 220.00 LKR</h4>
            </div></a></div>
        <div class="col-md-3 col-sm-6 mb-30"><a class="category-card flex-wrap text-center pt-0" href="unishop/v3-0/template-2/shop-boxed-ls.html">
            <div class="category-card-thumb w-100"><img src="unishop/v3.0/template-2/img/shop/categories/05.jpg" alt="Category"></div>
            <span class="product-badge btn-link-secondary">Expired</span>
            <div class="category-card-info w-100">
              <h3 class="category-card-title">Tables</h3>
              <h4 class="category-card-subtitle">Starting from 198.00 LKR</h4>
            </div></a></div>
        <div class="col-md-3 col-sm-6 mb-30"><a class="category-card flex-wrap text-center pt-0" href="unishop/v3-0/template-2/shop-boxed-ls.html">
            <div class="category-card-thumb w-100"><img src="unishop/v3.0/template-2/img/shop/categories/02.jpg" alt="Category"></div>
            <span class="product-badge btn-link-secondary">Expired</span>
            <div class="category-card-info w-100">
              <h3 class="category-card-title">Lighting</h3>
              <h4 class="category-card-subtitle">Starting from 95.99 LKR</h4>
            </div></a></div>
      </div>
      <div class="text-center"><a class="btn btn-outline-secondary mb-0" href="unishop/v3-0/template-2/shop-categories.html">Load More</a></div>
    </section>

    <!-- <section>
      <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#modalDefault">Default Modal</button>
      <div class="modal fade" id="modalDefault" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Modal title</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <p>Modal body text goes here.</p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-white btn-sm" type="button" data-dismiss="modal">Close</button>
            <button class="btn btn-primary btn-sm" type="button">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    </section> -->


    <?php

//   Modal::begin([

//           'id'     => 'model',
//           'size'   => 'modal-dialog',
//           'footer' => '<div class="modal-footer">
//                         <button class="btn btn-white btn-sm" type="button" data-dismiss="modal">Close</button>
//                         <button class="btn btn-primary btn-sm" type="button">Save changes</button>
//                       </div>'
//   ]);

//   echo '<div id="modelContent">
// </div>';

//   Modal::end();
?>



            <!-- <script>
            $(function(){
    $('#modelButton').click(function(){
        $('.modal').modal('show')
            .find('#modelContent')
            .load($(this).attr('value'));console.log("a");
    });
});
            </script> -->