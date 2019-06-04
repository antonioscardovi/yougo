<template>
    <form @submit.prevent="onSubmit">
        <input type="text" v-model="text"
        placeholder="Pretrazite Vozila...">
        <input type="submit" value="Pretrazite Vozila">
    </form>
</template>

<script>
export default {
    name:'SearchVehicles',
    data(){
        return {
            text:''
        }
    },
    methods: {
        onSubmit(){
            this.$emit('search-text', this.text);
            this.text = "";
        }
    }
};
</script>

<style>

</style>
