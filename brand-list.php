<?php 
/**
 * Template Name: brand-list Page
 * Template Post Type: post, page
 *
 */
get_header() ?>



  <style>
    #maker{
      max-width:1020px;
      margin:0 auto;
    }
    #maker h2 {
      position: relative;
      font-size: calc(0.8rem + .9vw);
      padding: 12px 15px;
      margin-bottom: 0;
      margin-left: 10px;
      line-height: 1;
    }
    #maker h2 img{
      width: 35px;
    }
    #maker h2::before {
      position: absolute;
      left: 5px;
      top: 5px;
      content: "";
      height: 100%;
      width: 4px;
      background-color: #FF5C00;
      height: calc(100% - 12px);
    }
    .text-element h1 {
      text-align: center;
    }
    #maker h2 {
      border: solid 1px #CDCDCD;
      box-shadow: 2px 3px 1px #eee;
      margin: 0 auto 30px auto;
      width: 100%;
    }
    #maker ul {
      list-style: none;padding: 0;
      display: flex;
      flex-wrap: wrap;
      width: 100%;
      margin: 30px auto;
      line-height: 2.4;
    }
    #maker a {
      text-decoration: none;
      color: #000;
      font-weight: bold;
    }
    #maker li {
      position: relative;
      width: 20%;
      padding-left: 20px;
    }
    #maker li::before {
      position: absolute;
      left: 0;
      content: "〇";
      display: inline-block;
    }
    section#banner-text-car .inner {
      margin: 0;
    }
    section#banner-text-car .inner {
      margin-left: auto;
      margin-right: auto;
    }
    
    @media (min-width: 768px) {
      .banner-text-detail {
        margin: 0;
      }
      .text-element h2, .text-element h1 {
        font-size: 28px;
        font-weight: 800;
        margin: 0 auto;
      }
      .text-element h2 {
        margin-bottom: 30px;
      }
      .text-element {
        text-align: left;
      }
      #maker a:hover {
        color: #ff9e67;
      }
      .car-detail-page-btn,
      #car-list-icon {
        margin-bottom: 60px;
        padding: 0;
      }
      .car-list-content h2 {
        text-align: center;
      }
    }
    @media (max-width: 1050px) {
      #maker ul {
        font-size: 0.9rem;
      }
    }
    @media (max-width: 950px) {
      #maker ul {
        font-size: 0.8rem;
      }
    }
    @media (max-width: 949px) {
      #maker li {
        width: 33%;
      }
      #maker ul {
        font-size: 1.2rem;
      }
    }
    @media (max-width: 768px) {
      #maker li {
        width: 50%;
      }
    }
    @media (max-width: 500px) {
      #maker h2 {
        width: 98%;
        margin-bottom: 0px;
      }
      #maker ul {
        display: block;
        font-size: 1rem;
        width: 100%;
        padding: 0;
        margin-top: 15px;
      }
      #maker li {
        width: 100%;
        padding: 0 0 5px 0;
        border-bottom: solid 1px #ddd;
      }
      #maker li:nth-last-child(1) {
        border-width: 0;
      }
      #maker li a {
        display: inline-block;
        width: 100%;
        padding-left: 5px;
      }
      #maker li::before {
        content: none;
      }
      .text-element h1 {
        font-size: 18px;
      }
    }

  </style>


<section id="banner-text-car">
  <div class="inner">
    <div class="banner-text-content">
      <div class="banner-text-detail">
      <div class="text-element">
        <h1>メーカーから中古車買取相場を探す</h1>
      </div>
      </div>
    </div>
  </div>
</section>

  
    
