<?php
/**r/
 * Template Name: Top Page
 */

 get_header(); ?>

 <!-- Popup Numberone -->
 <div id="popup-top" class="popup-top">
   <div class="popup-top-content">
     <h4>売却時期はいつ頃をお考えですか？</h4>
     <div class="content-btn-choose">
       <div class="content-btn-choose-flex">
       <li onclick="selectMonth('1ヵ月以内'); selectMonthSp('1ヵ月以内')"><span>1ヵ月以内</span></li>
       <li onclick="selectMonth('2ヵ月以内'); selectMonthSp('2ヵ月以内')"><span>2ヵ月以内</span></li>
       <li onclick="selectMonth('2ヵ月以内'); selectMonthSp('未定')"><span>未定</span></li>
       </div>
     </div>
   </div>
 </div>

 <!-- Popup tabs -->
 <div id="popup" class="popup">
     <div class="popup-content">
       <button class="popup-close" onclick="closePopup()"></button>
       <ul class="tab" style="display: none">
             <li onclick="showPopupTab('brand')">Brand</li>
             <li onclick="showPopupTab('vehicles')">Vehicles</li>
             <li onclick="showPopupTab('year')">Year</li>
             <li onclick="showPopupTab('version')">Version</li>
             <li onclick="showPopupTab('color')">Color</li>
             <li onclick="showPopupTab('kilomet')">Kilomet</li>
             <li onclick="showPopupTab('status')">Status</li>
       </ul>
       <div class="content">
           <div id="brandPopup" class="tab-content">
             <div class="header-text">
               <h3>メーカーを選択してください</h3>
             </div>
             <div class="menu-text">
               <nav class="modal-page-nav" id="js-modalPageNav">
                 <ul class="carmodelAnchorList">
                   <li><span><a href="#list-num">英数</a></span></li>
                   <li><span><a href="#list-a">ア</a></span></li>
                   <li><span><a href="#list-ka">カ</a></span></li>
                   <li><span><a href="#list-sa">サ</a></span></li>
                   <li><span><a href="#list-ta">タ</a></span></li>
                   <li><span><a href="#list-na">ナ</a></span></li>
                   <li><span><a href="#list-ha">ハ</a></span></li>
                   <li><span><a href="#list-ma">マ</a></span></li>
                   <li><span><a href="#list-ya">ヤ</a></span></li>
                   <li><span><a href="#list-ra">ラ</a></span></li>
                   <li><span><a href="#list-wa">ワ</a></span></li>
                 </ul>
               </nav>
             </div>
             <div class="content-detail">
                 <div class="logo-car-item">
                   <div class="nihon-car-item">
                     <h3>主な国産車メーカー</h3>
                     <ul class="modal-block-list"></ul>
                   </div>
                   <div class="world-car-item">
                     <h3>主な輸入車メーカー</h3>
                     <ul class="modal-block-list"></ul>
                   </div>
                 </div>
                 <div class="link-car-item">
                   <div class="link-item-one" id="list-num">
                     <h4>英数字</h4>
                     <ul class="modal-text-list"></ul>
                   </div>
                   <div class="link-item-two" id="list-a">
                     <h4>ア行</h4>
                     <ul class="modal-text-list"></ul>
                   </div>
                   <div class="link-item-three" id="list-ka">
                     <h4>カ行</h4>
                     <ul class="modal-text-list"></ul>
                   </div>
                   <div class="link-item-four" id="list-sa">
                     <h4>サ行</h4>
                     <ul class="modal-text-list"></ul>
                   </div>
                   <div class="link-item-five" id="list-ta">
                     <h4>タ行</h4>
                     <ul class="modal-text-list"></ul>
                   </div>
                   <div class="link-item-six" id="list-na">
                     <h4>ナ行</h4>
                     <ul class="modal-text-list"></ul>
                   </div>
                   <div class="link-item-seven" id="list-ha">
                     <h4>ハ行</h4>
                     <ul class="modal-text-list"></ul>
                   </div>
                   <div class="link-item-eight" id="list-ma">
                     <h4>マ行</h4>
                     <ul class="modal-text-list"></ul>
                   </div>
                   <div class="link-item-nine" id="list-ra">
                     <h4>ラ行</h4>
                     <ul class="modal-text-list"></ul>
                   </div>
                 </div>
             </div>
           </div>
           <div id="vehiclesPopup" class="tab-content content-tab">
             <div class="header-text">
               <h3>車種を選択してください</h3>
             </div>
             <div class="menu-text">
               <nav class="modal-page-nav" id="js-modalPageNav">
                 <ul class="carmodelAnchorList">
                 <li><span><a href="#test-1">英数</a></span></li>
                   <li><span><a href="#test-2">ア</a></span></li>
                   <li><span><a href="#test-3">カ</a></span></li>
                   <li><span><a href="#test-4">サ</a></span></li>
                   <li><span><a href="#test-5">タ</a></span></li>
                   <li><span><a href="#test-6">ナ</a></span></li>
                   <li><span><a href="#test-7">ハ</a></span></li>
                   <li><span><a href="#test-8">マ</a></span></li>
                   <li><span><a href="#test-9">ヤ</a></span></li>
                   <li><span><a href="#test-10">ラ</a></span></li>
                   <li><span><a href="#test-wa">ワ</a></span></li>
                 </ul>
               </nav>
             </div>
             <div class="vehicles-content">
               <div id="ninki"></div>
               <div id="number"></div>
               <div id="text-a"></div>
               <div id="text-ka"></div>
               <div id="text-sa"></div>
               <div id="text-ta"></div>
               <div id="text-na"></div>
               <div id="text-ha"></div>
               <div id="text-ma"></div>
               <div id="text-ya"></div>
               <div id="text-ra"></div>
             </div>
           </div>
           <div id="yearPopup" class="tab-content content-tab-year content-tab"></div>
           <div id="versionPopup" class="tab-content content-tab-version content-tab "></div>
           <div id="colorPopup" class="tab-content">
             <div class="header-text">
               <h3>ボディーカラーを選択してください</h3>
             </div>
             <div class="titl-text-plus">
               <p>※近しい色を選んでください。</p>
             </div>
             <div id="carbodycolor" class="carbody-color">
               <ul class="car-color-list">
                 <li onclick="selectColor('ホワイト'); selectColorSp('ホワイト')"><span class="color_panel color_white" id="color_white">ホワイト</span></li>
                 <li onclick="selectColor('ブラック'); selectColorSp('ブラック')"><span class="color_panel color_back" id="color_back">ブラック</span></li>
                 <li onclick="selectColor('シルバー'); selectColorSp('シルバー')"><span class="color_panel color_silver" id="color_silver">シルバー</span></li>
                 <li onclick="selectColor('レッド'); selectColorSp('レッド')"><span class="color_panel color_red" id="color_red">レッド</span></li>
                 <li onclick="selectColor('オレンジ'); selectColorSp('オレンジ')"><span class="color_panel color_oranger" id="color_orange">オレンジ</span></li>
                 <li onclick="selectColor('グリーン'); selectColorSp('グリーン')"><span class="color_panel color_green" id="color_green">グリーン</span></li>
                 <li onclick="selectColor('ブルー'); selectColorSp('ブルー')"><span class="color_panel color_blue" id="color_blue">ブルー</span></li>
                 <li onclick="selectColor('ブラウン'); selectColorSp('ブラウン')"><span class="color_panel color_brown" id="color_brown">ブラウン</span></li>
                 <li onclick="selectColor('イエロー'); selectColorSp('イエロー')"><span class="color_panel color_yellow" id="color_yellow">イエロー</span></li>
                 <li onclick="selectColor('ピンク'); selectColorSp('ピンク')"><span class="color_panel color_pink" id="color_pink">ピンク</span></li>
                 <li onclick="selectColor('パール'); selectColorSp('パール')"><span class="color_panel color_pearl" id="color_pearl">パール</span></li>
                 <li onclick="selectColor('パープル'); selectColorSp('パープル')"><span class="color_panel color_purple" id="color_purple">パープル</span></li>
                 <li onclick="selectColor('ゴールド'); selectColorSp('ゴールド')"><span class="color_panel color_gold" id="color_gold">ゴールド</span></li>
                 <li onclick="selectColor('グレー'); selectColorSp('グレー')"><span class="color_panel color_gray" id="color_gray" >グレー</span></li>
                 <li onclick="selectColor('不明'); selectColorSp('不明')"><span class="color_panel color_unknown" id="color_unknown">不明</span></li>
               </ul>
             </div>
           </div>
           <div id="kilometPopup" class="tab-content">
             <div class="header-text">
               <h3>走行距離を選択してください</h3>
             </div>
             <div class="titl-text-plus">
               <p>※不明の場合はだいたいで構いません。</p>
             </div>
             <div class="car-kilomet-list" class="car-kilomet-list"></div>
               <ul class="car-kilomet-item-list">
                 <!-- <li onclick="selectKilomet('～5,000km')"><span id="numberkl-item" class="numberkl-item">～5,000km</span></li> -->
                 <li onclick="selectKilomet('～10,000km'); selectKilometSp('～10,000km')"><span id="numberkl-item" class="numberkl-item">～1万km</span></li>
                 <li onclick="selectKilomet('～20,000km'); selectKilometSp('～20,000km')"><span id="numberkl-item" class="numberkl-item">～2万km</span></li>
                 <li onclick="selectKilomet('～30,000km'); selectKilometSp('～30,000km')"><span id="numberkl-item" class="numberkl-item">～3万km</span></li>
                 <li onclick="selectKilomet('～40,000km'); selectKilometSp('～40,000km')"><span id="numberkl-item" class="numberkl-item">～4万km</span></li>
                 <li onclick="selectKilomet('～50,000km'); selectKilometSp('～50,000km')"><span id="numberkl-item" class="numberkl-item">～5万km</span></li>
                 <li onclick="selectKilomet('～60,000km'); selectKilometSp('～60,000km')"><span id="numberkl-item" class="numberkl-item">～6万km</span></li>
                 <li onclick="selectKilomet('～70,000km'); selectKilometSp('～70,000km')"><span id="numberkl-item" class="numberkl-item">～7万km</span></li>
                 <li onclick="selectKilomet('～80,000km'); selectKilometSp('～80,000km')"><span id="numberkl-item" class="numberkl-item">～8万km</span></li>
                 <li onclick="selectKilomet('～90,000km'); selectKilometSp('～90,000km')"><span id="numberkl-item" class="numberkl-item">～9万km</span></li>
                 <li onclick="selectKilomet('～100,000km'); selectKilometSp('～100,000km')"><span id="numberkl-item" class="numberkl-item">～10万km</span></li>
                 <li onclick="selectKilomet('～110,000km'); selectKilometSp('～110,000km')"><span id="numberkl-item" class="numberkl-item">～11万km</span></li>
                 <li onclick="selectKilomet('～120,000km'); selectKilometSp('～120,000km')"><span id="numberkl-item" class="numberkl-item">～12万km</span></li>
                 <li onclick="selectKilomet('～130,000km'); selectKilometSp('～130,000km')"><span id="numberkl-item" class="numberkl-item">～13万km</span></li>
                 <li onclick="selectKilomet('～140,000km'); selectKilometSp('～140,000km')"><span id="numberkl-item" class="numberkl-item">～14万km</span></li>
                 <li onclick="selectKilomet('～150,000km'); selectKilometSp('～150,000km')"><span id="numberkl-item" class="numberkl-item">～15万km</span></li>
                 <!-- <li onclick="selectKilomet('～160,000km')"><span id="numberkl-item" class="numberkl-item">～160,000km</span></li> -->
                 <li onclick="selectKilomet('～170,000km'); selectKilometSp('～170,000km')"><span id="numberkl-item" class="numberkl-item">～17万km</span></li>
                 <!-- <li onclick="selectKilomet('～180,000km')"><span id="numberkl-item" class="numberkl-item">～180,000km</span></li> -->
                 <!-- <li onclick="selectKilomet('～190,000km')"><span id="numberkl-item" class="numberkl-item">～190,000km</span></li> -->
                 <li onclick="selectKilomet('～200,000km'); selectKilometSp('～200,000km')"><span id="numberkl-item" class="numberkl-item">～20万km</span></li>
                 <li onclick="selectKilomet('210,000km～'); selectKilometSp('210,000km～')"><span id="numberkl-item" class="numberkl-item">～21万km</span></li>
               </ul>
             </div>
             <div id="statusPopup" class="tab-content">
               <div class="header-text">
                 <h3>車両状態を選択してください</h3>
               </div>
               <div class="titl-text-plus">
                 <p>※不明の場合はだいたいで構いません。</p>
               </div>
               <div id="status-content" class="car-status-content">
               <div class="content-check-detail">
                   	<ul>
                     	<li class="hide-line-status">
	                       	<div class="title-check"><span>車両状態</span></div>
	                       	<div class="box-content">
	                         	<label class="custom-checkbox">
		                           	<input type="radio" name="groupA" id="moduleA" class="groupA">
		                           	<span class="checkmark">事故車ではない</span>
	                         	</label>
		                        <label class="custom-checkbox">
		                            <input type="radio" name="groupA" id="moduleB" class="groupA">
		                            <span class="checkmark">事故車(水害含む)</span>
		                        </label>
	                       	</div>
                     	</li>
                     <div class="mes-validate">
                        <p id="message-one"></p>
                     </div>
                     <li>
                       <div class="title-check"><span>事故歴</span></div>
                       <div class="box-content">
                         <label class="custom-checkbox">
                           <input type="radio" name="groupC" id="moduleE" class="groupC" onclick="selectHistory('なし'); selectHistorySp('なし')">
                           <span class="checkmark">なし</span>
                         </label>
                         <label class="custom-checkbox">
                           <input type="radio" name="groupC" id="moduleF" class="groupC" onclick="selectHistory('あり'); selectHistorySp('あり')">
                           <span class="checkmark">あり</span>
                         </label>
                         <label class="custom-checkbox">
                           <input type="radio" name="groupC" id="moduleG" class="groupC" onclick="selectHistory('不明'); selectHistorySp('不明')">
                           <span class="checkmark">不明</span>
                         </label>
                       </div>
                     </li>
                     <li>
                       <div class="title-check"><span>自走可否</span></div>
                       <div class="box-content">
                         <label class="custom-checkbox">
                           <input type="radio" name="groupB" id="moduleC" class="groupB" onclick="selectAutoAndSubmit('走行可'); selectAutoAndSubmitSp('走行可')">
                           <span class="checkmark">走行可</span>
                         </label>
                         <label class="custom-checkbox">
                           <input type="radio" name="groupB" id="moduleD" class="groupB" onclick="selectAutoAndSubmit('走行不可'); selectAutoAndSubmitSp('走行不可')">
                           <span class="checkmark">走行不可</span>
                         </label>
                       </div>
                     </li>
                     <div class="mes-validate">
                        <p id="message-two"></p>
                     </div>
                     
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         <div class="footer-popup">
               <div class="modal-footer" id="registerButtons">
           </div>
       </div>

     </div>
 </div>
  <!-- ======= Hero Section ======= -->
  <div class="new_hero">
    <div class="new_hero-inner">
  <img src="wp-content/themes/ctnkaitori/img/head_title.svg" class="head-title">
  <div class="hero_left ">
  <img src="wp-content/themes/ctnkaitori/img/model.png" class="head-model">
  <div class="hero_left-right">
  <div class="-flex">
  <img src="wp-content/themes/ctnkaitori/img/tag1.png" class="">
  <img src="wp-content/themes/ctnkaitori/img/tag2.png" class="">
  </div>
  <div class="bottom">
  <img src="wp-content/themes/ctnkaitori/img/top_car.png" class="head-car">
  </div>
  </div>
  </div>
  <!-- <img src="wp-content/themes/ctnkaitori/img/head_title.svg" class="head-title-sp sp-b"> -->
          <div id="form" class="sp-non">
          <div class="form-top" >
            <div class="font-top-ct">
              <h3>簡単<span>55秒</span>査定依頼</h3><h4>高価査定額の上位3社をご紹介</h4>
              <div class="form-detail sp-non">
              <?php echo do_shortcode('[contact-form-7 id="f42f2e0" title="new-form" html_id="new-form"]'); ?>
             
              </div>
            </div>
          </div>
          </div>
        </div>
        </div>
