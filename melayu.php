<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning Fruit</title>
  <link rel="stylesheet" href="/css/styles.css">
  <style >
    :root {
  --scrollcolor: white;
  --scrollbackground: #141e27;
}
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
  background-image: url("img/bg4.jpg");
  background-size: cover;
  background-position: center;
}
.title {
  font-size: 1.5rem;
  font-family: system-ui;
  line-height: 1.1;
  font-weight: 300;
  color: #fff;
  margin: 0.5rem auto;
  width: 85%;
  max-width: 1000px;
}
 h1 {
  font-size: 50px;
  text-align: center;
  margin: 0.5rem auto;
  color: #F36D6D;
 }


.slider {
  width: 85%;
  max-width: 1000px;
  margin: 0 auto;
}
.slider__content {
  overflow-x: scroll;
  scroll-snap-type: x mandatory;
  display: flex;
  gap: 1rem;
  padding-bottom: 1rem;
  scrollbar-color: var(--scrollcolor) var(--scrollbackground);
}
.slider__content::-webkit-scrollbar {
  height: 0.5rem;
  width: 0.5rem;
  border-radius: 1rem;
  background: var(--scrollbackground);
}
.slider__content::-webkit-scrollbar-thumb {
  border-radius: 1rem;
  background: var(--scrollcolor);
}
.slider__content::-webkit-scrollbar-track {
  border-radius: 1rem;
  background: var(--scrollbackground);
}
.slider__item {
  scroll-snap-align: start;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  min-width: 100%;
  width: 100%;
  border-radius: 0.25rem;
  overflow: hidden;
  position: relative;
  aspect-ratio: 1;
}
 /* Content */
      .content {
      background-color: pink;
      padding: 1px;
      }

@media (min-width: 460px) {
  .slider__item {
    aspect-ratio: 0.6666666667;
    min-width: calc((100% / 2) - 2rem);
 }
}
@media (min-width: 940px) {
  .slider__item {
    min-width: calc((100% / 3) - 4rem);
 }
}
.slider__image {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
  position: absolute;
  top: 0;
  left: 0;
}
.slider__info {
  position: relative;
  padding: 4rem 2rem 2rem;
  /*background: linear-gradient(to top, rgba(0, 0, 0, 0.75), rgba(32, 50, 57, 0));*/
}
.slider__info h2 {
  color: #fff;
  font-family: system-ui;
  line-height: 1.1;
  font-weight: 300;
  font-size: 1.80rem;
  text-align: center;
  margin: 0;
}
.slider__nav {
  margin: 1rem 0 4rem;
  width: 100%;
  padding: 0;
  display: flex;
  justify-content: flex-start;
  gap: 1rem;
  align-content: center;
  align-items: center;
  pointer-events: none;
}
@media (min-width: 460px) {
  .slider__nav {
    justify-content: flex-end;
 }
}
.slider__nav__button {
  margin: 0;
  appearance: none;
  border: 0;
  border-radius: 2rem;
  background: black;
  color: white;
  padding: 0.5rem 1rem;
  font-size: 0.80rem;
  line-height: 1;
  pointer-events: auto;
  transition: 0.2s ease-out;
  opacity: 0.25;
}
.slider__nav__button--active {
  opacity: 1;
  pointer-events: auto;
  cursor: pointer;
}
.audio-container {
  display:  flex;
  justify-content: center;
  align-items: center;
  height: 13vh;
  width: 270px;
}
#audio{
  width: 150px;
  height: 40px;
}


.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

.text1 {
  background-color:#5F9EA0 ;

}

.text2 {
  background-color:#9E4638 ;
 }

 .text3 {
  background-color:#D4AF37 ;
 }

 .text4 {
  background-color:#8B8000 ;
 }

 .text5 {
  background-color:#F88017 ;
 }

 .text6 {
  background-color:#5F9EA0 ;
 }

.text7 {
  background-color:#B041FF;
 }

 .text8 {
  background-color:#9E4638;
 }

 .text9 {
  background-color:#CB6D51;
 }

 .text10 {
  background-color:#CD5C5C ;
 }

 .text11 {
  background-color:#FBB917;
 }

 .text12 {
  background-color:#F08080;
 }

 .text13 {
  background-color:#EE9A4D ;
 }

 .text14 {
  background-color:#C7A317 ;
 }

 .text15 {
  background-color:#6CBB3C ;
 }


 </style>

</head>

