<!doctype html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/index/css/modal.css">
  <meta name="description"
    content="公式オンラインストアです。唯一、お風呂で簡単にできるサロントリートメント、完成！あのカリスマ美容師たちの支持率No.1。TOKIO INKARAMI（トキオ インカラミ）だからできるシャンプー・トリートメント。選ばれる理由は…インカラミ、TOKIOトリートメント公式通販。">
  <meta name="copyright" content="トキオインカラミ ">
  <title><?php echo $title; ?></title>
  <link rel="apple-touch-icon" sizes="57x57" href="assets/index/images/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="assets/index/images/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/index/images/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/index/images/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/index/images/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/index/images/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/index/images/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/index/images/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/index/images/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="assets/index/images/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/index/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/index/images/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/index/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="assets/index/images/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <link
    href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700,900|Noto+Serif+JP:400,700&amp;subset=japanese"
    rel="stylesheet">
  <link href="assets/index/css/base.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/index/css/swiper.css">
  <link rel="stylesheet" href="assets/index/css/tab.css">
  <link rel="stylesheet" href="assets/index/css/modal.css">
  <link rel="stylesheet" href="assets/index/css/banner.css">
  <link href="assets/index/css/style.css" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="preconnect" href="https://www.google.com">
  <link rel="preconnect" href="https://www.google.co.jp">
  <link rel="preconnect" href="https://www.yahoo.co.jp">
  <link rel="preconnect" href="https://www.facebook.com">
  <link rel="preconnect" href="https://www.instagram.com">
  <link rel="canonical" href="https://ifing-beauty.com/" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
    integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</head>

<script>
  $(document).ready(function () {
    $("#myModal").modal('show');
  });
</script>
<script>
  $(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 1800) {
      $('.to-olympic-link').fadeIn();
    } else {
      $('.to-olympic-link').fadeOut();
    }
  });
</script>
<script>
  $(function () {
    $('a[href^="#"]').click(function () {
      var speed = 500;
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      $("html, body").animate({ scrollTop: position }, speed, "swing");
      return false;
    });
  });
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NBL00V4XZ8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments); }
  gtag('js', new Date());

  gtag('config', 'G-NBL00V4XZ8');
</script>

<body>

<div id="container">
    <div id="contents">
      

      
      <?php echo $header; ?>

      <div class="video-banner">
        <video autoplay muted playsinline loop controls controlsList="nodownload">
        <source src="../assets/tokio-cm.mp4" type="video/mp4">
        </video>
      </div>

      <div class="carousel-banner">
      <div id="slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#slider" data-slide-to="0" class="active"></li>
          <li data-target="#slider" data-slide-to="1" class="active"></li>
          <li data-target="#slider" data-slide-to="2" class="active"></li>
        </ol>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="assets/index/tokio-hirano1.png" alt="TOKIO 平野歩夢" class="img-fluid">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/index/tokio-hirano2.png" alt="TOKIO 平野歩夢" class="img-fluid">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/index/tokio-hirano3.png" alt="TOKIO 平野歩夢" class="img-fluid">
          </div>
        </div>
      </div>

      <div class="slider-bottom">
        <h5>【平野歩夢選手メッセージ】</h5>
        <p>「このコロナ禍において、TOKIOインカラミさんからのサポートをいただけることに感謝し、 
          その期待に応えられるよう、さらに上を目指していきたいと思います。」<br>
          - 平野歩夢</p>
      </div>
      </div>

      <div class="new-banner">
        <div class="text">
          <h2><img src="assets/index/images/tokio-inkarami-shampoo-treatment.svg" alt=""></h2>
          <p>【公式】カリスマ美容師支持率No.1</p>
          <p>TOKIO インカラミトリートメント</p>
          <!-- <img src="assets/index/images/tokio-inkarami-shampoo-treatment.svg" alt="TOKIO INKARAMI シャンプートリートメント"> -->
        </div>
        <div class="row g-0 p-0">
          <div class="col-sm-6">
            <img src="assets/tokioinkarami.png" class="img-fluid" alt="TOKIO INKARAMI PREMIUM/PLATINUM">
          </div>
          <div class="col-sm-6">
            <img src="assets/tokioinkarami2.png" class="img-fluid" alt="TOKIO INKARAMI HEAD SPA">
          </div>
        </div>
      </div>

      


      <div class="cta">
        <p class="text-center">理想のシャンプー・トリートメントをお探しの方に<br>