</div>
<div class="sliderSec sp-non">
  <div class="inner">
  <img src="wp-content/themes/ctnkaitori/img/arr.png" height="133px"width="275px" class="sp-non" style="margin-top:23px;">
<div class="sliderArea sp-non">
                  <div class="sliderWide">
                    <ul class="slider3">
                      <li>
                        <div class="slide-flex">
                          <div class="slide-left">
                            <img src="wp-content/themes/ctnkaitori/assets/img/home/car-list1.png">
                            <p class="car-name">N-BOX G・L Honda Sensing<br><span>2019年式　106,000km</span></p>
                          </div>
                          <div class="slide-right">
                            <p class="c-orange">A社　55.0<span>万円</span></p>
                            <p>B社　43.0<span>万円</span></p>
                            <p>C社　40.0<span>万円</span></p>
                          </div>
                      </li>
                      <li>                 
                        <div class="slide-flex">
                          <div class="slide-left">
                            <img src="wp-content/themes/ctnkaitori/assets/img/home/car-list2.png">
                            <p class="car-name">ハリアー　プレミアム<br><span>2019年式　31,000km</span></p>
                          </div>
                          <div class="slide-right">
                            <p class="c-orange">A社　274.0<span>万円</span></p>
                            <p>B社　250.0<span>万円</span></p>
                            <p>C社　238.0<span>万円</span></p>
                          </div>
                      </li>
                      <li>                    
                        <div class="slide-flex">
                          <div class="slide-left">
                            <img src="wp-content/themes/ctnkaitori/assets/img/home/car-list3.png">
                            <p class="car-name">ヴォクシー　ハイブリッドV<br><span>2014年式  233,000km</span></p>
                          </div>
                          <div class="slide-right">
                          <p class="c-orange">A社　75.0<span>万円</span></p>
                            <p>B社　63.0<span>万円</span></p>
                            <p>C社　50.0<span>万円</span></p>
                          </div>
                      </li>
                      <li>
                        <div class="slide-flex">
                          <div class="slide-left">
                            <img src="wp-content/themes/ctnkaitori/assets/img/home/car-list4.png">
                            <p class="car-name">CX-5　20S プロアクティブ<br><span>2016年式　57,000km</span></p>
                          </div>
                          <div class="slide-right">
                            <p class="c-orange">A社　188.0<span>万円</span></p>
                            <p>B社　177.0<span>万円</span></p>
                            <p>C社　165.0<span>万円</span></p>
                          </div>
                      </li>
