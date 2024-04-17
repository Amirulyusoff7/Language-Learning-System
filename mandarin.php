<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
      <style>
      * {
      box-sizing: border-box;
      }
      html, body {
      padding: 0;
      margin: 0;
      height: 100vh;
      }

      body {
      background: #203239;
      width: 100%;
      height: 200px;
      background-image: url("img/bg2.png");
      background-size: cover;
      background-position: center;
      }

      .image {
      max-width: 50%;
      max-height: 50%;
      object-fit: cover;
      }

      .column{
        float: left;
        width: 33.33%;
        padding: 10px;
      }

      /* Center website */
      .main {
      max-width: 1000px;
      margin: auto;
      }

      h1 {
      font-size: 50px;
      word-break: break-all;
      text-align: center;
      color: #F36D6D;
      }

      .row {
      margin: 10px -16px;
      }

      /* Add padding BETWEEN each column */
      .row,
      .row > .column {
      padding: 8px;
      }

      /* Create three equal columns that floats next to each other */
      .column {
      float: left;
      width: 30.50%;
      display: none; /* Hide all elements by default */
      }

      /* Clear floats after rows */ 
      .row:after {
      content: "";
      display: table;
      clear: both;
      }

      /* Content */
      .content {
      background-color: white;
      padding: 5px;
      font-size: 25px
      }

      /* The "show" class is added to the filtered elements */
      .show {
      display: block;
      }

      /* Style the buttons */
      .btn {
      border-color : #ff9800;
      color: red;
      outline: none;
      padding: 14px 28px;
      font-size: 45.57px;
      background-color: white;
      /*cursor: pointer*/;
      }

      .btn:hover {
      background-color: #ff9800;
      color: white;
      }

      .btn.active {
      background-color: #666;
      color: white;
      }