<section id="maker">
    
    <h2><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/img/country-logo/japan.png">日本</h2>
    
    <ul>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/lexus/">レクサス</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/toyota/">トヨタ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/nissan/">日産</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/honda/">ホンダ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/mazda/">マツダ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/suzuki/">スズキ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/daihatsu/">ダイハツ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/subaru/">スバル</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/mitsubishi/">三菱</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/mitsuoka-motor/">光岡自動車</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/isuzu/">いすゞ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/hino-motors/">日野自動車</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/mitsubishi-fuso/">三菱ふそう</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/zero-sports/">ゼロスポーツ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/tommykaira/">トミーカイラ</a></li>
    </ul>
    
    <h2><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/img/country-logo/usa.png">アメリカ</h2>
    
    <ul>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/jeep/">ジープ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/ford/">フォード</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/tesla/">テスラ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/chrysler/">クライスラー</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/chevrolet/">シボレー</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/cadillac/">キャデラック</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/lincoln/">リンカーン</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/gmc/">GMC</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/dodge/">ダッジ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/ktm/">KTM</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/hummer/">ハマー</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/saturn/">サターン</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/buick/">ビュイック</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/pontiac/">ポンテアック</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/mercury/">マーキュリー</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/us-lexus/">米国レクサス</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/us-toyota/">米国トヨタ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/us-nissan/">米国日産</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/us-honda/">米国ホンダ</a></li>
      <li><a href="#">米国スバル</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/us-infinity/">米国インフィニティ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/us-acura/">米国アキュラ</a></li>
    </ul>
    
    <h2><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/img/country-logo/uk.png">イギリス</h2>
    
    <ul>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/landrover/">ランドローバー</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/jaguar/">ジャガー</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/bentley/">ベントレー</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/mclaren/">マクラーレン</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/astonmartin/">アストンマーティン</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/rollsroyce/">ロールスロイス</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/lotus/">ロータス</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/daimler/">デイムラー</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/rover/">ローバー</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/tvr/">TVR</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/morgan/">モーガン</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/caterham/">ケータハム</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/mg/">MG</a></li>
    </ul>
    
    <h2><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/img/country-logo/italia.png">イタリア</h2>
    
    <ul>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/alfaromeo/">アルファ ロメオ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/fiat/">フィアット</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/maserati/">マセラティ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/ferrari/">フェラーリ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/lamborghini/">ランボルギーニ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/lancia/">ランチア</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/abarth/">アバルト</a></li>
    </ul>
    
    <h2><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/img/country-logo/german.png">ドイツ</h2>
    
    <ul>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/mercedes-benz/">メルセデス・ベンツ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/bmw/">BMW</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/audi/">アウディ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/volkswagen/">フォルクスワーゲン</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/porsche/">ポルシェ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/miini/">ミニ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/smart/">スマート</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/mercedes-amg/">メルセデスAMG</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/mercedes-maybach/">マイバッハ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/bmwalpina/">BMWアルピナ</a></li>
      <li><a href="#">オペル</a></li>
      <!--<li><a href="https://ctn-net.jp/kaitori/car/marketprice/mercedes-amg/">AMG</a></li>-->
    </ul>
    
    <h2><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/img/country-logo/france.png">フランス</h2>
    
    <ul>
    <li><a href="https://ctn-net.jp/kaitori/car/marketprice/citroen/">シトロエン</a></li>
    <li><a href="https://ctn-net.jp/kaitori/car/marketprice/peugeot/">プジョー</a></li>
    <li><a href="https://ctn-net.jp/kaitori/car/marketprice/renault/">ルノー</a></li>
    <li><a href="https://ctn-net.jp/kaitori/car/marketprice/alpine/">アルピーヌ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/ds-automobiles/">DSオートモビル</a></li>
    </ul>
    
    <h2><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/img/country-logo/oranda.png">オランダ</h2>
    
    <ul>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/donkervoort/">ドンカーブート</a></li>
    </ul>
    
    <h2><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/img/country-logo/korea.png">韓国</h2>
    
    <ul>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/hyundai/">ヒュンダイ</a></li>
    </ul>
    
    <h2><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/img/country-logo/sweden.png">スウェーデン</h2>
    
    <ul>
    <li><a href="https://ctn-net.jp/kaitori/car/marketprice/volvo/">ボルボ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/saab/">サーブ</a></li>
    </ul>
    
    <!--<h2>オーストリア</h2>-->
    
    </section>

    <section class="car-detail-page-btn">
      <div class="inner">
          <div class="car-detail-btn-resize" >
            
              <div class="car-detail-form-btn">
                <ul>
                  <li>
                    <p class="car-detail-but-one">簡単<span class="car-detail-but-number">55秒</span>査定依頼<br class="sp-b"><span class="car-detail-but-text">高価買取店上位3社のみ</span></p>
                    <a href="https://kaitori.ctn-demo.com/#form">
                      <p class="car-detail-but-two"><span class="car-detail-but-muri">無料</span>かんたん査定依頼</p>
                    </a>
                  </li>
                </ul>
              </div>
            
          </div>
      </div>
    </section>
    
    <section id="car-list-icon" class="car-list-icon">
      <div class="inner">
        <div class="car-list-content" style="margin-top: 30px;">
          <h2 style="text-align:center;font-weight:bold">ボディタイプから探す</h2>
          <img style="width: 100%;" src="https://kaitori.ctn-demo.com/wp-content/themes/ctnkaitori/assets/img/maker/line.png">
          <div class="car-list-detail">
            <div class="table-flex">
              <div class="cell">
                <a href="#">
                  <div class="icon">
                    <img alt="軽自動車" src="https://kaitori.ctn-demo.com/wp-content/themes/ctnkaitori/assets/img/bodytype/1.png">
                  </div>
                  <div class="label">軽自動車</div>
                </a>    
              </div>
              <div class="cell">
                <a href="https://kaitori.ctn-demo.com/marketprice/compactcar/">
                  <div class="icon">
                    <img alt="コンパクトカー"src="https://kaitori.ctn-demo.com/wp-content/themes/ctnkaitori/assets/img/bodytype/2.png">
                  </div>
                  <div class="label">コンパクトカー</div>
                </a>
              </div>
              <div class="cell">
                <a href="#">
                  <div class="icon">
                    <img alt="ミニバン/ワンボックス" src="https://kaitori.ctn-demo.com/wp-content/themes/ctnkaitori/assets/img/bodytype/3.png">
                  </div>
                  <div class="label">ミニバン・<br class="sp-b">ワンボックス</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://kaitori.ctn-demo.com/marketprice/stationwagon/">
                  <div class="icon">
                    <img alt="ステーションワゴン"src="https://kaitori.ctn-demo.com/wp-content/themes/ctnkaitori/assets/img/bodytype/4.png">
                  </div>
                  <div class="label">ステーション<br class="sp-b">ワゴン</div>
                </a>
              </div>
              <div class="cell">
                <a href="#">
                  <div class="icon">
                    <img alt="SUV・クロカン" src="https://kaitori.ctn-demo.com/wp-content/themes/ctnkaitori/assets/img/bodytype/5.png">
                  </div>
                  <div class="label">SUV・クロカン</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://kaitori.ctn-demo.com/marketprice/sedan/">
                  <div class="icon">
                    <img alt="セダン" src="https://kaitori.ctn-demo.com/wp-content/themes/ctnkaitori/assets/img/bodytype/6.png">
                  </div>
                  <div class="label">セダン</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://kaitori.ctn-demo.com/marketprice/campingcar/">
                  <div class="icon">
                    <img alt="キャンピングカー" src="https://kaitori.ctn-demo.com/wp-content/themes/ctnkaitori/assets/img/bodytype/7.png">
                  </div>
                  <div class="label">キャンピングカー</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://kaitori.ctn-demo.com/marketprice/coupe/">
                  <div class="icon">
                    <img alt="クーペ" src="https://kaitori.ctn-demo.com/wp-content/themes/ctnkaitori/assets/img/bodytype/8.png">
                  </div>
                  <div class="label">クーペ</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://kaitori.ctn-demo.com/marketprice/hatchback/">
                  <div class="icon">
                    <img alt="ハッチバック" src="https://kaitori.ctn-demo.com/wp-content/themes/ctnkaitori/assets/img/bodytype/9.png">
                  </div>
                  <div class="label">ハッチバック</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://kaitori.ctn-demo.com/marketprice/opencar/">
                  <div class="icon">
                    <img alt="オープンカー" src="https://kaitori.ctn-demo.com/wp-content/themes/ctnkaitori/assets/img/bodytype/10.png">
                  </div>
                  <div class="label">オープンカー</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://kaitori.ctn-demo.com/marketprice/welfare-vehicles/">
                  <div class="icon">
                    <img alt="福祉車両" src="https://kaitori.ctn-demo.com/wp-content/themes/ctnkaitori/assets/img/bodytype/11.png">
                  </div>
                  <div class="label">福祉車両</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://kaitori.ctn-demo.com/marketprice/commercialvehicle-van/">
                  <div class="icon">
                    <img alt="商用車・バン"src="https://kaitori.ctn-demo.com/wp-content/themes/ctnkaitori/assets/img/bodytype/12.png">
                  </div>
                  <div class="label">商用車・バン</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://kaitori.ctn-demo.com/marketprice/truck-bus/">
                  <div class="icon">
                    <img alt="トラック・バス" src="https://kaitori.ctn-demo.com/wp-content/themes/ctnkaitori/assets/img/bodytype/13.png">
                  </div>
                  <div class="label">トラック・バス</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://kaitori.ctn-demo.com/marketprice/pickup-truck/">
                  <div class="icon">
                    <img alt="ピックアップトラック" src="https://kaitori.ctn-demo.com/wp-content/themes/ctnkaitori/assets/img/bodytype/14.png">
                  </div>
                  <div class="label">ピックアップ<br class="sp-b">トラック</div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


      </div>
      </div>


            <div id="line-top-2"></div>
  <section class="line-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 tt-line">
          <h2>一括査定の流れ</h2>
        </div>
      </div>
    </div>
  </section>



  <!-- ======= Our Team Section ======= -->
  <section id="team" class="team">
    <div class="container" data-aos="fade-up">
      <div class="content-resize-top">
      <div class="section-header">
        <h2>カンタン4ステップ</h2>
      </div>

      <div class="row gy-4">
        <div class="col-xl-3 col-md-6 d-flex step-img" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <img src="https://kaitori.ctn-demo.com/wp-content/themes/ctnkaitori/assets/img/home/check1.png" class="img-fluid" alt="">
            <h4>査定申し込み</h4>
            <div class="ico-rr"><img class="ico-rrr" src="https://kaitori.ctn-demo.com/wp-content/themes/ctnkaitori/assets/img/home/ico-r1.png" loading="lazy"></div>
          </div>
        </div><!-- End Team Member -->
        <div class="col-xl-3 col-md-6 d-flex step-img" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <img src="https://kaitori.ctn-demo.com/wp-content/themes/ctnkaitori/assets/img/home/check2.png" class="img-fluid" alt="">
            <h4>一括査定</h4>
            <div class="ico-rr"><img class="ico-rrr" src="https://kaitori.ctn-demo.com/wp-content/themes/ctnkaitori/assets/img/home/ico-r2.png" loading="lazy"></div>
          </div>
        </div><!-- End Team Member -->
        <div class="col-xl-3 col-md-6 d-flex step-img" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <img src="https://kaitori.ctn-demo.com/wp-content/themes/ctnkaitori/assets/img/home/check3.png" class="img-fluid" alt="">
            <h4>必要書類の準備</h4>
            <div class="ico-rr"><img class="ico-rrr" src="https://kaitori.ctn-demo.com/wp-content/themes/ctnkaitori/assets/img/home/ico-r3.png" loading="lazy"></div>
          </div>
        </div><!-- End Team Member -->
        <div class="col-xl-3 col-md-6 d-flex step-img" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <img src="https://kaitori.ctn-demo.com/wp-content/themes/ctnkaitori/assets/img/home/check4.png" class="img-fluid" alt="">
            <h4>ご入金</h4>
            <div class="ico-rr"><img class="ico-rrr" src="https://kaitori.ctn-demo.com/wp-content/themes/ctnkaitori/assets/img/home/ico-r4.png" loading="lazy"></div>
          </div>
        </div><!-- End Team Member -->
      </div>
      </div>
    </div>
  </section><!-- End Our Team Section -->

  <!-- ======= Portfolio Section ======= -->
  <div id="column"></div>
  <section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">
    <div class="content-resize-top">
      <div class="section-header-spe">
        <h3><a href="#">中古車売却のお役たち情報</a></h3>
      </div>

      <div class="row infomation">
        <div class="col-lg-4 info-item">
          <div class="info-detail">
            <a href="column/car-purchase-on-loan/"><img src="https://kaitori.ctn-demo.com/wp-content/uploads/2023/03/b-image1.webp" loading="lazy"></a>
          </div>
        </div>
        <div class="col-lg-4 info-item">
          <div class="info-detail">
            <a href="column/car-purchase-season/"><img src="https://kaitori.ctn-demo.com/wp-content/uploads/2023/03/b-image2.webp" loading="lazy"></a>
          </div>
        </div>
        <div class="col-lg-4 info-item">
          <div class="info-detail">
            <a href="column/car-purchase-tax/"><img src="https://kaitori.ctn-demo.com/wp-content/uploads/2023/03/b-image3.webp" loading="lazy"></a>
          </div>
        </div>
        <div class="col-lg-4 info-item">
          <div class="info-detail">
            <a href="column/car-purchase-trouble/"><img src="https://kaitori.ctn-demo.com/wp-content/uploads/2023/03/b-image4.webp" loading="lazy"></a>
          </div>
        </div>
        <div class="col-lg-4 info-item">
          <div class="info-detail">
            <a href="column/car-purchase-required-documents/"><img src="https://kaitori.ctn-demo.com/wp-content/uploads/2023/03/b-image5.webp" loading="lazy"></a>
          </div>
        </div>
        <div class="col-lg-4 info-item">
          <div class="info-detail">
            <a href="column/car-purchase-flow-and-procedure/"><img src="https://kaitori.ctn-demo.com/wp-content/uploads/2023/03/b-image6.webp" loading="lazy"></a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section><!-- End Portfolio Section -->



  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="faq" class="faq">
    <div class="container" data-aos="fade-up">
    <div class="content-resize-top">
      <div class="row gy-4">

        <div class="col-lg-4">
          <div class="content px-xl-5">
            <h3><strong>よくあるご質問</strong></h3>
            <p>CTNのサービスを利用するにあたりよくあるご質問をまとめました。下記の目次からご覧になりたいものをご選択ください。</p>
          </div>
        </div>

        <div class="col-lg-8">

          <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                  <span class="num">1.</span>
                  売却までの流れは？
                </button>
              </h3>
              <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  CTN一括査定では「申し込み」→「査定」→「必要書類の準備」→「ご入金」まで簡単4ステップで愛車を売却できます。<br>
                  必要書類などご不明な点はカスタマーサポートにて準備から売却までお手伝いをさせていただきます。詳しくは<a href="https://kaitori.ctn-demo.com/column/car-purchase-flow-and-procedure/">「車を売るときの流れや手順を徹底解説！トラブルなく買取してもらうためには？」</a>
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                  <span class="num">2.</span>
                  売却に必要な書類を教えてください。
                </button>
              </h3>
              <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  売却時の必要書類については「普通車」・「軽自動車」で異なります。<br>
                  各種書類については<a href="https://kaitori.ctn-demo.com/column/car-purchase-required-documents/">「車の買取時に必要な書類は何？買取金額がアップする書類とは？」</a>
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                  <span class="num">3.</span>
                  自宅での出張査定や買取をしてもらうことはできるの？
                </button>
              </h3>
              <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  CTN一括査定では多くの中古車販売店が出張査定を対応しております。<br>
                  自宅や希望する場所を指定いただければ、高価買取業者がお伺いさせていただきます。
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                  <span class="num">4.</span>
                  ローンの残債が残っていても車でも売却できる？
                </button>
              </h3>
              <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  愛車のローンが残っていても所有者変更などの手続きが必要になりますが売却可能です。<br>
                  注意点として、売却価格とローンの残債がどちらが大きいかになります。<br>
                  ローンの残債が多い場合は一度完済する必要があります。<br>
                  詳しくは<a href="https://kaitori.ctn-demo.com/column/car-purchase-on-loan/">「車の買取はローン中でも可能！ケース別に売却手順や方法を解説」</a>
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                  <span class="num">5.</span>
                  買取は全国対応ですか？
                </button>
              </h3>
              <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  CTN一括査定では全国対応で高価買取いたしますのでお気軽にご連絡ください。(一部離島を除く)
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-6">
                  <span class="num">6.</span>
                  買取ができない車両などはありますか？
                </button>
              </h3>
              <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  CTNでは解体、貿易グループとの提携により、廃車、事故車、故障者、不動車など関わらず全ての車両の買取が可能となります。気になる方はまずはご相談ください。
                </div>
              </div>
            </div><!-- # Faq item-->

          </div>

        </div>
      </div>
      </div>
    </div>
  </section><!-- End Frequently Asked Questions Section -->

</main><!-- End #main -->


<?php get_footer(); ?>