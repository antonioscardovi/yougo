<template>
  <div class="wrapper">
    <nuxt/>
    <TheFooter/>
  </div>
</template>


<script>
import TheFooter from '~/components/TheFooter.vue'

export default {
  components: {
    TheFooter
  }
}
</script>

<style>
html {
  font-family: 'Source Sans Pro', -apple-system, BlinkMacSystemFont, 'Segoe UI',
    Roboto, 'Helvetica Neue', Arial, sans-serif;
  font-size: 16px;
  word-spacing: 1px;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  box-sizing: border-box;
}

body {
  height: auto;
  max-width: 100%;
}

.wrapper {
  min-height: 100vh;
}
</style>