<body>
  <h1>Nama Buah Dalam Bahasa Melayu</h1>
  <div class="slider" x-data="{start: true, end: false}" style="padding-top: 150px;">
    <div class="slider__content" x-ref="slider" x-on:scroll.debounce="$refs.slider.scrollLeft == 0 ? start = true : start = false; Math.abs(($refs.slider.scrollWidth - $refs.slider.offsetWidth) - $refs.slider.scrollLeft) < 5 ? end = true : end = false;">

      <div class="slider__item">
        <div class="audio-container">
        <img class="slider__image" src="img/epal.png" alt="Image" style="width:105%">
        <div class="slider__info">
          <h2 class="text1">Epal</h2>
          <audio controls autoplay>
            <source src="audiomelayu/epal.mp3" type="audio/mpeg">
          </audio>
        </div>
      </div>
    </div>


      <div class="slider__item">
        <div class="audio-container">
        <img class="slider__image" src="img/naga.png" alt="Image" style="width:115%">
        <div class="slider__info">
          <h2 class="text2">Naga</h2>
          <audio controls autoplay>
            <source src="audiomelayu/naga.mp3" type="audio/mpeg">
          </audio>
        </div>
        </div>
      </div>

      <div class="slider__item">
        <div class="audio-container">
        <img class="slider__image" src="img/anggur.png" alt="Image" style="width:100%">
        <div class="slider__info">
          <h2 class="text3">Anggur</h2>
          <audio controls autoplay>
            <source src="audiomelayu/anggur.mp3" type="audio/mpeg">
          </audio>
        </div>
        </div>
      </div>

      <div class="slider__item">
        <div class="audio-container">
        <img class="slider__image" src="img/betik.png" alt="Image" style="width:103%">
        <div class="slider__info">
          <h2 class="text4">Betik</h2>
             <audio controls autoplay>
            <source src="audiomelayu/betik.mp3" type="audio/mpeg">
          </audio>
        </div>
        </div>
      </div>

      <div class="slider__item">
        <div class="audio-container">
        <img class="slider__image" src="img/delima.png" alt="Image" style="width:100%">
        <div class="slider__info">
          <h2 class="text5">Delima</h2>
           <audio controls autoplay>
            <source src="audiomelayu/delima.mp3" type="audio/mpeg">
          </audio>
        </div>
        </div>
      </div>

      <div class="slider__item">
        <div class="audio-container">
        <img class="slider__image" src="img/durian.png" alt="Image"  style="width:104%">
        <div class="slider__info">
          <h2 class="text6">Durian</h2>
          <audio controls autoplay>
            <source src="audiomelayu/durian.mp3" type="audio/mpeg">
          </audio>
        </div>
        </div>
      </div>
      <div class="slider__item">
        <div class="audio-container">
        <img class="slider__image" src="img/jambu.png" alt="Image" style="width:105%">
        <div class="slider__info">
          <h2 class="text7">Jambu Batu</h2>
           <audio controls autoplay>
            <source src="audiomelayu/jambu batu.mp3" type="audio/mpeg">
          </audio>
        </div>
        </div>
      </div>

      <div class="slider__item">
        <div class="audio-container">
        <img class="slider__image" src="img/nenas.png" alt="Image" style="width:110%">
        <div class="slider__info">
          <h2 class="text8">Nenas</h2>
           <audio controls autoplay>
            <source src="audiomelayu/nenas.mp3" type="audio/mpeg">
          </audio>
        </div>
        </div>
      </div>

      <div class="slider__item">
        <div class="audio-container">
        <img class="slider__image" src="img/mangga.png" alt="Image"  style="width:105%">
        <div class="slider__info">
          <h2 class="text9">Mangga</h2>
           <audio controls autoplay>
            <source src="audiomelayu/mangga.mp3" type="audio/mpeg">
          </audio>
        </div>
        </div>
      </div>

      <div class="slider__item">
        <div class="audio-container">
        <img class="slider__image" src="img/strawberi.png" alt="Image">
        <div class="slider__info">
          <h2 class="text10">Strawberi</h2>
          <audio controls autoplay>
            <source src="audiomelayu/strawberi.mp3" type="audio/mpeg">
          </audio>
        </div>
        </div>
      </div>
    <div class="slider__item">
      <div class="audio-container">
        <img class="slider__image" src="img/ceri.png" alt="Image" style="width:110%">
        <div class="slider__info">
          <h2 class="text11">Ceri</h2>
          <audio controls autoplay>
            <source src="audiomelayu/ceri.mp3" type="audio/mpeg">
          </audio>
        </div>
        </div>
      </div>
  
    <div class="slider__item">
         <div class="audio-container">
        <img class="slider__image" src="img/pisang.png" alt="Image" style="width:110%">
        <div class="slider__info">
          <h2 class="text12">Pisang</h2>
          <audio controls autoplay>
            <source src="audiomelayu/pisang.mp3" type="audio/mpeg">
          </audio>
        </div>
        </div>
      </div>
    
    <div class="slider__item">
       <div class="audio-container">
        <img class="slider__image" src="img/kiwi.png" alt="Image">
        <div class="slider__info">
          <h2 class="text13">Kiwi</h2>
          <audio controls autoplay>
            <source src="audiomelayu/kiwi.mp3" type="audio/mpeg">
          </audio>
        </div>
        </div>
      </div>

       <div class="slider__item">
        <div class="audio-container">
        <img class="slider__image" src="img/belimbing.png" alt="Image" style="width:110%">
        <div class="slider__info">
          <h2 class="text14">Belimbing</h2>
          <audio controls autoplay>
            <source src="audiomelayu/belimbing.mp3" type="audio/mpeg">
          </audio>
        </div>
        </div>
      </div>

       <div class="slider__item">
        <div class="audio-container">
        <img class="slider__image" src="img/manggis.png" alt="Image" style="width:105%">
        <div class="slider__info">
          <h2 class="text15">Manggis</h2>
          <audio controls autoplay>
            <source src="audiomelayu/manggis.mp3" type="audio/mpeg">
          </audio>
        </div>
        </div>
      </div>

   </div>
    <div class="slider__nav" style="display: flex;justify-content: center;">
      <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth * -1, behavior: 'smooth'});" x-bind:class="start ? '' : 'slider__nav__button--active'">Sebelum</button>
      <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth, behavior: 'smooth'});" x-bind:class="end ? '' : 'slider__nav__button--active'">Seterusnya</button>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.2/cdn.js"></script>
</body>
</html>

