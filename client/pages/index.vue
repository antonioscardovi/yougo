<template>
  <div class="container">
    <TheSidenav/>
    <div id="bg-pic" class="overlay">
      <div class="headline">
        <h1>Iznajmite vozilo po svojoj mjeri!</h1>
      </div>
      <a id="link" href="/Vehicles">
        <button type="submit" class="btn btn-1">
          <span>REZERVIRAJ!</span>
        </button>
      </a>

      <button type="button" class="scroll_down" id="scroll_down" v-scroll-to="'#section2'"></button>
      <!-- <nuxt-link type="button" to="/#onama" class="scroll_down" id="scroll_down" v-scroll-to="'#section2'"></nuxt-link> -->
    </div>

    <section id="onama" class="aboutus">
      <div class="divBox div1">
        <h2>O nama</h2>
        <p id="p1">IZAĐI IZ OKVIRA SVAKODNEVICE UZ YouGo!</p>
        <p id="p2">YouGo je sigurna i provjerena stranica za rezervaciju automobila</p>
        <p
          id="p3"
        >Integer luctus enim in odio semper, molestie convallis ipsum vehicula. Integer elementum mattis pretium. Etiam hendrerit lobortis justo, in lacinia justo efficitur ac. Fusce venenatis vitae odio dapibus mollis. Nunc pretium, libero ut rutrum sagittis, mauris nunc sollicitudin quam, a ullamcorper arcu leo nec ligula. Sed gravida nisi quam, ac tincidunt augue pharetra et. Mauris quis felis libero. Vivamus vehicula, leo ac volutpat tempus, purus mauris tincidunt dui, vitae tincidunt turpis ante quis purus. Nullam tempus aliquam sapien non accumsan.</p>
        <a id="link" href="/Vehicles">
          <button type="submit" class="btn-2">
            <span>REZERVIRAJ!</span>
          </button>
        </a>
      </div>
      <div class="divBox div2">
        <div class="map-responsive">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44879.80263543315!2d14.403759344503271!3d45.32887154779649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4764a6dcf256984b%3A0x1d0c2bb4ee6443b1!2sZametska+ul.%2C+51000%2C+Rijeka!5e0!3m2!1shr!2shr!4v1559565424534!5m2!1shr!2shr"
            width="300"
            height="800"
            frameborder="0"
            style="border:0"
            allowfullscreen
          ></iframe>
        </div>
        <br>
        <p id="p2" style="color:#333;">Obratite nam se s povjerenjem!</p>
        <p style="color:#4c4c4c;">
          <i
            class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"
            style="padding-right: 7%;"
          ></i>Rent-a-car
        </p>
        <p style="color:#4c4c4c">
          <i
            class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"
            style="padding-right: 7%;"
          ></i>Rijeka, HR
        </p>
        <p style="color:#4c4c4c">
          <i
            class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"
            style="padding-right: 7%;"
          ></i>yougo@mail.com
        </p>
        <p style="color:#4c4c4c">
          <i
            class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"
            style="padding-right: 7%;"
          ></i>099/ 562 / 7892
        </p>
        <br>
        <br>
      </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <center>
      <i style="font-size:65px;padding-bottom:2%" class="fa fa-user-circle"></i>
      <br>
      <h2 class="upoznajtetim">UPOZNAJTE NAŠ TIM</h2>
    </center>
    <br>
    <br>
    <br>
    <br>
    <section class="div3">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <source
              srcset="~/assets/Images/vecaslika1.jpg"
              media="(min-width: 1076px)"
              style="background-size: cover;height:auto;width:100%"
            >
            <source srcset="~/assets/Images/c1.jpg" style="width:100%;height:100%;">
            <img src="~/assets/Images/c1.jpg" style="width:100%;height:100%;" alt="Avatar">
          </div>
          <div class="flip-card-back">
            <h1>
              <i class="fa fa-paint-brush" style="font-size:40px;color:white"></i>
              <br>
              <br>Lana Horvat
            </h1>
            <br>
            <p>Arhitektica & dizajnerica</p>
            <p style="font-weight:lighter;">Lana je ambiciozna i kreativa. Jako dobar radnik!</p>
          </div>
        </div>
      </div>

      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img
              src="~/assets/Images/c2.jpg"
              alt="Avatar"
              style="width:100%;height:100%;"
              class="slika1"
            >
          </div>
          <div class="flip-card-back" style="background-color:#666666">
            <h1>
              <i class="fa fa-at" style="font-size:40px;color:white"></i>
              <br>
              <br>Ivan Horvat
            </h1>
            <br>
            <p>Programer, Back-end i Front-end</p>
            <p>Jako marljiv i vrijedan naš Ivan Horvat</p>
          </div>
        </div>
      </div>

      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="~/assets/Images/c3.jpg" alt="Avatar" style="width:100%;height:100%;">
          </div>
          <div class="flip-card-back" style="padding-left:3%;padding-right:3%;">
            <h1>
              <i class="fa fa-cogs" style="font-size:40px;color:white"></i>
              <br>
              <br>Marko Srdoč
            </h1>
            <br>
            <p>Organizator i podrška</p>
            <p>Glavni organizator i menadžer, sve kreće od ovog čovjeka.</p>
          </div>
        </div>
      </div>
    </section>
    <br>
    <br>
    <br>
  </div>
