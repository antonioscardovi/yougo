<template>
  <section class="container">
      <section class="intro">
        <div class="about-page">
            <h1>This is my absolutely fantastic "About Us" Page!</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam officiis ab voluptatibus assumenda error quas deleniti eius? Suscipit, numquam? Quis aliquid non animi numquam amet voluptas dolorum sunt aspernatur commodi?</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam officiis ab voluptatibus assumenda error quas deleniti eius? Suscipit, numquam? Quis aliquid non animi numquam amet voluptas dolorum sunt aspernatur commodi?</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam officiis ab voluptatibus assumenda error quas deleniti eius? Suscipit, numquam? Quis aliquid non animi numquam amet voluptas dolorum sunt aspernatur commodi?</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam officiis ab voluptatibus assumenda error quas deleniti eius? Suscipit, numquam? Quis aliquid non animi numquam amet voluptas dolorum sunt aspernatur commodi?</p>
        </div>
    </section>
  </section>
</template>

<script>
 

export default {
  components: {
    
  }
}
</script>

<style scoped>


.container {
     background-image: url("~assets/images/audi3.jpg");
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
 
}

.intro {
  height: auto;
  position: relative;
  padding: 30px;
  box-sizing: border-box;
  background-color:wheat;
}

.about-page {

  text-align: center;
  padding: 30px;
  position: relative;
  padding: 30px;
  box-sizing: border-box;
  
}

.about-page p{
    color: black;
}
</style>
