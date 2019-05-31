<template>
  <div class="container">
    <TheSidenav/>
    <div id="formahome">
      <div id="blue"><center><h1>Rezerviraj auto po mjeri!
      ________________________
      </h1></center>
      <section id="container">
      <section class="form-wrap">
        <br><br>
        <form action="">
          <div class="form-group">
            <label for="date">1. Datum iznajmljivanja</label>
            <input type="date" name="date">
          </div><br>
           <div class="form-group">
            <label for="date">2. Datum vraćanja: </label>
            <input type="date" name="date">
          </div><br>
          <div class="form-group">
            <label for="type">3. Tip automobila</label>
            <select name="type" id="type">
              <option value="karavan">Karavan</option>
              <option value="kabriolet">Kabriolet</option>
              <option value="suv">SUV</option>
              <option value="teretni">Teretni</option>
            </select>
          </div>
          <div class="form-group"><br>
            <label for="model">4. Model automobila</label>
            <select name="type" id="type">
              <option value="volvo">Volvo</option>
              <option value="saab">Saab</option>
              <option value="mercedes">Mercedes</option>
              <option value="audi">Audi</option>
            </select>
          </div>
          
        </form>
      </section>
      
    </section>
    <button type="submit" class="btn"><nuxt-link to="/Vehicles"><span>REZERVIRAJ!</span></nuxt-link></button>
      </div>
      <img id="image" src="~/assets/Images/a5.png"></div>
    
    
    
  </div>
</template>

<script>
import TheSidenav from '~/components/Navigation/TheSidenav.vue'

export default {
  components: {
    TheSidenav,
  }
}
</script>

<style scoped>
.container {
  padding-top: 100px;
  min-height: 100vh;
  /*background-image: url('~assets/Images/audi1.jpg');
  background-size: cover;*/
}

h1{
  color:white;
  font-family: 'Montserrat';
  padding-top: 7%;
  padding-left: 4%;
  padding-right:4%;
  font-size: 30px;
    }

#image{
  
    margin-top:-19%;
    position:absolute;
    float:right;
    right:0;
    clear:both;
    z-index: 0;
    
    
}
.form-group{
  color:wheat;
  font-size: 18px;
  font-family: 'Montserrat';
  font-weight: lighter;
  text-align: left;
  margin-left: 13%;
  z-index: 3;
}

#formahome{
  background-color: #0054db;
  min-height: 400px;
  width:35%;
  margin-left: 25%;
  border-radius: 5px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.517), 0 6px 20px 0 rgba(0, 0, 0, 0.51);
}

.btn{
  text-decoration: none;
  font-family: 'Montserrat';
  font-weight: bold;
  text-shadow: 2px 2px 6px #444444;
  border: none;
  display: block;
  text-align: center;
  cursor: pointer;
  text-transform: uppercase;
  outline: none;
  overflow: hidden;
  position: relative;
  width:100%;
  margin: 0 auto;
  background-image: linear-gradient(to right, #004ac1 , #6a8fcb);
  height:80px;
  border-radius: 5px;
  margin-top: 15%;
  color:rgb(200, 233, 253);
  font-size:23px;
  border:2px solid white;
  box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.517), 0 6px 20px 0 rgba(0, 0, 0, 0.51);
  
  
}

 .btn:hover{
  color:rgb(255, 255, 255);
}
.btn span {
  position: relative;
   z-index: 1;
  
}

.btn:after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  height: 350%;
  width: 130%;
  background: #78c7d2;
  -webkit-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  -webkit-transform: translateX(-98%) translateY(-25%) rotate(45deg);
  transform: translateX(-98%) translateY(-25%) rotate(45deg);
}



.btn:hover:after {
  -webkit-transform: translateX(-9%) translateY(-25%) rotate(45deg);
  transform: translateX(-9%) translateY(-25%) rotate(45deg);
  color:#333;
}

@media screen and (max-width: 550px) and (min-width: 423px) {
  #formahome {
    
    width:60%;
  }
  #image{
    height:auto;
  width:100%;
  margin-top:0;
  }
  

  .btn{
    margin-top:15%;
  }
  
}

@media screen and (max-width: 900px) and (min-width: 523px) {
  #formahome {
    z-index: 1;
    width:60%;
  }
  #image{
     height:auto;
  width:100%;
  margin-top:0%;
  z-index: -1;

  }
  .form-group{
  z-index: 3;
}
  

  .btn{
    margin-top:15%;
    z-index: 1;
  }
  
}

@media screen and (max-width: 1103px) and (min-width: 861px){
  #formahome{
    width:40%;
    
  }
.image {
  height:auto;
  width:100%;
   z-index: -2;
  
}
.form-group{
  z-index: 3;
}

.btn{
    margin-top:15%;
    z-index: 1;
  }
}



</style>