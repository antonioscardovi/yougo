<template>
<div id="footer" class="footer-container">
  <!-- <div class="footer-top">
    <div class="container">
      <div class="inner">
        <h3 style="color:white; padding-top:5px;">Jeste li se Odlučili za Auto?</h3>
        <button class="btn">Iznajmi Auto</button>
      </div>
    </div>
  </div> -->
  <div class="footer-center">
    <div class="container">
      <div class="inner">
        <div class="box-1">
          <div>
            <div><h3>YouGo-rent a car</h3></div>
            <center>Blalalalalal</center>
            <center><small style="color:#333">LOKACIJA:</small></center>
            
            <p>Ulica Braće Šupak 69</p>
            <p>Podkilavac, Jelenje</p>
          </div>
          
          
        </div>
        <div class="box-1">
          <div>
            <div><h3>YouGo-rent a car</h3></div>
            <center><i class="fa fa-compass" style="font-size:25px;color:#333"></i></center>
            <center><small style="color:#333">LOKACIJA:</small></center>
            
            <p>Ulica Braće Šupak 69</p>
            <p>Podkilavac, Jelenje</p>
          </div>
          
          
        </div>
        <div class="box-2">
            <div class="f-news">
              <h3>Nazovite nas:</h3>
            </div>
            <center><i class="fa fa-phone" style="font-size:25px;color:#333"></i></center>
            <div>
            <center><small style="color:#333">Tel:</small></center>
            <P>+38591.6969.6969</P>
            <P>+38591.6969.6969</P>
          </div>
          </div>
          <div class="box-3">
          <div class="f-news">
              <h3>Pretplatite se na naše e-novine:</h3>
            </div>
            
            <center><i class="fa fa-envelope" style="font-size:25px;color:#333"></i></center>
            <center><small style="color:#333">E-mail:</small></center>
            
          <div class="form-action">
            <form action="">
            <input type="email" name="email" placeholder="your email address"><button>Submit</button>
            
            
          </form>
          </div>

        </div>
        </div>
        
      </div>
    </div>
    <div class="footer-bottom">
   <div class="rounded-social-buttons">
                    <a class="social-button facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="social-button twitter" href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="social-button linkedin" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a class="social-button youtube" href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a class="social-button instagram" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
  </div>
  </div>
</template>


<script>
export default {

}
</script>


<style scoped>


*{
  box-sizing: border-box;
}
.footer-top {
  background: rgb(103, 103, 103);
  

}


.footer-center{
  background-color: #5d5d5d72;
  padding-top:1%;
  padding-bottom:1%;
  border-top: 6px solid #4f5051;
}

.news-img img {
    width:90px; /* you can use % */
    height: auto;
    border-radius: 50%;
    margin-right: 1rem;
}
.container {
  width:1200px;
  max-width: 100%;
  margin:auto;
}

.inner {
display: flex;
justify-content: space-between;
padding:1rem 2rem;
margin-top:1%;

}
.box-1 div{
  margin-bottom:1rem;
}
.box2-a {
  display: flex;
  margin-bottom: 1rem;
  align-items: center;
}

.f-news {
  margin-bottom: 1rem;
}

.news-detail {
  padding: 20px auto;
}


.Footer-top .inner h3 {
  
  color: #fff;
}

.btn {

  display: block;
  background:#333;
  padding: 0.5rem 1.5rem;
  color: #fff;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  font-size: 1.1rem;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

textarea {
    resize: none;
}

p{
  color:rgb(54, 54, 54);
}
.footer-bottom{
  background: #0054db;
  padding-top: 1%;
  padding-bottom: 1%;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  white-space: nowrap;
}

.svg-inline--fa {
  vertical-align: -0.200em;
}

.rounded-social-buttons {
  text-align: center;
}

h3{
  color:#333;
}

.rounded-social-buttons .social-button {
  display: inline-block;
  position: relative;
  cursor: pointer;
  width: 3.125rem;
  height: 3.125rem;
  border: 0.125rem solid transparent;
  padding: 0;
  text-decoration: none;
  text-align: center;
  color: #fefefe;
  font-size: 1.5625rem;
  font-weight: normal;
  line-height: 2em;
  border-radius: 1.6875rem;
  transition: all 0.5s ease;
  margin-right: 0.25rem;
  margin-bottom: 0.25rem;
}

.rounded-social-buttons .social-button:hover, .rounded-social-buttons .social-button:focus {
  -webkit-transform: rotate(360deg);
      -ms-transform: rotate(360deg);
          transform: rotate(360deg);
}

.rounded-social-buttons .fa-twitter, .fa-facebook-f, .fa-linkedin, .fa-youtube, .fa-instagram {
  font-size: 25px;
}

.rounded-social-buttons .social-button.facebook {
  background: #3b5998;
}

.rounded-social-buttons .social-button.facebook:hover, .rounded-social-buttons .social-button.facebook:focus {
  color: #3b5998;
  background: #fefefe;
  border-color: #3b5998;
}

.rounded-social-buttons .social-button.twitter {
  background: #55acee;
}

.rounded-social-buttons .social-button.twitter:hover, .rounded-social-buttons .social-button.twitter:focus {
  color: #55acee;
  background: #fefefe;
  border-color: #55acee;
}

.rounded-social-buttons .social-button.linkedin {
  background: #007bb5;
}

.rounded-social-buttons .social-button.linkedin:hover, .rounded-social-buttons .social-button.linkedin:focus {
  color: #007bb5;
  background: #fefefe;
  border-color: #007bb5;
}

.rounded-social-buttons .social-button.youtube {
  background: #bb0000;
}

.rounded-social-buttons .social-button.youtube:hover, .rounded-social-buttons .social-button.youtube:focus {
  color: #bb0000;
  background: #fefefe;
  border-color: #bb0000;
}

.rounded-social-buttons .social-button.instagram {
  background: #125688;
}

.rounded-social-buttons .social-button.instagram:hover, .rounded-social-buttons .social-button.instagram:focus {
  color: #125688;
  background: #fefefe;
  border-color: #125688;
}






</style>
