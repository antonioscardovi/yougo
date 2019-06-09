<template>
<div class="top">
 <TheSidenav/>
<PostList :vehicles="loadedPosts" />
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
    },
    computed: {
    loadedPosts() {
      return this.$store.getters.loadedPosts
    },

  },

}
</script>
<style scoped>
.top{
  margin-top: 75px;
}
.bot{
  margin-bottom: 300px;
}
</style>
