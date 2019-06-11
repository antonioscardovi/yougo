<template>
  <div class="top">
    <TheSidenav/>
    <PostList/>
    <!-- <div class="bot"></div> -->
  </div>
</template>
<script>
import PostList from '@/components/Posts/PostList'
import TheSidenav from '~/components/Navigation/TheSidenav.vue'
export default {
  components: {
    TheSidenav,
    PostList
  }
}
</script>
<style scoped>
.top {
  margin-top: 75px;
}
.bot {
  margin-bottom: 300px;
}
</style>