</template>

<script>
import TheSidenav from '~/components/Navigation/TheSidenav.vue'

export default {
  components: {
    TheSidenav
  }
}

// window.addEventListener('DOMContentLoaded', yourFunction, false);

// SCROLL DOWN BUTTON
// (function() {
//   'use strict';

//   var btnScrollDown = document.querySelector('#scroll_down');

//   function scrollDown() {
//     var windowCoords = document.documentElement.clientHeight;
//     (function scroll() {
//       if (window.pageYOffset < windowCoords) {
//         window.scrollBy(0, 10);
//         setTimeout(scroll, 0);
//       };
//       if (window.pageYOffset > windowCoords) {
//         window.scrollTo(0, windowCoords);
//       };
//     })();
//   };

//   btnScrollDown.addEventListener('click', scrollDown);
// })();
</script>

<style scoped>
body,
html {
  height: 100%;
}

#bg-pic {
  display: flex;
  flex-wrap: nowrap;
  flex-direction: column;
  position: relative;
  height: 100vh;
  background-image: url('~assets/images/rentacar-audi.jpg');
  background-position: center center;
  background-size: cover;
}

button.scroll_down {
  position: absolute;
  margin-left: auto;
  margin-right: auto;
  left: 0;
  right: 0;
  height: 50px;
  width: 30px;
  bottom: 60px;
  background-color: transparent;
  border: 2px solid white;
  border-radius: 20px;
  cursor: pointer;
  outline: none;
}
button.scroll_down:before {
  position: absolute;
  top: 10px;
  left: 50%;
  content: '';
  width: 6px;
  height: 6px;
  margin-left: -3px;
  background-color: #fff;
  border-radius: 100%;
  -webkit-animation: scroll_down_btn-animation 2s infinite;
  animation: scroll_down_btn-animation 2s infinite;
  box-sizing: border-box;
}

