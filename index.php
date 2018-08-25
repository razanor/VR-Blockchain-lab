<!DOCTYPE html>
<html>
<head>
     <title>Art BlockChain lab</title>
     <meta charset="UTF-8">
     <script src="https://aframe.io/releases/0.7.0/aframe.min.js"></script>
     <script src="https://unpkg.com/aframe-event-set-component@^4.0.0/dist/aframe-event-set-component.min.js"></script>
     <script src="js/cursor-listener.js"></script>
     <script src="js/data.js"></script>
     <link rel="stylesheet" href="css/preload.css">
</head>
<body>
<div class="container">
    <div class="dash uno"></div>
    <div class="dash dos"></div>
    <div class="dash tres"></div>
    <div class="dash cuatro"></div>
</div>
<a-scene id="scene" visible="false" vr-mode-ui="enabled: false">
  <!-- Assets Management System -->
  <a-assets>
    <a-asset-item id="museum" src="museum.gltf"></a-asset-item>
      <img id="exit-icon" src="error.png">
    <img id="sky_sphere-texture" src="https://img.gs/bbdkhfbzkk/2048x2048,stretch/http://i.imgur.com/WqlqEkq.jpg" crossorigin="anonymous">
    <img id="img0"  src="images/rsz__mg_6656.jpg">
    <img id="img1"  src="images/rsz__mg_6657.jpg">
    <img id="img2"  src="images/rsz_Астиан_Рей.jpg">
    <img id="img3"  src="images/rsz_Віктор_Рубанський.jpg">
    <img id="img4"  src="images/rsz_Володимир_Свачій.jpg">
    <img id="img5"  src="images/rsz_Ганна_Аушева.jpg">
    <img id="img6"  src="images/rsz_Ганна_Бітаєва.jpg">
    <img id="img7"  src="images/rsz_Дарина_Момот.jpg">
    <img id="img8"  src="images/rsz_Єлизавета_Пінчук.jpg">
    <img id="img9"  src="images/rsz_Займак.jpg">
    <img id="img10" src="images/rsz_Ігор_Степанов.jpg">
    <img id="img11" src="images/rsz_1Катерина_Репа.jpg">
    <img id="img12" src="images/rsz_Кулайчук.jpg">
    <img id="img13" src="images/rsz_Лідія_Селянко.jpg">
    <img id="img14" src="images/rsz_Максим_Скворцов.jpg">
    <img id="img15" src="images/rsz_Маріанна_Абрамова.jpg">
    <img id="img16" src="images/rsz_Маркин.jpg">
    <img id="img17" src="images/rsz_Наталя_Корф-Іванюк.jpg">
    <img id="img18" src="images/rsz_Оксана_Чепелик.jpg">
    <img id="img19" src="images/rsz_Олексій_Середа.jpg">
    <img id="img20" src="images/rsz_Олена_Мосієвич.jpg">
    <img id="img21" src="images/rsz_Ольга_Гуріна.jpg">
    <img id="img22" src="images/rsz_Пинчук_Н.jpg">
    <img id="img23" src="images/rsz_Поліна_Щербина.jpg">
    <img id="img24" src="images/rsz_Радислав_Дзюба.jpg">
    <img id="img25" src="images/rsz_Сергій_Думік_та_Юрій_Фракталіс.jpg">
    <img id="img26" src="images/rsz_Сергій_Філоненко.jpg">
    <img id="img27" src="images/rsz_Слойко_Софія1.jpg">
    <img id="img28" src="images/rsz_Слойко_Софія2.jpg">
    <img id="img29" src="images/rsz_Терещенко_Апостол.jpg">
    <img id="img30" src="images/rsz_Терещенко_Віра.jpg">
  </a-assets>
  <!-- Museum model -->
  <a-gltf-model src="#museum" position="-20.374 0 12.194" scale="0.9 0.9 0.9">
    <!-- Images collaction -->
    <a-image src="#img0" width="3.448" height="5.172" position="15.918 3.483 -25.544" scale="1 1 1" cursor-enter>
             <a-text id="author0" visible="false" position="1.653 3.121 0"></a-text>
             <a-text id="text0" height="7" width="4" align="center" visible="false" position="3.798 0 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close0" cursor-close position="19.591 1.746 -25.565" width="0.5" height="0.5" visible="false">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 0 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img1" width="3.448" height="5.172" position="23.685 3.483 -25.544" scale="1 1 1" cursor-enter>
             <a-text id="author0" visible="false" position="1.653 3.121 0"></a-text>
             <a-text id="text0" height="7" width="4" align="center" visible="false" position="3.798 0 0"></a-text>
    </a-image>
    <a-image src="#img2" width="3.448" height="5.172" position="33.295 3.483 -25.544" scale="1 1 1" cursor-enter>
             <a-text id="author1" visible="false" position="2.018 2.573 0"></a-text>
             <a-text id="text1" height="7" width="4" align="center" visible="false" position="3.798 0 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close1" cursor-close position="37.244 1.124 -25.565" width="0.5" height="0.5" visible="false">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 0 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img3" width="3.448" height="5.172" position="41.041 3.483 -25.544" scale="1 1 1" cursor-enter>
             <a-text id="author2" visible="false" position="-5.520 2.573 0"></a-text>
             <a-text id="text2" height="7" width="4" align="center" visible="false" position="-3.787 1.178 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close2" cursor-close position="37.244 3.325 -25.565" width="0.5" height="0.5" visible="false">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 0 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img4" width="3.448" height="5.172" position="43.645 3.483 -22.579" scale="1 1 1" rotation="0 -90 0" cursor-enter>
             <a-text id="author3" visible="false" position="3.727 3.125 0" align="center"></a-text>
             <a-text id="text3" height="7" width="4" align="center" visible="false" position="3.800 0.287 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close3" cursor-close position="43.578 1.601 -18.975" width="0.5" height="0.5" visible="false" rotation="0 -90 0">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 -90 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img5" width="3.448" height="5.172" position="43.645 3.483 -15.028" scale="1 1 1" rotation="0 -90 0" cursor-enter>
            <a-text id="author4" visible="false" position="2.666 2.573 0"></a-text>
            <a-text id="text4" height="7" width="4" align="center" visible="false" position="3.800 0.287 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close4" cursor-close position="43.648 2.216 -11.445" width="0.5" height="0.5" visible="false" rotation="0 -90 0">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 -90 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img6" width="3.448" height="5.172" position="43.645 3.483 -7.482" scale="1 1 1" rotation="0 -90 0" cursor-enter>
            <a-text id="author5" visible="false" position="-5.222 2.573 0"></a-text>
            <a-text id="text5" height="7" width="4" align="center" visible="false" position="-3.814 0.287 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close5" cursor-close position="43.648 2.216 -11.445" width="0.5" height="0.5" visible="false" rotation="0 -90 0">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 -90 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img7" width="3.448" height="5.172" position="24.742 3.483 -1.849" scale="1 1 1" rotation="0 -180 0" cursor-enter>
            <a-text id="author6" visible="false" position="-5.725 2.573 0"></a-text>
            <a-text id="text6" height="7" width="4" align="center" visible="false" position="-3.814 0.287 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close6" cursor-close position="28.419 2.003 -1.830" width="0.5" height="0.5" visible="false" rotation="0 -180 0">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 -180 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img8" width="3.448" height="5.172" position="32.271 3.483 -1.849" scale="1 1 1" rotation="0 -180 0" cursor-enter>
            <a-text id="author7" visible="false" position="-5.725 3.492 0"></a-text>
            <a-text id="text7" height="7" width="4" align="center" visible="false" position="-3.814 0.287 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close7" cursor-close position="36.144 0.802 -1.830" width="0.5" height="0.5" visible="false" rotation="0 -180 0">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 -180 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img9" width="3.448" height="5.172" position="40.016 3.483 -1.849" scale="1 1 1" rotation="0 -180 0" cursor-enter>
            <a-text id="author8" visible="false" position="2.379 3.492 0"></a-text>
            <a-text id="text8" height="7" width="4" align="center" visible="false" position="3.889 0.287 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close8" cursor-close position="36.144 1.532 -1.830" width="0.5" height="0.5" visible="false" rotation="0 -180 0">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 -180 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img10" width="4.355" height="3.451" position="37.536 3.554 -26.781" scale="1 1 1" rotation="0 180 0" cursor-enter>
            <a-text id="author9" visible="false" position="2.508 2.816 0"></a-text>
            <a-text id="text9" height="7" width="4" align="center" visible="false" position="4.700 0.287 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close9" cursor-close position="32.868 2.098 -26.663" width="0.5" height="0.5" visible="false" rotation="0 -180 0">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 -180 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img11" width="3.448" height="5.172" position="19.587 3.483 -50.767" scale="1 1 1" rotation="0 0 0" cursor-enter>
            <a-text id="author10" visible="false" position="-1.313 3.186 0"></a-text>
            <a-text id="text10" height="7" width="4" align="center" visible="false" position="4.083 0.287 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close10" cursor-close position="23.516 1.625 -50.800" width="0.5" height="0.5" visible="false">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 0 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img12" width="3.448" height="5.172" position="36.846 3.483 -50.767" scale="1 1 1" rotation="0 0 0" cursor-enter>
            <a-text id="author11" visible="false" position="-2.047 3.186 0"></a-text>
            <a-text id="text11" height="7" width="4" align="center" visible="false" position="-3.922 0.287 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close11" cursor-close position="32.907 1.625 -50.800" width="0.5" height="0.5" visible="false">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 0 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img13" width="4.355" height="3.451" position="19.414 3.554 -26.781" scale="1 1 1" rotation="0 180 0" cursor-enter>
            <a-text id="author12" visible="false" position="-5.690 2.816 0"></a-text>
            <a-text id="text12" height="7" width="4" align="center" visible="false" position="-4.556 0.287 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close12" cursor-close position="23.881 2.259 -26.663" width="0.5" height="0.5" visible="false" rotation="0 -180 0">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 -180 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img14" width="3.448" height="5.172" position="43.645 3.663 -39.849" scale="1 1 1" rotation="0 -90 0" cursor-enter>
            <a-text id="author13" visible="false" position="-6.057 3.300 0"></a-text>
            <a-text id="text13" height="7" width="4" align="center" visible="false" position="-3.794 0.287 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close13" cursor-close position="43.640 2.059 -43.715" width="0.5" height="0.5" visible="false" rotation="0 -90 0">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 -90 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img15" width="3.448" height="5.172" position="43.645 3.663 -47.362" scale="1 1 1" rotation="0 -90 0" cursor-enter cursor-leave>
            <a-text id="author14" visible="false" position="1.879 3.300 0"></a-text>
            <a-text id="text14" height="7" width="4" align="center" visible="false" position="3.736 0.287 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close14" cursor-close position="43.640 1.704 -43.715" width="0.5" height="0.5" visible="false" rotation="0 -90 0">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 -90 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img16" width="3.448" height="5.172" position="43.645 3.663 -32.216" scale="1 1 1" rotation="0 -90 0" cursor-enter cursor-leave>
            <a-text id="author15" visible="false" position="-6.065 3.300 0"></a-text>
            <a-text id="text15" height="7" width="4" align="center" visible="false" position="-3.794 0.287 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close15" cursor-close position="43.640 2.319 -36.023" width="0.5" height="0.5" visible="false" rotation="0 -90 0">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 -90 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img17" width="3.448" height="5.172" position="13.281 3.663 -29.804" scale="1 1 1" rotation="0 90 0" cursor-enter cursor-leave>
            <a-text id="author16" visible="false" position="1.658 3.300 0"></a-text>
            <a-text id="text16" height="7" width="4" align="center" visible="false" position="3.769 0.287 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close16" cursor-close position="13.253 2.319 -33.453" width="0.5" height="0.5" visible="false" rotation="0 -90 0">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 -90 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img18" width="3.448" height="5.172" position="13.281 3.663 -45.336" scale="1 1 1" rotation="0 90 0" cursor-enter cursor-leave>
            <a-text id="author17" visible="false" position="-5.537 3.300 0"></a-text>
            <a-text id="text17" height="7" width="4" align="center" visible="false" position="-3.949 -0.046 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close17" cursor-close position="13.253 0.513 -41.333" width="0.5" height="0.5" visible="false" rotation="0 -90 0">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 -90 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img19" width="3.448" height="5.172" position="13.281 3.663 -37.472" scale="1 1 1" rotation="0 90 0" cursor-enter cursor-leave>
            <a-text id="author18" visible="false" position="-5.309 3.300 0"></a-text>
            <a-text id="text18" height="7" width="4" align="center" visible="false" position="-3.794 0.287 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close18" cursor-close position="13.253 1.791 -33.534" width="0.5" height="0.5" visible="false" rotation="0 -90 0">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 -90 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img20" width="3.448" height="5.172" position="20.521 3.554 -51.904" scale="1 1 1" rotation="0 180 0" cursor-enter cursor-leave>
            <a-text id="author19" visible="false" position="-5.859 3.300 0"></a-text>
            <a-text id="text19" height="7" width="4" align="center" visible="false" position="-3.794 0.287 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close19" cursor-close position="24.264 2.106 -51.882" width="0.5" height="0.5" visible="false" rotation="0 -180 0">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 -180 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img21" width="3.448" height="5.172" position="40.866 3.554 -51.904" scale="1 1 1" rotation="0 180 0" cursor-enter cursor-leave>
            <a-text id="author20" visible="false" position="1.812 3.300 0"></a-text>
            <a-text id="text20" height="7" width="4" align="center" visible="false" position="3.837 0.287 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close20" cursor-close position="37.019 1.692 -51.882" width="0.5" height="0.5" visible="false" rotation="0 -180 0">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 -180 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img22" width="3.448" height="5.172" position="33.155 3.554 -51.904" scale="1 1 1" rotation="0 180 0" cursor-enter cursor-leave>
            <a-text id="author21" visible="false" position="-5.369 3.300 0"></a-text>
            <a-text id="text21" height="7" width="4" align="center" visible="false" position="-3.848 0.287 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close21" cursor-close position="37.019 1.692 -51.882" width="0.5" height="0.5" visible="false" rotation="0 -180 0">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 -180 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img23" width="3.448" height="5.172" position="43.645 3.663 -58.223" scale="1 1 1" rotation="0 -90 0" cursor-enter cursor-leave>
            <a-text id="author22" visible="false" position="-7.165 3.300 0"></a-text>
            <a-text id="text22" height="7" width="4" align="center" visible="false" position="-5.009 0.287 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close22" cursor-close position="43.640 2.567 -63.412" width="0.5" height="0.5" visible="false" rotation="0 -90 0">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 -90 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img24" width="3.448" height="5.172" position="43.645 3.663 -68.077" scale="1 1 1" rotation="0 -90 0" cursor-enter cursor-leave>
            <a-text id="author23" visible="false" position="3.430 3.300 0"></a-text>
            <a-text id="text23" height="7" width="4" align="center" visible="false" position="4.744 0.287 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close23" cursor-close position="43.640 2.567 -63.412" width="0.5" height="0.5" visible="false" rotation="0 -90 0">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 -90 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img25" width="3.448" height="5.172" position="13.281 3.663 -70.035" scale="1 1 1" rotation="0 90 0" cursor-enter cursor-leave>
            <a-text id="author24" visible="false" position="-6.155 3.300 0"></a-text>
            <a-text id="text24" height="7" width="4" align="center" visible="false" position="-3.930 0.287 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close24" cursor-close position="13.253 2.442 -66.046" width="0.5" height="0.5" visible="false" rotation="0 -90 0">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 -90 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img26" width="3.448" height="5.172" position="17.226 3.483 -73.700" scale="1 1 1" rotation="0 0 0" cursor-enter cursor-leave>
            <a-text id="author25" visible="false" position="2.814 3.300 0"></a-text>
            <a-text id="text25" height="7" width="4" align="center" visible="false" position="4.220 0.287 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close25" cursor-close position="21.388 2.223 -73.700" width="0.5" height="0.5" visible="false">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 0 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img27" width="3.448" height="5.172" position="13.281 3.663 -62.228" scale="1 1 1" rotation="0 90 0" cursor-enter cursor-leave>
            <a-text id="author26" visible="false" position="-5.351 3.672 0"></a-text>
            <a-text id="text26" height="7" width="4" align="center" visible="false" position="-3.843 0.102 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close26" cursor-close position="13.253 0.435 -58.404" width="0.5" height="0.5" visible="false" rotation="0 -90 0">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 -90 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img28" width="3.448" height="5.172" position="13.281 3.663 -54.520" scale="1 1 1" rotation="0 90 0" cursor-enter cursor-leave>
            <a-text id="author26" visible="false" position="-5.351 3.672 0"></a-text>
            <a-text id="text26" height="7" width="4" align="center" visible="false" position="-3.843 0.102 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close26" cursor-close position="13.253 0.435 -58.404" width="0.5" height="0.5" visible="false" rotation="0 -90 0">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 -90 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img29" width="3.448" height="5.172" position="25.738 3.483 -73.700" scale="1 1 1" rotation="0 0 0" cursor-enter cursor-leave>
            <a-text id="author27" visible="false" position="-6.417 3.300 0"></a-text>
            <a-text id="text27" height="7" width="4" align="center" visible="false" position="-4.309 0.287 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close27" cursor-close position="21.388 2.223 -73.700" width="0.5" height="0.5" visible="false">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 0 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <a-image src="#img30" width="3.448" height="5.172" position="35.336 3.483 -73.700" scale="1 1 1" rotation="0 0 0" cursor-enter cursor-leave>
            <a-text id="author28" visible="false" position="-6.705 3.300 0"></a-text>
            <a-text id="text28" height="7" width="4" align="center" visible="false" position="-4.748 0.287 0"></a-text>
    </a-image>
      <a-image src="#exit-icon" id="close28" cursor-close position="30.609 2.474 -73.700" width="0.5" height="0.5" visible="false">
          <a-animation attribute="rotation"
                       dur="1000"
                       fill="forwards"
                       to="0 0 360"
                       repeat="indefinite"></a-animation>
      </a-image>
    <!-- Select language text -->
      <a-text position="13.307 5.167 -9.648" rotation="0 90 0" value="Choose language" width="15" color="#351252">
          <a-animation id="choose-lan" attribute="color"
                       dur="500"
                       fill="forwards"
                       to="#FF4C4C"
                       repeat="indefinite"></a-animation>
      </a-text>
    <a-plane cursor-ukrainian opacity="0" position="13.307 4.315 -9.841" rotation="0 90 0" width="1.7">
      <a-text id="ukrainian" value="Ukrainian" position="-0.758 0 0" width="8"></a-text>
    </a-plane>
    <a-plane cursor-english opacity="0" position="13.307 4.315 -14.597" rotation="0 90 0" width="1.7">
      <a-text id="english" value="English" position="-0.758 0 0" width="8"></a-text>
    </a-plane>
    </a-gltf-model>

  <!-- Sky primitive -->
  <a-sky color="#EEEEFF" material="src: #sky_sphere-texture"></a-sky>
  <!-- Camera primitive -->
    <a-camera id="camera" position="-1.460 0.420 1.680" rotation="1.375 90 0">
        <!-- Cursor Component -->
        <a-entity cursor position="0 0 -1"
                  geometry="primitive: sphere; radius: 0.005"
                  material="color: #AA0000; shader: flat; opacity: 0.6">
        </a-entity>
    </a-camera>
    <!--Light component   -->
  <a-light type="ambient" color="#ffffff" intensity="0.700"></a-light>
    <!-- Check points  -->
    <a-cylinder radius="0.3" height="0.06" position="-5.824 -0.250 -6.078" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: -5.824 2.020 -6.078">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="1.116 -0.250 -6.078" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: 1.116 2.020 -6.078">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="9.448 -0.250 -6.078" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: 9.448 2.020 -6.078">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="16.515 -0.250 -6.078" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: 16.515 2.020 -6.078">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="14.618 -0.250 -8.099" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: 14.618 2.020 -8.099">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="14.618 -0.250 -1.595" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: 14.618 2.020 -1.595">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="14.618 -0.250 5.436" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: 14.618 2.020 5.436">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="1.914 -0.250 5.436" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: 1.914 2.020 5.436">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="8.457 -0.250 5.436" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: 8.457 2.020 5.436">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="13.424 -0.250 -15.777" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: 13.424 2.020 -15.777">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="5.251 -0.250 -11.360" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: 5.251 2.020 -11.360">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="-3.035 -0.250 -15.777" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: -3.035 2.020 -15.777">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="-4.669 -0.250 -14.432" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: -4.669 2.020 -14.432">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="-4.669 -0.250 -21.458" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: -4.669 2.020 -21.458">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="-4.669 -0.250 -28.778" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: -4.669 2.020 -28.778">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="5.251 -0.250 -21.640" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: 5.251 2.020 -21.640">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="5.251 -0.250 -34.127" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: 5.251 2.020 -34.127">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="5.251 -0.250 -43.112" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: 5.251 2.020 -43.112">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="-2.779 -0.250 -29.328" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: -2.779 2.020 -29.328">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="13.008 -0.250 -29.377" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: 13.008 2.020 -29.377">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="15.057 -0.250 -23.891" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: 15.057 2.020 -23.891">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="15.057 -0.250 -30.118" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: 15.057 2.020 -30.118">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="15.057 -0.250 -16.787" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: 15.057 2.020 -16.787">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="16.193 -0.250 -38.177" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: 16.193 2.020 -38.177">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="9.612 -0.250 -38.177" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: 9.612 2.020 -38.177">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="14.785 -0.250 -49.087" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: 14.785 2.020 -49.087">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="14.785 -0.250 -39.584" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: 14.785 2.020 -39.584">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="-4.231 -0.250 -36.700" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: -4.231 2.020 -36.700">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="-4.231 -0.250 -43.151" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: -4.231 2.020 -43.151">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="-4.231 -0.250 -50.237" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: -4.231 2.020 -50.237">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="-1.844 -0.250 -38.177" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: -1.844 2.020 -38.177">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="2.905 -0.250 -50.237" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: 2.905 2.020 -50.237">
    </a-cylinder>
    <a-cylinder radius="0.3" height="0.06" position="11.480 -0.250 -50.237" color="#351252"
                event-set__teleport="_event: click; _target: #camera; position: 11.480 2.020 -50.237">
    </a-cylinder>

</a-scene>
<script>
    var scene = document.getElementById('scene');
    var preload = document.getElementsByClassName('container')[0];
    window.addEventListener('load', function () {
        preload.style.display = 'none';
        scene.setAttribute('visible', 'true');
        scene.setAttribute('vr-mode-ui', 'enabled: true')
    })
</script>
</body>
</html>
