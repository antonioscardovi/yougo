<template>
  <div class="header">
    <nuxt-link to="/">
      <div class="logo">
        <img class="logo" src="~/assets/images/yugo-svijetli.png" alt="logo">
      </div>
    </nuxt-link>
    <input class="menu-btn" type="checkbox" id="menu-btn">
    <label class="menu-icon" for="menu-btn">
      <span class="navicon"></span>
    </label>
    <ul class="menu">
      <li class="nav-item link-1">
        <nuxt-link to="/">POČETNA</nuxt-link>
      </li>
      <li class="nav-item link-1">
        <nuxt-link to="/Vehicles">POPIS VOZILA</nuxt-link>
      </li>
      <li class="nav-item link-1">
        <nuxt-link to="/#onama">O NAMA</nuxt-link>
      </li>

      <template v-if="authenticated">
        <b-nav-item-dropdown>
          <template slot="button-content">{{user.name}}</template>
          <b-dropdown-item @click.prevent="signOut">Izlogiraj Se</b-dropdown-item>
        </b-nav-item-dropdown>
      </template>
      <template v-else>
        <li class="nav-item link-1 link2">
          <nuxt-link class="register" to="/auth/register">REGISTRACIJA</nuxt-link>
        </li>
      </template>
    </ul>
  </div>
</template>

<script>
export default {
  methods: {
    signOut() {
      this.$auth.logout()
    }
  }
}
</script>



<style scoped>


.header {
   background-color:#333;
   
  box-shadow: 0px 2px 8px 0 rgba(0, 0, 0, 0.707);
  position: fixed;
  width: 100%;
  height: auto;
  top: 0px;
  z-index: 3;
}

.header ul {
  margin: 0;
  padding: 0;
  list-style: none;
  overflow: hidden;
}

.header li a {
  display: block;
  padding: 20px 20px;
  text-decoration: none;
  color: rgb(255, 255, 255);
  
  /*text-shadow: 2px 2px 4px #333;*/
  transition: all 0.2s ease-in-out;
}

.header li a:hover,
.header .menu-btn:hover {
  color: rgb(201, 201, 201);

  transform: scale(1.1);
}

.header li a.register {
  color: #c2c2c2;
  text-shadow: 0 0 0;
}

.link-1 {
  transition: 0.3s ease;  
  text-decoration: none;
  
}
.link-1:hover, .link-1:active {  
  
  border-top: 5px solid rgb(211, 211, 211); 
  
   
}

.link2:hover{
  border-top: 4px solid rgb(235, 235, 235);
}

.logo {
  width: 150px;
  margin-left: 7px;
  
  display: inline-block;
  vertical-align: middle;
}

.nav-item {
  font-family: Roboto;
  font-size: 16px;
}

.header .menu {
  clear: both;
  max-height: 0;
  transition: max-height 0.2s ease-out;
  background-color: rgba(0, 0, 0, 0);
}

.header .menu-icon {
  cursor: pointer;
  display: inline-block;
  float: right;
  padding: 28px 20px;
  position: relative;
  user-select: none;
  
}

.header .menu-icon .navicon {
  background: rgb(251, 251, 251);
  display: block;
  height: 2px;
  position: relative;
  transition: background 0.2s ease-out;
  width: 18px;
}

.header .menu-icon .navicon:before,
.header .menu-icon .navicon:after {
  background: rgb(251, 251, 251);
  content: '';
  display: block;
  height: 100%;
  position: absolute;
  transition: all 0.2s ease-out;
  width: 100%;
}

.header .menu-icon .navicon:before {
  top: 5px;
}

.header .menu-icon .navicon:after {
  top: -5px;  
}

.header .menu-btn {
  display: none;
}

.header .menu-btn:checked ~ .menu {
  max-height: 240px;
}

.header .menu-btn:checked ~ .menu-icon .navicon {
  background: transparent;
}

.header .menu-btn:checked ~ .menu-icon .navicon:before {
  transform: rotate(-45deg);
}

.header .menu-btn:checked ~ .menu-icon .navicon:after {
  transform: rotate(45deg);
}

.header .menu-btn:checked ~ .menu-icon:not(.steps) .navicon:before,
.header .menu-btn:checked ~ .menu-icon:not(.steps) .navicon:after {
  top: 0;
}
/* 48em = 768px */
@media (min-width: 55em) {
  .header li {
    float: left;
  }
  .header li a {
    padding: 20px 30px;
  }
  .header .menu {
    clear: none;
    
    float: right;
    max-height: none;
  }
  .header .menu-icon {
    display: none;
  }  
}
@media (max-width:900px){
  .header .menu {background-color: #333;
  margin-left: 5%;
  font-size: 16px;
  color:white;
  }
  .nav-item:hover {
  font-family: Roboto;
  font-size: 17px;
}
.link-1:hover {  
  border-top: 0px solid rgb(95, 95, 95);   
}
}
</style>
