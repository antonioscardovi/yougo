<template>
  <div class="container">
    <TheSidenav/>

    <section class="intro">
      <div class="about-page">
        <h1>This is my absolutely fantastic "About Us" Page!</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam officiis ab voluptatibus assumenda error quas deleniti eius? Suscipit, numquam? Quis aliquid non animi numquam amet voluptas dolorum sunt aspernatur commodi?</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam officiis ab voluptatibus assumenda error quas deleniti eius? Suscipit, numquam? Quis aliquid non animi numquam amet voluptas dolorum sunt aspernatur commodi?</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam officiis ab voluptatibus assumenda error quas deleniti eius? Suscipit, numquam? Quis aliquid non animi numquam amet voluptas dolorum sunt aspernatur commodi?</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam officiis ab voluptatibus assumenda error quas deleniti eius? Suscipit, numquam? Quis aliquid non animi numquam amet voluptas dolorum sunt aspernatur commodi?</p>
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
  background-image: url(~assets/Images/audi3.jpg);
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
  padding: 30px;
  position: relative;
  padding: 30px;
  box-sizing: border-box;
}

.about-page p {
  color: black;
}
</style>