@keyframes scroll_down_btn-animation {
  0% {
    transform: translate(0, 0);
    opacity: 0;
  }
  40% {
    opacity: 1;
  }
  80% {
    transform: translate(0, 20px);
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}

@-webkit-keyframes scroll_down_btn-animation {
  0% {
    -webkit-transform: translate(0, 0);
    transform: translate(0, 0);
    opacity: 0;
  }
  40% {
    opacity: 1;
  }
  80% {
    -webkit-transform: translate(0, 20px);
    transform: translate(0, 20px);
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}

.overlay {
  position: relative;
}

.overlay:before {
  position: absolute;
  content: ' ';
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: block;
  z-index: 0;
  background-color: rgba(51, 51, 51, 0.5);
}

.headline {
  position: relative;
  top: 20vh;
  margin: 0 auto;
  text-transform: uppercase;
  text-align: center;
  border: 3px solid #f4f4f4;
}

.headline h1 {
  font-size: 3rem;
  padding: 10px;
}

.btn {
  position: relative;
  top: 45vh;
  font-family: inherit;
  font-size: inherit;
  color: #448cff;
  background: none;
  cursor: pointer;
  padding: 25px 80px;
  display: block;
  margin: 0 auto;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-weight: 700;
  outline: none;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
}

.btn:after {
  content: '';
  position: absolute;
  z-index: -1;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
}

.btn-1 {
  border: 3px solid #448cff;
  color: #448cff;
}

.btn-1:hover {
  color: #f4f4f4;
  background-color: #448cff;
}

.btn-1:active {
  background-color: #0054db;
  border: 4px solid #333;
}

.btn-2 {
  position: relative;
  top: 25%;
  border: 3px solid #448cff;
  color: #448cff;
  font-family: inherit;
  font-size: inherit;
  background: none;
  cursor: pointer;
  padding: 25px 80px;
  display: block;
  margin: 0 auto;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-weight: 700;
  outline: none;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
}

.btn-2:after {
  content: '';
  position: absolute;
  z-index: -1;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
}

.btn-2:hover {
  color: #f4f4f4;
  background-color: #448cff;
}

.btn-2:active {
  background-color: #0054db;
  border: 4px solid #333;
}

.flip-card {
  padding-left: 1%;
  margin-top: 2%;
  margin-bottom: 2%;
  background-color: transparent;
  width: 33.3333%;
  height: 330px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.5s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front,
.flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #0054db;
  color: white;
  transform: rotateY(180deg);
}
.map-responsive {
  overflow: hidden;
  padding-bottom: 70%;
  position: relative;
}

i {
  font-size: 22px;
  padding-top: 3%;
  color: #0054db;
}
.map-responsive iframe {
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  position: absolute;
}
.divBox {
  padding-left: 2%;
  padding-right: 2%;
  padding-top: 2%;
  border-top: solid 30px #0054db;
}

.div1 {
  background-color: white;
  width: 60%;
  padding-left: 5%;
  padding-right: 5%;
  padding-top: 5%;
}
.div2 {
  background-color: rgba(204, 204, 204, 0.39);
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  width: 40%;
  color: white;
  font-size: 17px;
}

.upoznajtetim {
  font-size: 26px;
  font-weight: bolder;
  padding-left: 2%;
  padding-right: 2%;
}

.div3 {
  width: 100%;
  display: flex;
  min-height: 40vh;
  flex-direction: row;
  flex-wrap: wrap;
  background-image: linear-gradient(-90deg, #5b5b5b, rgb(238, 238, 238));
  -moz-box-shadow: inset 0 0 36x #000000a0;
  -webkit-box-shadow: inset 0 0 6px #000000a0;
  box-shadow: inset 0 0 6px #000000a0;
}

.aboutus {
  display: flex;
  min-height: 75vh;
  flex-direction: row;
  flex-wrap: wrap;
}

h2 {
  color: #0054db;
  font-family: 'Montserrat';

  font-size: 30px;
  font-weight: bolder;
}

#p2 {
  margin-top: 1%;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-size: 18px;
  color: #0054db;
}

#p1 {
  padding-right: 13%;
  margin-top: 5%;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-size: 29px;
  color: white;
  text-shadow: -1px -1px 0 #0054db, 1px -1px 0 #0054db, -1px 1px 0 #0054db,
    1px 1px 0 #0054db;
}

#p3 {
  margin-top: 3%;
  font-family: 'Roboto';
  font-size: 16px;
  padding-right: 13%;
  text-align: justify;
  color: #333;
}

.container {
  padding-top: 0;
  min-height: 100vh;
}

h1 {
  color: white;
  font-family: 'Montserrat';

  padding-top: 7%;
  padding-left: 4%;
  padding-right: 4%;
  font-size: 27px;
  font-weight: bolder;
  -webkit-animation: focus-in-expand-fwd 1.2s
    cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
  animation: focus-in-expand-fwd 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
}