</ul>
                  </div>
                  </div>
      </div>
 </div>  
        
        

              <!-- <div class="sliderArea sp-b">
                  <div class="sliderWide">
                    <ul class="slider2">
                      <li><img src="wp-content/themes/ctnkaitori/assets/img/home/sp-car-list1.png"></li>
                      <li><img src="wp-content/themes/ctnkaitori/assets/img/home/sp-car-list2.png"></li>
                      <li><img src="wp-content/themes/ctnkaitori/assets/img/home/sp-car-list3.png"></li>
                      <li><img src="wp-content/themes/ctnkaitori/assets/img/home/sp-car-list4.png"></li>
                    </ul>
                  </div>
                </div> -->

           

  <!-- End Hero Section -->

  <main id="main">
        <div class="row">
          <!-- Popup tabs -->
          <div id="popup-sp" class="popup">
              <div class="popup-content">
                <button class="popup-close" onclick="closePopup()"></button>
                <ul class="tab" style="display: none">
                      <li onclick="showPopupTab('brand')">Brand</li>
                      <li onclick="showPopupTab('vehicles')">Vehicles</li>
                      <li onclick="showPopupTab('year')">Year</li>
                      <li onclick="showPopupTab('version')">Version</li>
                </ul>
                <div class="content">
                    <div id="brandPopup" class="tab-content">
                      <div class="header-text">
                        <h3>メーカーを選択してください</h3>
                      </div>
                      <div class="menu-text">
                        <nav class="modal-page-nav" id="js-modalPageNav">
                          <ul class="carmodelAnchorList">
                            <li><span><a href="#list-num">英数</a></span></li>
                            <li><span><a href="#list-a">ア</a></span></li>
                            <li><span><a href="#list-ka">カ</a></span></li>
                            <li><span><a href="#list-sa">サ</a></span></li>
                            <li><span><a href="#list-ta">タ</a></span></li>
                            <li><span><a href="#list-na">ナ</a></span></li>
                            <li><span><a href="#list-ha">ハ</a></span></li>
                            <li><span><a href="#list-ma">マ</a></span></li>
                            <li><span><a href="#list-ya">ヤ</a></span></li>
                            <li><span><a href="#list-ra">ラ</a></span></li>
                            <li><span><a href="#list-wa">ワ</a></span></li>
                          </ul>
                        </nav>
                      </div>
                      <div class="content-detail">
                          <div class="logo-car-item">
                            <div class="nihon-car-item">
                              <h3>主な国産車メーカー</h3>
                              <ul class="modal-block-list"></ul>
                            </div>
                            <div class="world-car-item">
                              <h3>主な輸入車メーカー</h3>
                              <ul class="modal-block-list"></ul>
                            </div>
                          </div>
                          <div class="link-car-item">
                            <div class="link-item-one" id="list-num">
                              <h4>英数字</h4>
                              <ul class="modal-text-list"></ul>
                            </div>
                            <div class="link-item-two" id="list-a">
                              <h4>ア行</h4>
                              <ul class="modal-text-list"></ul>
                            </div>
                            <div class="link-item-three" id="list-ka">
                              <h4>カ行</h4>
                              <ul class="modal-text-list"></ul>
                            </div>
                            <div class="link-item-four" id="list-sa">
                              <h4>サ行</h4>
                              <ul class="modal-text-list"></ul>
                            </div>
                            <div class="link-item-five" id="list-ta">
                              <h4>タ行</h4>
                              <ul class="modal-text-list"></ul>
                            </div>
                            <div class="link-item-six" id="list-na">
                              <h4>ナ行</h4>
                              <ul class="modal-text-list"></ul>
                            </div>
                            <div class="link-item-seven" id="list-ha">
                              <h4>ハ行</h4>
                              <ul class="modal-text-list"></ul>
                            </div>
                            <div class="link-item-eight" id="list-ma">
                              <h4>マ行</h4>
                              <ul class="modal-text-list"></ul>
                            </div>
                            <div class="link-item-nine" id="list-ra">
                              <h4>ラ行</h4>
                              <ul class="modal-text-list"></ul>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div id="vehiclesPopup" class="tab-content content-tab">
                      <div class="header-text">
                        <h3>車種を選択してください</h3>
                      </div>
                      <div class="menu-text">
                        <nav class="modal-page-nav" id="js-modalPageNav">
                          <ul class="carmodelAnchorList">
                            <li><span><a href="#ninki">英数</a></span></li>
                            <li><span><a href="#number">ア</a></span></li>
                            <li><span><a href="#text-a">カ</a></span></li>
                            <li><span><a href="#text-sa">サ</a></span></li>
                            <li><span><a href="#text-ta">タ</a></span></li>
                            <li><span><a href="#text-na">ナ</a></span></li>
                            <li><span><a href="#text-ha">ハ</a></span></li>
                            <li><span><a href="#text-ma">マ</a></span></li>
                            <li><span><a href="#text-ya">ヤ</a></span></li>
                            <li><span><a href="#text-ra">ラ</a></span></li>
                            <li><span><a href="#text-wa">ワ</a></span></li>
                          </ul>
                        </nav>
                      </div>
                      <div class="vehicles-content">
                        <div id="ninki"></div>
                        <div id="number"></div>
                        <div id="text-a"></div>
                        <div id="text-ka"></div>
                        <div id="text-sa"></div>
                        <div id="text-ta"></div>
                        <div id="text-na"></div>
                        <div id="text-ha"></div>
                        <div id="text-ma"></div>
                        <div id="text-ya"></div>
                        <div id="text-ra"></div>
                      </div>
                    </div>
                    <div id="yearPopup" class="tab-content content-tab-year content-tab">

                    </div>
                    <div id="versionPopup" class="tab-content content-tab-version content-tab ">
                    </div>
                    
                  </div>
                  <div class="footer-popup">
                        <div class="modal-footer" id="registerButtons">
                    </div>
                </div>

              </div>
          </div>
        <div id="form-sp" class="sp-b">
          <div class="form-top">
            <div class="font-top-ct">
              <h3>簡単<span>55秒</span>査定依頼</h3><h4>高価査定額の上位3社をご紹介</h4>
              <div class="form-detail sp-b">
              <?php echo do_shortcode('[contact-form-7 id="fa50f14" title="new-form-sp" html_id="new-form-sp"]'); ?>
              </div>
            </div>
          </div>
        </div>
        <div class="sliderSec sp-b">
  <div class="inner">
 <div class="sp-arr">
  <p>平均買取価格<br><span>58万円UP</span></p>
 </div>
