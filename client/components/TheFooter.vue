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
  <!-- <div class="footer-center">
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
        <div class="box-1a">
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
    </div> -->

    <footer class="footer-distributed">

			<div class="footer-left">

				<h3> YouGo</h3>

				<p class="footer-links">
					<a href="#">Početna</a>
					·
					<a href="/Vehicles">Popis vozila</a>
					·
					<a href="/#onama">O nama</a>
					·
					<a href="/auth/register">Registracija</a>
										
				</p>

				<p class="footer-company-name">Team Iron Man &copy; 2019</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>21 Revolution Street</span> Paris, France</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1 555 123456</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@company.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				

			</div>

		</footer>
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
/* .footer-top {
  background: rgb(103, 103, 103);
  

} */

/* .news-img img {
    width:90px; 
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

.box-1a{
  margin-bottom:1rem;
} */
/* .box2-a {
  display: flex;
  margin-bottom: 1rem;
  align-items: center;
}

.f-news {
  margin-bottom: 1rem;
} */

/* .news-detail {
  padding: 20px auto;
}


.Footer-top .inner h3 {
  
  color: #fff;
} */

/* .btn {

  display: block;
  background:#333;
  padding: 0.5rem 1.5rem;
  color: #fff;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  font-size: 1.1rem;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
} */

textarea {
    resize: none;
}

p{
  color:rgb(54, 54, 54);
}
.footer-bottom{
  background-image: linear-gradient(-90deg, #003385, #5494fa);
  padding-top: 1%;
  padding-bottom: 1%;
  border-top: 8px solid #333;
  
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
  font-family: 'Montserrat'
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

/*FOOTER STYLE*/

.footer-distributed{
  background-color: #292c2f;
  border-top: 20px solid #202020;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;

	padding: 55px 50px;
	margin-top: 80px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 40%;
}

/* The company logo */

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Cookie', cursive;
	margin: 0;
}

.footer-distributed h3 span{
	color:  #5383d3;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #8f9296;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  #5383d3;
	text-decoration: none;;
}


/* Footer Right */

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}

.logo {
  width: 150px;
  margin-left: 7px;
  
  display: inline-block;
  vertical-align: middle;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px sans-serif;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 10px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
  }
  
  .footer-bottom{
    padding-top: 2%;
    padding-bottom: 2%;
  }

}






</style>