input,
select {
  width: 90%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

@-webkit-keyframes focus-in-expand-fwd {
  0% {
    letter-spacing: -0.5em;
    -webkit-transform: translateZ(-800px);
    transform: translateZ(-800px);
    -webkit-filter: blur(12px);
    filter: blur(12px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    -webkit-filter: blur(0);
    filter: blur(0);
    opacity: 1;
  }
}
@keyframes focus-in-expand-fwd {
  0% {
    letter-spacing: -0.5em;
    -webkit-transform: translateZ(-800px);
    transform: translateZ(-800px);
    -webkit-filter: blur(12px);
    filter: blur(12px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    -webkit-filter: blur(0);
    filter: blur(0);
    opacity: 1;
  }
}

#image {
  margin-top: -15%;
  position: absolute;
  float: right;
  right: 0;
  clear: both;
  z-index: 0;
}

.form-group {
  color: wheat;
  font-size: 18px;
  font-family: 'Montserrat';
  font-weight: lighter;
  text-align: left;
  margin-left: 13%;
  z-index: 3;
}

#link {
  text-decoration: none;
  color: #f4f4f4;
}

/* #link:hover {
    color: #ff3abf;
  } */

#aboutus {
  background-color: red;
  height: 500px;
  width: 100%;
}

@media screen and (max-width: 499px) {
  #formahome {
    margin-left: 10%;
    width: 100%;
  }
  #image {
    display: none;
  }

  .btn {
    position: relative;
  }

  .container {
    margin-top: 18%;
    min-height: 100vh;
    width: 100%;
  }
}

@media screen and (max-width: 900px) and (min-width: 500px) {
  #formahome {
    z-index: 1;
    margin: 0 auto;
    width: 60%;
  }
  #image {
    display: none;
  }
  .form-group {
    z-index: 3;
  }

  .btn {
    width: 40%;
    margin-top: 16%;
    padding: 0 auto;
  }
  .container {
    width: 100%;
  }
}

@media screen and (max-width: 1103px) and (min-width: 861px) {
  #formahome {
    width: 40%;
  }
  .image {
    display: none;
  }
  .form-group {
    z-index: 3;
  }

  .btn {
    margin-top: 8%;
    z-index: 1;
  }
}

@media screen and (max-width: 1276px) {
  #image {
    display: none;
  }
}

@media screen and (max-width: 800px) {
  .aboutus {
    display: flex;
    min-height: 75vh;
    flex-direction: column;
    flex-wrap: wrap;
    padding-left: 5%;
    margin-left: 5%;
  }
  .div1 {
    flex: 1;
    width: 100%;
    padding-left: 5%;
    padding-top: 5%;
    padding-bottom: 20%;
  }
  .div2 {
    flex: 1;
    width: 100%;
    padding-left: 5%;
  }
  .p3 {
    padding-right: 2%;
  }
}
@media screen and (min-width: 671px) and (max-width: 999px) {
  .div3 {
    flex: 1;
    width: 100%;
    display: flex;
    min-height: 84vh;
    flex-direction: column;
    flex-wrap: wrap;
  }

  .slika1 {
    width: 100%;
    height: 400px;
  }
  .flip-card {
    flex: 1;
    min-height: 45vh;
    width: 70%;
    display: flex;
    margin-left: 15%;
    margin-top: 4%;

    flex-direction: column;
    flex-wrap: wrap;
  }
  .flip-card-inner {
    font-size: 25px;
  }
  .slika1 {
    width: 100%;
  }
}

@media screen and (min-width: 400px) and (max-width: 670px) {
  .div3 {
    flex: 1;
    width: 100%;
    display: flex;
    min-height: 84vh;
    flex-direction: column;
    flex-wrap: wrap;
  }

  .slika1 {
    width: 100%;
    height: 400px;
  }
  .flip-card {
    flex: 1;
    min-height: 45vh;
    width: 100%;
    display: flex;
    margin-top: 4%;
    flex-direction: column;
    flex-wrap: wrap;
  }

  .slika1 {
    width: 100%;
  }
  .flip-card-inner {
    font-size: 25px;
  }
}
</style>
