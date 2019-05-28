<template>
  <div class="header">
    <nuxt-link to="/">
      <div class="logo">
        <img class="logo" src="~/assets/images/yugo-tamno.png" alt="logo">
      </div>
    </nuxt-link>
    <input class="menu-btn" type="checkbox" id="menu-btn">
    <label class="menu-icon" for="menu-btn">
      <span class="navicon"></span>
    </label>
    <ul class="menu">
      <li class="nav-item">
        <nuxt-link to="/">HOME</nuxt-link>
      </li>
      <li class="nav-item">
        <nuxt-link to="/Vehicles">VEHICLES</nuxt-link>
      </li>
      <li class="nav-item">
        <nuxt-link to="/About Us">ABOUT US</nuxt-link>
      </li>

      <template v-if="authenticated">
        <b-nav-item-dropdown>
          <template slot="button-content">{{user.name}}</template>
          <b-dropdown-item @click.prevent="signOut">Izlogiraj Se</b-dropdown-item>
        </b-nav-item-dropdown>
      </template>
      <template v-else>
        <li class="nav-item">
          <nuxt-link class="register" to="/auth/register">REGISTER</nuxt-link>
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
/* header */

.header {
  background-color: rgba(0, 0, 0, 0);
  box-shadow: 1px 1px 4px 0 rgba(0, 0, 0, 0);
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
  color: #fff;
  font-weight: bold;
  text-shadow: 2px 2px 4px #333;
  transition: all 0.2s ease-in-out;
}

.header li a:hover,
.header .menu-btn:hover {
  color: rgb(235, 235, 235);

  transform: scale(1.1);
}

.header li a.register {
  color: #1161ee;
  text-shadow: 0 0 0;
}

.header li a.register:hover {
}

.logo {
  width: 150px;
  margin-left: 5px;
  display: inline-block;
  vertical-align: middle;
}

.nav-item {
  font-family: Roboto;
  font-size: 18px;
}

/* menu */

.header .menu {
  clear: both;
  max-height: 0;
  transition: max-height 0.2s ease-out;
  background-color: rgba(0, 0, 0, 0);
}

/* menu icon */

.header .menu-icon {
  cursor: pointer;
  display: inline-block;
  float: right;
  padding: 28px 20px;
  position: relative;
  user-select: none;
}

.header .menu-icon .navicon {
  background: #333;
  display: block;
  height: 2px;
  position: relative;
  transition: background 0.2s ease-out;
  width: 18px;
}

.header .menu-icon .navicon:before,
.header .menu-icon .navicon:after {
  background: #333;
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

/* menu btn */

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

@media (min-width: 48em) {
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
</style>
