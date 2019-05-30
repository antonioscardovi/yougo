<template>
<div>
 <TheSidenav/>
<PostList :vehicles="loadedPosts" />
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
</style>