<div class="sliderArea">
                  <div class="sliderWide">
                  <ul class="slider3">
                      <li>
                        <div class="slide-flex">
                          <div class="slide-left">
                            <img src="wp-content/themes/ctnkaitori/assets/img/home/car-list1.png">
                            <p class="car-name">N-BOX G・L Honda Sensing<br><span>2019年式　106,000km</span></p>
                          </div>
                          <div class="slide-right">
                            <p class="c-orange">A社　55.0<span>万円</span></p>
                            <p>B社　43.0<span>万円</span></p>
                            <p>C社　40.0<span>万円</span></p>
                          </div>
                      </li>
                      <li>                 
                        <div class="slide-flex">
                          <div class="slide-left">
                            <img src="wp-content/themes/ctnkaitori/assets/img/home/car-list2.png">
                            <p class="car-name">ハリアー　プレミアム<br><span>2019年式　31,000km</span></p>
                          </div>
                          <div class="slide-right">
                            <p class="c-orange">A社　274.0<span>万円</span></p>
                            <p>B社　250.0<span>万円</span></p>
                            <p>C社　238.0<span>万円</span></p>
                          </div>
                      </li>
                      <li>                    
                        <div class="slide-flex">
                          <div class="slide-left">
                            <img src="wp-content/themes/ctnkaitori/assets/img/home/car-list3.png">
                            <p class="car-name">ヴォクシー　ハイブリッドV<br><span>2014年式  233,000km</span></p>
                          </div>
                          <div class="slide-right">
                          <p class="c-orange">A社　75.0<span>万円</span></p>
                            <p>B社　63.0<span>万円</span></p>
                            <p>C社　50.0<span>万円</span></p>
                          </div>
                      </li>
                      <li>
                        <div class="slide-flex">
                          <div class="slide-left">
                            <img src="wp-content/themes/ctnkaitori/assets/img/home/car-list4.png">
                            <p class="car-name">CX-5　20S プロアクティブ<br><span>2016年式　57,000km</span></p>
                          </div>
                          <div class="slide-right">
                            <p class="c-orange">A社　188.0<span>万円</span></p>
                            <p>B社　177.0<span>万円</span></p>
                            <p>C社　165.0<span>万円</span></p>
                          </div>
                      </li>
</ul>
                  </div>
                  </div>
      </div>
 </div>  
 <!-- <section class="logo-brand-partner">
  <div class="inner">
    <div class="logo-brand-partner-content">
      <img src="wp-content/uploads/2023/11/log2.png">
      <img src="wp-content/uploads/2023/11/log1.png">
      <img src="wp-content/uploads/2023/11/log3.png">
      <img src="wp-content/uploads/2023/11/log4.jpg">
    </div>
  </div>
</section> -->
<section class="logo-brand-partner sp-non">
  	<h4>大手から地域密着店まで多数提携！</h4>
	    <div class="logo-brand-partner-content">
	    	<div class="logo-brand-partner-resize">
	    		<img src="wp-content/uploads/2023/11/log2.png" style="width:240px;height:48px"> 
          <img src="wp-content/uploads/2023/11/apple-logo.png" style="width:180px">
          <img src="wp-content/uploads/2023/11/tau.png" style="width:81px">
			      <img src="wp-content/uploads/2023/11/log3.png" class="logo-gs">
            <img src="wp-content/uploads/2023/11/degg.png" style="width:123px;height:48px">
			      <img src="wp-content/uploads/2023/11/logo.svg" class="logo-azr">

	    	</div>
	    </div>
    <h4 class="dggd">事故車・廃車・軽自動車・SUV・スーパーカーなどの専門店を全て網羅しどんな車でも高価買取！</h4>
