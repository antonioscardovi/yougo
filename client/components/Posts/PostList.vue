<template>
  <section class="post-list">
    <PostPreview
      v-for="post in Vehicles"
      :key="post.id"
      :id="post.id"
      :type="post.type"
      :engine_power="post.engine_power"
      :door_number="post.door_number"
      :image="post.image"
      :description="post.description"
      :status="post.status" />
  </section>
</template>
<script>
import PostPreview from '@/components/Posts/PostPreview'
import axios from 'axios';
export default {
    data(){
        return {
            Vehicles: {},
        }
    },
    methods: {
    getVehicles() {
      axios.get('http://localhost/api/vehicles')
        .then((res) => {
          console.log(res);
          this.Vehicles = res.data.data;
        })
        .catch((error) => {
          // eslint-disable-next-line
          console.error(error);
        });
      },
    },
    created(){
        this.getVehicles();
    },
  components: {
    PostPreview
  },
}
</script>
<style scoped>
.post-list {
  display: flex;
  padding: 20px;
  box-sizing: border-box;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
}
</style>
