<template>
  <div class="container">
    <TheSidenav/>

    <section class="intro">
      <div class="about-page">
        <h1> Ovo je naša priča </h1>
      </div>
    </section>
  </div>
</template>

<script>
import TheSidenav from '~/components/Navigation/TheSidenav.vue'
export default {
  components: {
    TheSidenav
  }
}
</script>

<style scoped>
.container {

  background-size: cover;
  background-position: center;
  padding-top: 100px;
  min-height: 100vh;
}

.intro {
  height: auto;
  position: relative;
  padding: 30px;
  box-sizing: border-box;
}

.about-page {
  text-align: center;
  padding-top:200px;
  margin-top: -10%;
  height:500px;

  box-sizing: border-box;
  background-color: #0054db;
}

.about-page p {
  color: black;
}
</style>
