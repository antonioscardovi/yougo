<template>
  <div class="container">
    <TheSidenav/>
    <span>Hello world</span>
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
  padding-top: 100px;
  min-height: 100vh;
  background-image: url('~assets/Images/audi1.jpg');
  background-size: cover;
}
</style>
