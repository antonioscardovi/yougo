<template>
<div id="footer" class="footer-container">
  <div class="footer-top">
    <div class="container">
      <div class="inner">
        <h3 style="color:white; padding-top:5px;">Jeste li se Odlučili za Auto?</h3>
        <button class="btn">Iznajmi Auto</button>
      </div>
    </div>
  </div>
  <div class="footer-center">
    <div class="container">
      <div class="inner">
        <div class="box-1">
          <div>
            <div><h3>YouGo Logo</h3></div>
            <small style="color:gray">LOKACIJA:</small>
            <p>Ulica Braće Šupak 69</p>
            <p>Podkilavac, Jelenje</p>
          </div>
          <div>
            <small style="color:gray">NAZOVITE NAS:</small>
            <P>+38591.6969.6969</P>
          </div>
          <div>
            <small style="color:gray">EMAIL ZA PODRŠKU:</small>
            <P>pimp-my-car@garage.com</P>
          </div>
        </div>
        <div class="box-2">
            <div class="f-news">
              <h3>Novosti</h3>
            </div>
            <div class="box2-a">
            <div class="news-img">
              <img src="http://vibemotorsports.com/store/image/cache/data/car-models/audi/audi-s5-2013-240x240.jpg" >
            </div>
            <div class="news-detail">
              <div><p>Provjerite kako izgleda novi Audi A8</p></div>
              <div><p style="color:gray">17. ožujka, 2019.</p></div>
            </div>
          </div>
          <div class="box2-a">
            <div class="news-img">
              <img src="http://www.vibemotorsports.com/store/image/cache/data/car-models/mercedes-benz/mercedes-c300-2013-240x240.jpg" alt="">
            </div>
            <div class="news-detail">
              <div><p>Provjerite novi Mercedes C klase</p></div>
              <div><p style="color:gray">19. ožujka, 2019.</p></div>
            </div>
          </div>
        </div>
        <div class="box-3">
          <div>
            <h3>NewsLetter</h3>
          </div>
          <div class="form-action">
            <form action="">
            <input type="email" name="email" placeholder="your email address">
            <div><button>Submit</button></div>
            <div>
              <h4>Pronađite nas na </h4>
              <h4>društvenim mrežama</h4>
              <i class="fab fa-facebook-f fa-2x"></i>
              <i class="fab fa-twitter fa-2x"></i>
              <i class="fab fa-youtube-square fa-2x"></i>
              <i class="fab fa-instagram fa-2x"></i>
            </div>
          </form>
          </div>

        </div>
      </div>
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
  background: #0054Db;

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
margin: 0 1rem;
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

.box-3 div {
  padding:1rem 0;
}

.box-3 h4 {
  margin-bottom: 0.2rem;
}
.Footer-top .inner h3 {
  line-height: 3rem;
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
</style>