オススメしたいのが<br>
唯一、お風呂で簡単にできる<br>
サロントリートメント！</p>
      <!-- <div class="cta-items row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-4 products">
          <img src="assets/index/images/img44.png" alt="" class="img-fluid">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-4 products">
        <img src="assets/index/images/img44-3.png" alt="" class="img-fluid">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-4 products">
        <img src="assets/index/images/img44-2.png" alt="" class="img-fluid">
        </div>
      </div> -->

      

      <?php echo file_get_contents("components/cta.html") ?>

      </div>

      

      

     

      <!-- php echo $topBanner; -->

      <!-- question -->
      <!-- when file, put echo file_get_contents('components/question.html');; -->
      <!-- question -->

      <!-- CTA 定期 -->
      <?php echo file_get_contents("components/call-to-action.html"); ?>
      <!--// CTA 定期 -->

      <div class="sect-006">
        <div class="inner">
          <h1>「サロンでトリートメントをしたような髪になりたい」<br>
            「毎日理想のツヤ髪で過ごしたい」</h1>
          <h2>そんな方に選ばれる理由があります！</h2>
        </div>
      </div>

      <?php echo file_get_contents("components/inkarami.html")?>


      <?php echo file_get_contents("components/ingredients.html")?>

      



      <div class="sect-011">
        <div class="inner">
          <p>カリスマ美容師たちの支持率No.1<br>
            TOKIOインカラミ トリートメント</p>
        </div>
      </div>




      <?php echo file_get_contents('components/stylists-youtube.html') ?>



      <?php echo file_get_contents('components/tokio-ie.html') ?>



      <div class="sect-018">
        <h2><img src="assets/index/images/img25.jpg" width="1800" height="170" alt="選ばれる理由2" class="img-fluid" /></h2>
        <div class="inner">
          <h3>サロントリートメントの仕上がりを、<br>
            イエで簡単に再現できる<br>
            TOKIOインカラミ シャンプー・トリートメント。</h3>
          <p class="mb30"><span>シャンプー</span>に<br class="sp_on"><em>TOKIOインカラミ１を配合！</em><br>
            <span>トリートメント</span>に<br class="sp_on"><em>TOKIOインカラミ２・３・４を配合！</em><br>
            だから<span class="orange">シャンプーとトリートメントで<br class="sp_on">インカラミ</span>する！
          </p>
          <div class="w95 mb30">
            <h5>最高レベルの補修力と保湿力で</h5>
            <h4>TOKIO インカラミ サロントリートメント</h4>
            <h5><strong>ベーシックライン</strong>の仕上がりを実現します。</h5>
            <img src="assets/index/images/img27.jpg" width="1627" height="1386" alt="TOKIO IE PLATINUM"
              class="img-fluid" />
            <p>&nbsp;</p>
            <h5>圧倒的な補修力で強くて軽くて柔らかい髪質へ導く</h5>
            <h4>TOKIO インカラミ サロントリートメント</h4>
            <h5><strong>モイスチャーライン</strong>の仕上がりを実現します。</h5>
            <img src="assets/index/images/tokio-pl.png" alt="TOKIO PREMIUM" class="img-fluid">
            <p>&nbsp;</p>
            <h5>根本の立ち上がり効果と髪のダメージケアを両立させ、</h5>
            <h4>TOKIO SPA インカラミ サロントリートメント</h4>
            <h5>の仕上がりを実現します。</h5>
            <img src="assets/index/images/tokio-sh-tr.png" alt="TOKIO PREMIUM" class="img-fluid">
          </div>
        </div><!-- / .inner -->
      </div><!-- / .box11 -->


      <div class="sect-019">
        <div class="inner">

          <div class="box">
            <div class="row">
              <div class="col-md-6 col-7 txt">
                <p>いつも通り、<br>
                  TOKIO IE インカラミシャンプーで<br>
                  髪を洗って<br>
                  TOKIO IE インカラミトリートメントを<br>
                  揉み込んで流すだけ。</p>
              </div>

              <div class="col-md-6 col-5 img">
                <img src="assets/index/images/img-021.png" alt="" class="img-fluid">
              </div>
            </div>
            <!--text03-->
            <div class="text03">
              <p>カリスマ美容師支持率NO.1<br>
                <strong>TOKIOインカラミの仕上がり</strong>が<br>
                <strong>超簡単にお風呂</strong>で<strong></strong>再現できます
              </p>
            </div>
            <!--text03-->
          </div>

          <div class="box-01">
            <p>TOKIO IE インカラミ<br class="br_on">シャンプー・トリートメント<br>
              <strong>毎日のお手入れが楽になります</strong>
            </p>
          </div>
          <img src="assets/index/images/img-020.png" width="1800" height="1780"
            alt="TOKIO IE インカラミ シャンプー・トリートメント毎日のお手入れが楽になります。ブローがしやすくなる！カールがいつもより綺麗にでる！おさまりが良くなる！スタイルが長持ちする！サラサラになって、つい触りたくなる！"
            class="img-fluid" />
        </div>

      </div>



      <div class="sect-020">
        <div class="inner">
          <h1>世界初！家庭用システムトリートメント</h1>
          <h2><strong>シャンプー</strong>と<strong>トリートメント</strong>で <strong>インカラミする！</strong></h2>
          <div class="row">
            <div class="col-6">
              <img src="assets/index/images/img43.png" alt="" class="img-fluid">
            </div>
            <div class="inner_text col-6">
              <h4>TOKIO IE インカラミ</h4>
              <h4>２ヶ月分／1set</h4>
              <!-- <h5><br><strong>9300</strong><em>円</em></h5> -->
              <!-- <h3>9300円<br>（税込10230円）</h3> -->
              <h3><span>9300</span>円<br><em>（税込<span>10230</span>円）</em></h3>
              <h6>※１回の使用量目安:２プッシュ(ミディアム)</h6>
            </div>
          </div>

          <div class="treatment_text01">
            <div class="treatment-circle-img">
              <img src="assets/index/images/img-901.png" alt="" width="91" height="85">
              <p>&nbsp;</p>
            </div>
            <div class="treatment_text02">
              <h3>それだけじゃない！</h3>
              <h2>もっとずっと髪を触っていたくなる！</h2>
            </div>
            <div class="treatment_img_txt row">
              <div class="treatment_img col-4">
                <img src="assets/index/images/item.png" alt="シャンプートリートメント" class="img-fluid">
              </div>
              <div class="treatment_txt col-8">
                <p>洗い流さないトリートメント</p>
                <p><strong>アウトカラミオイル<br>トリートメント</strong></p>
              </div>
            </div>
            <p class="treatment_text_bottom">毎日アイロンをする…熱に反応し、キューティクルを整えます。<br>もっと手触りを感じたい…独自の補修効果で、更にサラサラで艶々なしなやかな髪へ！
            </p>
          </div>

          <a href="#nav-tab"><img src="assets/index/images/btn01.png" alt="ご購入はこちら" class="img-fluid"></a>

        </div>

      </div>

     


      <div class="sect-022">
        <div class="inner">
          <h2>これだけのこだわりがあるからこそ<br>たくさんの方にご愛用いただいています</h2>
          <p class="p25">TOKIOインカラミだから出来る<br>シャンプートリートメント。</p>
          <p class="p25">ぜひ手に入れてください</p>
          <p class="p26">特許技術インカラミ</p>
          <p class="p26">毛髪強度回復140%</p>
          <p class="p26">ノーベル賞成分フラーレン</p>
          <h2 class="p27">カリスマ美容師支持率<strong>No.1</strong></h2>
        </div>


        <img src="assets/index/images/img33.png" width="1800" height="1350" alt="TOKIOインカラミ、TOKIO INRARAMI"
          class="img-fluid" />

        <div class="col-12 tab-below" id="nav-tab">



          <p class="text">TOKIO インカラミ ホームケアは<br>3シリーズからお選びいただけます</p>
          <h2><img src="assets/index/images/a_dn_grey.png" alt="下へ"></h2>
          <img src="assets/index/images/tokio-ie.png" alt="TOKIO IE" class="img-fluid">


        </div>
      </div>



    

  





    <!-- Shipping and Subscription -->
    <?php echo file_get_contents("components/shipping-and-subscription.html")?>






      


    <?php echo $topFooter; ?> 


    <?php echo $bottomFooter; ?>





    </div>
  </div>

</body>
</html>