</section>
 <div id="line-top3"></div>
    <section class="line-top orange">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 tt-line">
            <h2>高価買取！お客様の声</h2>
          </div>
        </div>
      </div>
    </section>

    <section id="voice" class="services sections-bg">
      <div class="container sp-non custom-design-voice" data-aos="fade-up">
        <div class="voice-line-content">
          <div class="voice_container sp-non">
            <div class="top-detail-voice">
              <div class="voice_container-left">
                <img src="wp-content/themes/ctnkaitori/assets/img/voice_img_1.jpg" >
              </div> 
              <div class="voice_container-right">
                <div class="voice_price">
                  <p class="kokaku">高価買取</p>
                  <p class="bigprice">259<span>万円</span></p>
                </div>
                <p class="voice_comment">"電話ラッシュもなくストレス無く売却できました。"</p>
                <div class="voice_container-flex">
                  <p class="voice_grade">ホンダ　ヴェゼル　G<br>R4年　12,000Km</p>
                </div>
              </div>
            </div>
            <div class="bottom-detail-voice">
              <div class="voice_comment-box">
                <div class="voice_comment-box-flex">
                  <img src="wp-content/themes/ctnkaitori/assets/img/voice_user-1.jpg">
                  <p class="voice_name">ゆうき<br>大阪府</p>
                </div>
                <p class="text-voice-bt">電話がすごいたくさんかかってくるのは嫌だなと思っていたので、CTNの一括査定があって助かりました。3社からだけ電話がかかってきて、売却を決めた後は売却先以外からの余計な電話も無かったのが良かったと思います。</p>
              </div> 
            </div>
          </div>
          <div class="voice_container">
            <div class="top-detail-voice">
              <div class="voice_container-left">
                <img src="wp-content/themes/ctnkaitori/assets/img/voice_img_2.jpg" >
              </div>
              <div class="voice_container-right">
                <div class="voice_price">
                  <p class="kokaku">高価買取</p>
                  <p class="bigprice">72.5<span>万円</span></p>
                </div>
                <p class="voice_comment">"他の一括査定サイトより10万円も高く買い取ってもらって嬉しかった。"</p>
                <div class="voice_container-flex">
                  <p class="voice_grade">スズキ スペーシア X <br>H29年　45,000km</p>
                </div>
              </div>  
            </div>
            <div class="bottom-detail-voice">
              <div class="voice_comment-box">
                <div class="voice_comment-box-flex">
                  <img src="wp-content/themes/ctnkaitori/assets/img/voice_user-2.jpg">
                  <p class="voice_name">ナオ<br>東京都</p>
                </div>
                <p class="text-voice-bt">ネットの一括査定サイトを色々使ってたけど、CTNでは他の査定結果より10万円も高く買い取ってくれる業者がいて驚いた。3社比較だから売り先もすぐに決まったし、希望通りの査定金額で買い取ってもらえたから嬉しかった。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="voice-line-content">
          <div class="voice_container">
            <div class="top-detail-voice">
              <div class="voice_container-left">
                <img src="wp-content/themes/ctnkaitori/assets/img/voice_img_3.jpg" >
              </div>
              <div class="voice_container-right">
                <div class="voice_price">
                  <p class="kokaku">高価買取</p>
                  <p class="bigprice">203<span>万円</span></p>
                </div>
                <p class="voice_comment">"想像以上にスムーズに手続きしていただいて助かりました。"</p>
                <div class="voice_container-flex">
                  <p class="voice_grade">トヨタ　ヤリスクロス　G　<br>R4年　14,000km</p>
                </div>
              </div>  
            </div>
            <div class="bottom-detail-voice">
              <div class="voice_comment-box">
                <div class="voice_comment-box-flex">
                  <img src="wp-content/themes/ctnkaitori/assets/img/voice_user-3.jpg">
                  <p class="voice_name">ヨシ<br>愛知県</p>
                </div>
                <p class="text-voice-bt">平日は仕事で電話に出る余裕がないので、3社からしか電話がかかってこないのはとても助かりました。3社の比較なのですぐに売却先も決まりましたし、その後の手続きもとてもスムーズで、本当に助かりました。</p>
              </div>
            </div>
          </div>
          <div class="voice_container">
            <div class="top-detail-voice">
              <div class="voice_container-left">
                <img src="wp-content/themes/ctnkaitori/assets/img/voice_img_4.jpg" >
              </div>
              <div class="voice_container-right">
                <div class="voice_price">
                  <p class="kokaku">高価買取</p>
                  <p class="bigprice">455<span>万円</span></p>
                </div>
                <p class="voice_comment">"とても詳しく説明してもらえたので安心して売却できました。"</p>
                <div class="voice_container-flex">
                  <p class="voice_grade no_4">トヨタ　ランドクルーザープラド TX－Lパッケージ<br>R2年　18,000km</p>
                </div>  
              </div> 
            </div>
            <div class="bottom-detail-voice">
              <div class="voice_comment-box">
                <div class="voice_comment-box-flex">
                  <img src="wp-content/themes/ctnkaitori/assets/img/voice_user-4.jpg">
                  <p class="voice_name">としぞう<br>岡山県</p>
                </div>
                <p class="text-voice-bt">思ってたより高い値段が付いて驚きましたが、なぜ高く買い取ってくれるのかわかりやすく説明してもらえたおかげで、最期まで安心してお任せすることができました。長年自動車業界活躍してきたベテランということもあり、とても頼もしかったです。</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="sliderWide sp-block">
                    <ul class="slider3">
                    <li>
                      <div class="container sp-block sp_voice">
                      <div class="sp_voice_container">
        <p class="sp_voice_head">"とても詳しく説明してもらえたので安心して売却できました。"</p>
        <div class="sp-voice_car">
        <img src="wp-content/themes/ctnkaitori/assets/img/voice_img_4.jpg" >
        </div>
       </div>
        <div class="voice_container-left toshi">
        <img src="wp-content/themes/ctnkaitori/assets/img/voice_user-4.jpg">
        <div class="sp_voice_txt toshi">
        <p class="voice_name">としぞう　岡山県</p>
            <p class="voice_grade toshi">トヨタ　ランドクルーザー<br>プラド TX－Lパッケージ<br>R2年　18,000km</p>
          </div>
            <div class="voice_price">
            <p class="kokaku">高価買取</p>
              <p>455<span>万円</span></p>
            </div>
        </div> 
        <p class="voice_text">思ってたより高い値段が付いて驚きましたが、なぜ高く買い取ってくれるのかわかりやすく説明してもらえたおかげで、最期まで安心してお任せすることができました。長年自動車業界活躍してきたベテランということもあり、とても頼もしかったです。</p>
        </div>
                      </li>
                      <li>
                      <div class="container sp_voice">
                      <div class="sp_voice_container">
                        <p class="sp_voice_head">"電話ラッシュもなくストレス無く売却できました。"</p>
                        <div class="sp-voice_car">
                        <img src="wp-content/themes/ctnkaitori/assets/img/voice_img_1.jpg" >
                        </div>
                      </div>
                        <div class="voice_container-left yuki">
                        <img src="wp-content/themes/ctnkaitori/assets/img/voice_user-1.jpg">
                        <div class="sp_voice_txt">
                        <p class="voice_name">ゆうき　大阪府</p>
                            <p class="voice_grade">ホンダ　ヴェゼル　G<br>R4年　12,000Km</p>
                          </div>
                            <div class="voice_price">
                            <p class="kokaku">高価買取</p>
                              <p>259<span>万円</span></p>
                            </div>
                        </div> 
                        <p class="voice_text">電話がすごいたくさんかかってくるのは嫌だなと思っていたので、CTNの一括査定があって助かりました。3社からだけ電話がかかってきて、売却を決めた後は売却先以外からの余計な電話も無かったのが良かったと思います。</p>
                        </div> 
                    </li>
                      <li>
                      <div class="container sp-block sp_voice">
                      <div class="sp_voice_container">
                      <p class="sp_voice_head">"想像以上にスムーズに手続きしていただいて助かりました。"</p>
                      <div class="sp-voice_car">
                      <img src="wp-content/themes/ctnkaitori/assets/img/voice_img_3.jpg" >
                      </div>
                    </div>
                      <div class="voice_container-left">
                      <img src="wp-content/themes/ctnkaitori/assets/img/voice_user-3.jpg">
                      <div class="sp_voice_txt">
                      <p class="voice_name yoshi">ヨシ　愛知県</p>
                          <p class="voice_grade">トヨタ<br>ヤリスクロス　G<br>R4年　14,000km</p>
                        </div>
                          <div class="voice_price">
                          <p class="kokaku">高価買取</p>
                            <p>203<span>万円</span></p>
                          </div>
                      </div> 
                      <p class="voice_text">平日は仕事で電話に出る余裕がないので、3社からしか電話がかかってこないのはとても助かりました。3社の比較なのですぐに売却先も決まりましたし、その後の手続きもとてもスムーズで、本当に助かりました。</p>
                      </div> 

                      </li>
                      <li>

                      <div class="container sp-block sp_voice">
        <div class="sp_voice_container">
        <p class="sp_voice_head">"他の一括査定サイトより10万円も高く買い取ってもらって嬉しかった。"</p>
        <div class="sp-voice_car">
        <img src="wp-content/themes/ctnkaitori/assets/img/voice_img_2.jpg" >
        </div>
       </div>
        <div class="voice_container-left">
        <img src="wp-content/themes/ctnkaitori/assets/img/voice_user-2.jpg">
        <div class="sp_voice_txt">
        <p class="voice_name nao">ナオ　東京都</p>
            <p class="voice_grade">スズキ スペーシア X <br>H29年　45,000km</p>
          </div>
            <div class="voice_price">
            <p class="kokaku">高価買取</p>
              <p class="nao_price">72.5<span>万円</span></p>
            </div>
        </div> 
        <p class="voice_text">ネットの一括査定サイトを色々使ってたけど、CTNでは他の査定結果より10万円も高く買い取ってくれる業者がいて驚いた。3社比較だから売り先もすぐに決まったし、希望通りの査定金額で買い取ってもらえたから嬉しかった。</p>
        </div>
                      
                      </li>
                    </ul>
                  </div>


       </div>
    </section>

    <div id="line-top"></div>
    <section class="line-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 tt-line">
            <h2>他社の一括査定との違い</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="area-top">
      <div class="container">
        <div class="feature">
          <h2>買取業者1,000店舗から上位<br class="sp-b"><span class="big-font color-orange">3社</span>を厳選<br>
            <span class="color-orange small-font">だから電話ラッシュも無く高価買取が実現</span>
          </h2>
        </div>
        <div class="wrap">
          <table>
            <thead>
                <tr>
                  <th scope="col">基本情報</th>
                  <th scope="col" class="green-bk"><img src="wp-content/themes/ctnkaitori/img/logo-top.png" class="table-logo"></th>
                  <th scope="col">A社</th>
                  <th scope="col">B社</th>
                </tr>
            </thead>
            <tbody>
              <tr>
                <th>紹介数</th>
                <td class="green-bk2 red-txt price">3社</td>
                <td class="">10社</td>
                <td class="">3社</td>
              </tr>
              <tr>
                <th>査定数</th>
                <td class="green-bk2">10社以上</td>
                <td>10社</td>
                <td>3社</td>
              </tr>
              <tr>
                <th>提携業者数</th>
                <td class="green-bk2 red-txt price">600社以上</td>
                <td>400社</td>
                <td>200社</td>
              </tr>
              <tr>
              <tr>
                <th>高額査定店のみと交渉</th>
                <td class="green-bk2" >○</td>
                <td>×</td>
                <td>×</td>
              </tr>
              <tr>
              <tr>
                <th>ご連絡</th>
                <td class="green-bk2">高価買取店3社のみ</td>
                <td>電話ラッシュあり</td>
                <td>高価買取3社のみ</td>
              </tr>
              <tr>
                <th>対応<br class="sp-b">スピード</th>
                <td class="green-bk2">最長<br class="sp-b">翌営業日</td>
                <td>即日可</td>
                <td>即日可</td>
              </tr>
              <tr>
                <th>廃車、事故車、不動車</th>
                <td class="green-bk2">○</td>
                <td>×</td>
                <td>×</td>
              </tr>
              <tr>
                <th>業界経験</th>
                <td class="green-bk2">14年以上</td>
                <td>10年</td>
                <td>5年</td>
              </tr>
              <tr>
                <th>カスタマー<br class="sp-b">サポート</th>
                <td class="green-bk2">○</td>
                <td>×</td>
                <td>○</td>
              </tr>
              <tr>
                <th>利用料・手数料等</th>
                <td class="green-bk2">無料</td>
                <td>無料</td>
                <td>無料</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>




    <div id="strong"></div>
    <section class="line-top">
      <div class="container">
        <div class="row">
        <div class="col-lg-12 tt-line" >
            <h2>CTN一括査定はココが違う</h2>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>CTNの一括査定はなぜ<span>高く売れる！？</span></h2>
        </div>
        <div class="row gy-4 number-content-cus" data-aos="fade-up" data-aos-delay="100" style="justify-content:center;">
          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <div class="icon">
                <img src="wp-content/themes/ctnkaitori/assets/img/home/ico-c1.png">
              </div>
              <div class="sv-ct">
                <img src="wp-content/themes/ctnkaitori/assets/img/home/ike1.png">
                <p class="reason-head"><span class="color-orange">1,000</span>店舗以上から比較！<br>
                    だから<span class="color-orange">高価買取</span>！</p>