</style>
</head>
      <body>
        <h1>Name Of Fruit In Mandarin</h1>
      
            <!-- MAIN (Center website) -->
            <div class="main">


          <div id="myBtnContainer">

          <!-- <button class="btn" onclick="filterSelection('melayu')"> Melayu</button>
          <button class="btn" onclick="filterSelection('english')"> English</button>
          <button class="btn" onclick="filterSelection('mandarin')"> Mandarin</button>
          </div> -->
          <!-- <ul>
            <li><a href="all.php">Show All</a></li>
           <li><a href="melayu.php">Melayu</a></li>
            <li><a href="english.php">English</a></li>
           <li><a href="mandarin.php">Mandarin</a></li>
          </ul> -->

          <div class="mandarin">
           <div class="column english">
            <div class="content">
              <img src="img/kiwi.png" alt="Grape" style="width:100%">
             <button style='font-size:24px' onclick="playSound1()">Click</button>
             <h2>奇异果</h2>
             <p>Qíyì guǒ </p>
            </div>
          </div>
            <script>
                function playSound1(){
               var audio = new Audio('audiomandarin/kiwiM.mp3');
               audio.play();}
           </script>


           <div class="column mandarin">
            <div class="content">
             <img src="img/betik.png" alt="Papaya" style="width:100%">
               <button style='font-size:24px' onclick="playSound2()">Click</button>
                <h2>木瓜</h2>
                <p> Mùguā</p>
                </div>
                </div>
                  <script>
                    function playSound2(){
                    var audio = new Audio('audiomandarin/betikM.mp3');
                    audio.play();}
                  </script>


            <div class="column english">
              <div class="content">
                <img src="img/durian.png" alt="Durian" style="width:100%">
                  <button style='font-size:24px' onclick="playSound3()">Click</button>
                    <h2>榴莲</h2>
                    <p> Liúlián</p>
                </div>
                  </div>
                  <script>
                    function playSound3(){
                    var audio = new Audio('audiomandarin/durianM.mp3');
                    audio.play();}
                  </script>

            <div class="row">
              <div class="column english">
                <div class="content">
                  <img src="img/epal.png" alt="Apple" style="width:100%">
                    <button style='font-size:24px' onclick="playSound4()">Click</button>
                      <h2>苹果</h2>
                      <p> Píngguǒ</p>
                  </div>
                   </div>
                  <script>
                  function playSound4(){
                    var audio = new Audio('audiomandarin/apleM.mp3');
                    audio.play();}
                </script>

              <div class="column english">
                <div class="content">
                <img src="img/mangga.png" alt="Mango" style="width:100%">
                <button style='font-size:24px' onclick="playSound5()">Click</button>
                  <h2>芒果</h2>
                  <p>Mángguǒ </p>
                </div>
              </div>
              <script>
                  function playSound5(){
                    var audio = new Audio('audiomandarin/mangoM.mp3');
                    audio.play();}
              </script>


              <div class="column english">
                <div class="content">
                <img src="img/naga.png" alt="Dragon" style="width:100%">
                <button style='font-size:24px' onclick="playSound6()">Click</button>
                  <h2>火龙果</h2>
                  <p>Huǒlóng guǒ</p>
                </div>
              </div>
              <script>
                  function playSound6(){
                    var audio = new Audio('audiomandarin/nagaM.mp3');
                    audio.play();}
              </script>


              <div class="column english">
                <div class="content">
                <img src="img/pisang.png" alt="Banana" style="width:100%">
                <button style='font-size:24px' onclick="playSound7()">Click</button>
                  <h2>香蕉</h2>
                  <p> Xiāngjiāo </p>
                </div>
              </div>
              <script>
                  function playSound7(){
                    var audio = new Audio('audiomandarin/pisangM.mp3');
                    audio.play();}
              </script>

              <div class="column english">
              <div class="content">
                <img src="img/delima.png" alt="Pomegranate" style="width:100%">
                <button style='font-size:24px' onclick="playSound9()">Click</button>
                <h2>石榴</h2>
                <p>Shíliú </p>
              </div>
            </div>
            <script>
                  function playSound9(){
                    var audio = new Audio('audiomandarin/delimaM.mp3');
                    audio.play();}
              </script>

              <div class="column english">
              <div class="content">
                <img src="img/belimbing.png" alt="Starfruit" style="width:100%">
                <button style='font-size:24px' onclick="playSound10()">Click</button>
                <h2>杨桃</h2>
                <p>Yángtáo </p>
              </div>
            </div>
            <script>
                  function playSound10(){
                    var audio = new Audio('audiomandarin/belimbingM.mp3');
                    audio.play();}
              </script>

              <div class="column english">
                <div class="content">
                <img src="img/jambu.png" alt="Guava" style="width:100%">
                <button style='font-size:24px' onclick="playSound11()">Click</button>
                  <h2>番石榴</h2>
                  <p>Fān shíliú </p>
                </div>
              </div>
              <script>
                  function playSound11(){
                    var audio = new Audio('audiomandarin/jambu_batuM.mp3');
                    audio.play();}
              </script>

              <div class="column english">
                <div class="content">
                <img src="img/nenas.png" alt="Pineapple" style="width:100%">
                <button style='font-size:24px' onclick="playSound12()">Click</button>
                  <h2>黄梨</h2>
                  <p>Huáng lí </p>
                </div>
              </div>
              <script>
                  function playSound12(){
                    var audio = new Audio('audiomandarin/nenasM.mp3');
                    audio.play();}
              </script>


              <div class="column english">
                <div class="content">
                <img src="img/manggis.png" alt="Mangosteen" style="width:100%">
                <button style='font-size:24px' onclick="playSound13()">Click</button>
                  <h2>山竹</h2>
                  <p>Shānzhú   </p>
                </div>
              </div>
              <script>
                  function playSound13(){
                    var audio = new Audio('audiomandarin/manggisM.mp3');
                    audio.play();}
              </script>

              <div class="column english">
                <div class="content">
                <img src="img/strawberi.png" alt="Strawberry" style="width:100%">
                <button style='font-size:24px' onclick="playSound14()">Click</button>
                  <h2>草莓</h2>
                  <p>Cǎoméi </p>
                </div>
              </div>
              <script>
                  function playSound14(){
                    var audio = new Audio('audiomandarin/starwberiM.mp3');
                    audio.play();}
              </script>

              <div class="column english">
                <div class="content">
                <img src="img/ceri.png" alt="Cherry" style="width:100%">
                <button style='font-size:24px' onclick="playSound15()">Click</button>
                  <h2>樱桃</h2>
                  <p> Yīngtáo </p>
                </div>
              </div>
              <script>
                  function playSound15(){
                    var audio = new Audio('audiomandarin/ceriM.mp3');
                    audio.play();}
              </script>

              <div class="column english">
                <div class="content">
                <img src="img/anggur.png" alt="Cherry" style="width:100%">
                <button style='font-size:24px' onclick="playSound15()">Click</button>
                  <h2>葡萄</h2>
                  <p> Pútáo </p>
                </div>
              </div>
              <script>
                  function playSound15(){
                    var audio = new Audio('audiomandarin/anggurM.mp3');
                    audio.play();}
              </script>
          <!-- END GRID -->
          </div>

          <!-- END MAIN -->
          </div>

                <script>
                filterSelection("all")
                function filterSelection(c) {
                  var x, i;
                  x = document.getElementsByClassName("column");
                  if (c == "all") c = "";
                  for (i = 0; i < x.length; i++) {
                    w3RemoveClass(x[i], "show");
                    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
                  }
                }

                function w3AddClass(element, name) {
                  var i, arr1, arr2;
                  arr1 = element.className.split(" ");
                  arr2 = name.split(" ");
                  for (i = 0; i < arr2.length; i++) {
                    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
                  }
                }

                function w3RemoveClass(element, name) {
                  var i, arr1, arr2;
                  arr1 = element.className.split(" ");
                  arr2 = name.split(" ");
                  for (i = 0; i < arr2.length; i++) {
                    while (arr1.indexOf(arr2[i]) > -1) {
                      arr1.splice(arr1.indexOf(arr2[i]), 1);     
                    }
                  }
                  element.className = arr1.join(" ");
                }


                // Add active class to the current button (highlight it)
                var btnContainer = document.getElementById("myBtnContainer");
                var btns = btnContainer.getElementsByClassName("btn");
                for (var i = 0; i < btns.length; i++) {
                  btns[i].addEventListener("click", function(){
                    var current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(" active", "");
                    this.className += " active";
                  });
                }
                </script>

</body>
</html>