<p>CTNの豊富なネットワークを活用し<br>
                    全国で高価買取業者が見つかる</p>
              </div> 
            </div>
          </div><!-- End Service Item -->
          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <div class="icon">
                <img src="wp-content/themes/ctnkaitori/assets/img/home/ico-c2.png">
              </div>
              <div class="sv-ct spec-sv">

                  <img src="wp-content/themes/ctnkaitori/assets/img/home/iken2.png">
                  <p class="reason-head">電話ラッシュ<span class="color-orange">一切無し</span>
                  </p>
                  <p>CTN会員の中古車販売店から<br>高価買取店舗3社のみ！</p>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <div class="icon">
                <img src="wp-content/themes/ctnkaitori/assets/img/home/ico-c3.png">
              </div>
              <div class="sv-ct">
                <img src="wp-content/themes/ctnkaitori/assets/img/home/ike2.png">
                <p class="reason-head">自動車業界<span class="color-orange">14年以上</span>の<span class="color-orange">安心</span>と<span class="color-orange">実績</span>
                  </p>
                  <p>長年販売店様と培った高い信頼性で<br>
                  安心して愛車をご売却頂けます。</p>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <div class="icon">
                <img src="wp-content/themes/ctnkaitori/assets/img/home/ico-c4.png">
              </div>
              <div class="sv-ct">
                <img src="wp-content/themes/ctnkaitori/assets/img/home/ike4.png">
                <p class="reason-head"><span class="color-orange">全国</span>対応</span>
                  </p>
                  <p>CTNのネットワークで<br>日本全国ドコでも対応！</p>
              </div> 
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <div class="icon">
                <img src="wp-content/themes/ctnkaitori/assets/img/home/ico-c5.png">
              </div>
              <div class="sv-ct">
                <img src="wp-content/themes/ctnkaitori/assets/img/home/ike5.png">
                <p class="reason-head"><span class="color-orange">廃車、事故車、不動車</span>OK
                  </p>
                  <p>解体・貿易グループ業者と提携<br>
                  しているため高価買取が可能！</p>
              </div> 
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Our Services Section -->

  

   <section class="area-top" style="padding-bottom:0px; padding-top: 0px;"> 
    <!-- <div id="line-top"></div> -->
    <section class="line-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 tt-line">
            <h2>CTN審査基準による<br class="sp-block">販売店の厳選</h2>
          </div>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="ctn-content-cus">
        <p style="text-align:center;font-weight:bold;" class="setumei">CTNの<span class="color_orange">独自審査基準をクリア</span>した買取店のみを厳選しております<br class="sp-non">審査基準により優良買取店による<span class="color_orange">高価買取の実現と買取トラブルを防止</span>し<br class="sp-non">安心・安全に愛車が売却可能となっております。</p>
        <div class="flex se">
          <div class="sinsa-item item-one-space"  data-aos="fade-up" data-aos-delay="100">
            <div class="sinsa-item-left">
              <img src="wp-content/themes/ctnkaitori/img/yoruone-1.png" loading="lazy" style="width:302px;height:321px;">
            </div>
            <div class="sinsa-item-right">
              <div class="sinsa-item-text">
                <h3>CTN独自審査</h3>
                <p>買取店から査定価格提示後の価格変更などが発生しないよう、CTNでは買取り店へ独自審査を行い、通過した店舗のみが参加しております。</p>
                <div class="text-special">
                  <span>Independent</span>
                  <span class="text-special-tw">Examination</span>
                </div>
              </div>
            </div> 
          </div>
          <div class="sinsa-item item-two-space"  data-aos="fade-up" data-aos-delay="100">
            <div class="sinsa-item-left">
              <img src="wp-content/themes/ctnkaitori/img/yorutwo2.png" loading="lazy" style="width:300px;height:314px;">
            </div>
            <div class="sinsa-item-right">
              <div class="sinsa-item-text">
                <h3>優良店舗表彰</h3>
                <p>ユーザーの口コミを基に買取店の表彰を行っております。買取店は表彰される事で自社プロモーションに活用いただけるため、良質な口コミ獲得を目指し、最終的にユーザー満足度向上を行っております。</p>
                <div class="text-special">
                  <span>CTN Award</span>
                  <!-- <span class="text-special-tw">Examination</span> -->
                </div>
              </div>
            </div> 
          </div>
        </div>
        <div class="hot-word">
        <h3><span>今</span>話題の！</h3>
        <p>業界誌にも続々と掲載されております。</p>
        <div class="image d-flex">
        <img src="wp-content/themes/ctnkaitori//assets/img/banner1.png" loading="lazy">
        <img src="wp-content/themes/ctnkaitori//assets/img/banner2.png" loading="lazy" >
        </div>
        </div>
      </div>
      <!-- <img src="wp-content/themes/ctnkaitori/assets/img/home/chumoku.png" loading="lazy" class="chumoku">
      <p style="text-align:center;font-weight:bold;" class="setumei alpha">メディア掲載も続々と</p>
      <div class="flex se">
        <img src="wp-content/themes/ctnkaitori/assets/img/home/media1.jpg" loading="lazy"data-aos="fade-up" data-aos-delay="100"class="mediaimg">
        <img src="wp-content/themes/ctnkaitori/assets/img/home/media2.jpg" loading="lazy" data-aos="fade-up" data-aos-delay="100">
      </div> -->
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
              <img src="wp-content/themes/ctnkaitori/assets/img/home/check1.png" class="img-fluid" alt="">
              <h4>査定申し込み</h4>
              <div class="ico-rr"><img class="ico-rrr" src="wp-content/themes/ctnkaitori/assets/img/home/ico-r1.png"></div>
            </div>
          </div><!-- End Team Member -->
          <div class="col-xl-3 col-md-6 d-flex step-img" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="wp-content/themes/ctnkaitori/assets/img/home/check2.png" class="img-fluid" alt="">
              <h4>一括査定</h4>
              <div class="ico-rr"><img class="ico-rrr" src="wp-content/themes/ctnkaitori/assets/img/home/ico-r2.png"></div>
            </div>
          </div><!-- End Team Member -->
          <div class="col-xl-3 col-md-6 d-flex step-img" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="wp-content/themes/ctnkaitori/assets/img/home/check3.png" class="img-fluid" alt="">
              <h4>必要書類の準備</h4>
              <div class="ico-rr"><img class="ico-rrr" src="wp-content/themes/ctnkaitori/assets/img/home/ico-r3.png"></div>
            </div>
          </div><!-- End Team Member -->
          <div class="col-xl-3 col-md-6 d-flex step-img" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="wp-content/themes/ctnkaitori/assets/img/home/check4.png" class="img-fluid" alt="">
              <h4>ご入金</h4>
              <div class="ico-rr"><img class="ico-rrr" src="wp-content/themes/ctnkaitori/assets/img/home/ico-r4.png"></div>
            </div>
          </div><!-- End Team Member -->
        </div>
        </div>
      </div>
    </section><!-- End Our Team Section -->
    <section id="other-maker">
      <div class="inner maker">
      <h2 style="text-align:center;font-weight:bold">メーカーから買取相場を見る</h2>
        <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/line.png">
        <h3 class="maker-type-name">国産車</h3>
        <div class="maker-modal-content -flex">
      <ul class="maker-list">
      <a href="https://ctn-net.jp/kaitori/car/marketprice/lexus/"><li>
      <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/lexus.png">
      <p>レクサス</p>
      </li></a>
      <a href="https://ctn-net.jp/kaitori/car/marketprice/toyota/"><li>
      <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/toyota.png">
      <p>トヨタ</p>
      </li></a>
      <a href="https://ctn-net.jp/kaitori/car/marketprice/honnda/"><li>
      <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/honda.png">
      <p>ホンダ</p>
      </li></a>
      <a href="https://ctn-net.jp/kaitori/car/marketprice/nissan/"><li>
      <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/nissan.png">
      <p>日産</p>
      </li></a>
      <a href="https://ctn-net.jp/kaitori/car/marketprice/suzuki/"><li>
      <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/suzuki.png">
      <p>スズキ</p>
      </li></a>
      <a href="https://ctn-net.jp/kaitori/car/marketprice/daihatsu/"><li>
      <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/daihatsu.png">
      <p>ダイハツ</p>
      </li></a>
      <a href="https://ctn-net.jp/kaitori/car/marketprice/mazda/"><li>
      <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/matsuda.png">
      <p>マツダ</p>
      </li></a>
      <a href="https://ctn-net.jp/kaitori/car/marketprice/subaru/"> <li>
     <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/subaru.png">
      <p>スバル</p>
      </li></a>
      <a href="https://ctn-net.jp/kaitori/car/marketprice/mitsubishi/"><li>
    <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/mitsubishi.png">
      <p>三菱</p>
      </li></a>
      </ul>
      </div>
      <h3 class="maker-type-name">輸入車</h3>
        <div class="maker-modal-content -flex">
      <ul class="maker-list">
      <a href="https://ctn-net.jp/kaitori/car/marketprice/mercedes-benz/"><li>
      <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/benz.png">
      <p>メルセデス<br>ベンツ</p>
      </li></a>
      <a href="https://ctn-net.jp/kaitori/car/marketprice/bmw/"><li>
      <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/bmw.png">
      <p>BMW</p>
      </li></a>
      <a href="https://ctn-net.jp/kaitori/car/marketprice/volkswagen/"><li>
      <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/volkswagen.png">
      <p>フォルクス<br>ワーゲン</p>
      </li></a>
      <a href="https://ctn-net.jp/kaitori/car/marketprice/audi/"><li>
      <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/audi.png">
      <p>アウディ</p>
      </li></a>
      <a href="https://ctn-net.jp/kaitori/car/marketprice/miini/"><li>
      <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/mini.png">
      <p>ミニ</p>
      </li></a>
      <a href="https://ctn-net.jp/kaitori/car/marketprice/volvo/"><li>
      <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/volvo.png">
      <p>ボルボ</p>
      </li></a>
      <a href="https://ctn-net.jp/kaitori/car/marketprice/jeep/"> <li>
     <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/jeep.png">
      <p>ジープ</p>
      </li></a>
      <a href="https://ctn-net.jp/kaitori/car/marketprice/peugeot/"><li>
    <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/peugeot.png">
      <p>プジョー</p>
      </li></a>
      </ul>
      
      
            </div>
            <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/maker/">＞全てのメーカーから買取相場を探す</a></p>
        </div>
    
      </div>
    </section>

    <section id="car-list-icon" class="car-list-icon">
      <div class="inner maker">
        <div class="car-list-content">
          <h2 style="text-align:center;font-weight:bold">ボディタイプから買取相場を見る</h2>
          <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/line.png">
          <div class="car-list-detail">
            <div class="table-flex">
              <div class="cell">
                <a href="#">
                  <div class="icon">
                    <img alt="軽自動車" src="/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/1.png">
                  </div>
                  <div class="label">軽自動車</div>
                </a>    
              </div>
              <div class="cell">
                <a href="https://ctn-net.jp/kaitori/car/marketprice/compactcar/">
                  <div class="icon">
                    <img alt="コンパクトカー"src="/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/2.png">
                  </div>
                  <div class="label">コンパクトカー</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://ctn-net.jp/kaitori/car/marketprice/minivan-one-box/">
                  <div class="icon">
                    <img alt="ミニバン/ワンボックス" src="/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/3.png">
                  </div>
                  <div class="label">ミニバン・<br class="sp-b">ワンボックス</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://ctn-net.jp/kaitori/car/marketprice/stationwagon/">
                  <div class="icon">
                    <img alt="ステーションワゴン"src="/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/4.png">
                  </div>
                  <div class="label">ステーション<br class="sp-b">ワゴン</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://ctn-net.jp/kaitori/car/marketprice/suv-cross-country/">
                  <div class="icon">
                    <img alt="SUV・クロカン" src="/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/5.png">
                  </div>
                  <div class="label">SUV・クロカン</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://ctn-net.jp/kaitori/car/marketprice/sedan/">
                  <div class="icon">
                    <img alt="セダン" src="/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/6.png">
                  </div>
                  <div class="label">セダン</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://ctn-net.jp/kaitori/car/marketprice/campingcar/">
                  <div class="icon">
                    <img alt="キャンピングカー" src="/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/7.png">
                  </div>
                  <div class="label">キャンピングカー</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://ctn-net.jp/kaitori/car/marketprice/coupe/">
                  <div class="icon">
                    <img alt="クーペ" src="/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/8.png">
                  </div>
                  <div class="label">クーペ</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://ctn-net.jp/kaitori/car/marketprice/hatchback/">
                  <div class="icon">
                    <img alt="ハッチバック" src="/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/9.png">
                  </div>
                  <div class="label">ハッチバック</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://ctn-net.jp/kaitori/car/marketprice/opencar/">
                  <div class="icon">
                    <img alt="オープンカー" src="/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/10.png">
                  </div>
                  <div class="label">オープンカー</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://ctn-net.jp/kaitori/car/marketprice/pickup-truck/">
                  <div class="icon">
                    <img alt="ピックアップトラック" src="/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/14.png">
                  </div>
                  <div class="label">ピックアップ<br class="sp-b">トラック</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://ctn-net.jp/kaitori/car/marketprice/welfare-vehicles/">
                  <div class="icon">
                    <img alt="福祉車両" src="/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/11.png">
                  </div>
                  <div class="label">福祉車両</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://ctn-net.jp/kaitori/car/marketprice/commercialvehicle-van/">
                  <div class="icon">
                    <img alt="商用車・バン"src="/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/12.png">
                  </div>
                  <div class="label">商用車・バン</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://ctn-net.jp/kaitori/car/marketprice/truck-bus/">
                  <div class="icon">
                    <img alt="トラック・バス" src="/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/13.png">
                  </div>
                  <div class="label">トラック・バス</div>
                </a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

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
                  必要書類などご不明な点はカスタマーサポートにて準備から売却までお手伝いをさせていただきます。詳しくは<a href="https://ctn-net.jp/kaitori/car/column/car-purchase-flow-and-procedure/">「車を売るときの流れや手順を徹底解説！トラブルなく買取してもらうためには？」</a>
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
                  各種書類については<a href="https://ctn-net.jp/kaitori/car/column/car-purchase-required-documents/">「車の買取時に必要な書類は何？買取金額がアップする書類とは？」</a>
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
                  詳しくは<a href="https://ctn-net.jp/kaitori/car/column/car-purchase-on-loan/">「車の買取はローン中でも可能！ケース別に売却手順や方法を解説」</a>
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

    <!-- <section id="country-link" class="country-link">
      <div class="container" data-aos="fade-up">
        <div class="country-resize">
          <h2>車種別の高価相場をチェック</h2>
          <div class="country-detail">
            <ul>
              <li><img src="wp-content/uploads/2023/11/flgnh.png"><a href="#">国産車</a></li>
              <li><img src="wp-content/uploads/2023/11/flgus.png"><a href="#">ドイツ</a></li>
              <li><img src="wp-content/uploads/2023/11/flgus.png"><a href="#">イギリス</a></li>
              <li><img src="wp-content/uploads/2023/11/flgus.png"><a href="#">イタリア</a></li>
              <li><img src="wp-content/uploads/2023/11/flgus.png"><a href="#">アメリカ</a></li>
              <li><img src="wp-content/uploads/2023/11/flgus.png"><a href="#">フランス</a></li>
              <li><img src="wp-content/uploads/2023/11/flgus.png"><a href="#">その他</a></li>
            </ul>
          </div>
          <div class="country-link-detail">
            <ul>
              <li><a href="#">GMC</a></li>
              <li><a href="#">キャデラック</a></li>
              <li><a href="#">クライスラー</a></li>
              <li><a href="#">サターン</a></li>
              <li><a href="#">シボレー</a></li>
              <li><a href="#">ジープ</a></li>
              <li><a href="#">ダッジ</a></li>
              <li><a href="#">テスラ</a></li>
              <li><a href="#">ハマー</a></li>
              <li><a href="#">ビュイック</a></li>
              <li><a href="#">フォード</a></li>
              <li><a href="#">ポンテアック</a></li>
              <li><a href="#">マーキュリー</a></li>
              <li><a href="#">リンカーン</a></li>
              <li><a href="#">米国アキュラ</a></li>
              <li><a href="#">米国インフィニティ</a></li>
              <li><a href="#">米国スバル</a></li>
              <li><a href="#">米国トヨタ</a></li>
              <li><a href="#">米国ホンダ</a></li>
              <li><a href="#">米国レクサス</a></li>
              <li><a href="#">米国日産</a></li>
              <li><a href="#">KTM</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section> -->

    <!-- ======= Our Team Section ======= -->
    <!-- <section id="area" class="area-section">
      <div class="container" data-aos="fade-up">
        <h2>高価買取店を地域から探す</h2>
        <div class="area-section-inner sp-non">
          <ul>
            <li>北海道/東北地方</li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-hokkaido/">北海道</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-aomori/">青森県</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-iwate/">岩手県</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-akita/">秋田県</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-miyagi/">宮城県</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-yamagata/">山形県</a></li>
            <li><a href="">福島県</a></li>
          </ul>
          <ul>
            <li>関東地方</li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-tokyo/">東京都</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-kanagawa/">神奈川県</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-saitama/">埼玉県</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-chiba/">千葉県</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-ibaraki/">茨城県</a></li>
            <li><a href="">栃木県</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-gunma/">群馬県</a></li>
          </ul>
          <ul>
            <li>北陸/甲信越地方</li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-niigata/">新潟県</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-yamanashi/">山梨県</a></li>
            <li><a href="">長野県</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-toyama/">富山県</a></li>
            <li><a href="">石川県</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-hukui/">福井県</a></li>
          </ul>
          <ul>
            <li>北東海地方</li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-aichi/">愛知県</a></li>
            <li><a href="">岐阜県</a></li>
            <li><a href="">静岡県</a></li>
            <li><a href="">三重県</a></li>
          </ul>
          <ul>
            <li>近畿地方</li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-osaka/">大阪府</a></li>
            <li><a href="">兵庫県</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-kyoto/">京都府</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-nara/">奈良県</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-shiga/">滋賀県</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-wakayama/">和歌山県</a></li>
          </ul>
          <ul>
            <li>中国地方</li>
            <li><a href="">山口県</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-hiroshima/">広島県</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-okayama/">岡山県</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-tottori/">鳥取県</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-shimane/">島根県</a></li>
          </ul>
          <ul>
            <li>四国地方</li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-tokushima/">徳島県</a></li>
            <li><a href="">香川県</a></li>
            <li><a href="">愛媛県</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-kouchi/">高知県</a></li>
          </ul>
          <ul>
            <li>九州地方/沖縄</li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-fukuoka/">福岡県</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-saga/">佐賀県</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-nagasaki/">長崎県</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-kumamoto/">熊本県</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-ooita/">大分県</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-miyazaki/">宮崎県</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-kagoshima/">鹿児島県</a></li>
            <li><a href="https://ctn-net.jp/kaitori/car/column/area-okinawa/">沖縄県</a></li>
          </ul>
        </div>
        <div class="sp-block">
          <div class="details js-details">
  	       <summary class="details-summary js-details-summary"><span class="btn"></span>北海道/東北地方</summary>
          	<div class="details-content js-details-content">
          		<a href="https://ctn-net.jp/kaitori/car/column/area-hokkaido/"><p>北海道</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-aomori/"><p>青森県</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-iwate/"><p>岩手県</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-akita/"><p>秋田県</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-miyagi/"><p>宮城県</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-yamagata/"><p>山形県</p></a>
              <a href=""><p>福島県</p></a>
          	</div>
          </div>
          <div class="details js-details">
          	<summary class="details-summary js-details-summary"><span class="btn"></span>関東地方</summary>
          	<div class="details-content js-details-content">
              <a href="https://ctn-net.jp/kaitori/car/column/area-tokyo/"><p>東京都</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-kanagawa/"><p>神奈川県</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-saitama/"><p>埼玉県</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-chiba/"><p>千葉県</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-ibaraki/"><p>茨城県</p></a>
              <a href=""><p>栃木県</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-gunma/"><p>群馬県</p></a>
          	</div>
          </div>
          <div class="details js-details">
          	<summary class="details-summary js-details-summary"><span class="btn"></span>北陸/甲信越地方</summary>
          	<div class="details-content js-details-content">
            <a href="https://ctn-net.jp/kaitori/car/column/area-niigata/"><p>新潟県</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-yamanashi/"><p>山梨県</p></a>
              <a href=""><p>長野県</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-toyama/"><p>富山県</p></a>
              <a href=""><p>石川県</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-hukui/"><p>福井県</p></a>
          	</div>
          </div>
          <div class="details js-details">
          	<summary class="details-summary js-details-summary"><span class="btn"></span>東海地方</summary>
          	<div class="details-content js-details-content">
            <a href="https://ctn-net.jp/kaitori/car/column/area-aichi/"><p>愛知県</p></a>
              <a href=""><p>岐阜県</p></a>
              <a href=""><p>静岡県</p></a>
              <a href=""><p>三重県</p></a>
          	</div>
          </div>
          <div class="details js-details">
          	<summary class="details-summary js-details-summary"><span class="btn"></span>近畿地方</summary>
          	<div class="details-content js-details-content">
            <a href="https://ctn-net.jp/kaitori/car/column/area-osaka/"><p>大阪府</p></a>
              <a href=""><p>兵庫県</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-kyoto/"><p>京都府</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-nara/"><p>奈良県</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-shiga/"><p>滋賀県</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-wakayama/"><p>和歌山県</p></a>
          	</div>
          </div>
          <div class="details js-details">
          	<summary class="details-summary js-details-summary"><span class="btn"></span>中国地方</summary>
          	<div class="details-content js-details-content">
            <a href=""><p>山口県</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-hiroshima/"><p>広島県</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-okayama/"><p>岡山県</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-tottori/"><p>鳥取県</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-shimane/"><p>島根県</p></a>
          	</div>
          </div>
          <div class="details js-details">
          	<summary class="details-summary js-details-summary"><span class="btn"></span>四国地方</summary>
          	<div class="details-content js-details-content">
              <a href="https://ctn-net.jp/kaitori/car/column/area-tokushima/"><p>徳島県</p></a>
              <a href=""><p>香川県</p></a>
              <a href=""><p>愛媛県</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-kouchi/"><p>高知県</p></a>
          	</div>
          </div>
          <div class="details js-details">
          	<summary class="details-summary js-details-summary"><span class="btn"></span>九州地方/沖縄</summary>
          	<div class="details-content js-details-content">
            <a href="https://ctn-net.jp/kaitori/car/column/area-fukuoka/"><p>福岡県</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-saga/"><p>佐賀県</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-nagasaki/"><p>長崎県</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-ooita/"><p>大分県</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-kumamoto/"><p>熊本県</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-miyazaki/"><p>宮崎県</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-kagoshima/"><p>鹿児島県</p></a>
              <a href="https://ctn-net.jp/kaitori/car/column/area-okinawa/"><p>沖縄県</p></a>
          	</div>
          </div>
        </div>
      </div>
    </section> -->
  </main><!-- End #main -->


  <?php get_footer(); ?>