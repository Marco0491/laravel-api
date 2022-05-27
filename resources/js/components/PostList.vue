<template>
    <div class="container-fluid p-5">
        <div class="row justify-content-center">
            <Post v-for="(element, index) in postArray" :key="index" :post='element'/>
        </div>
    </div>
</template>

<script>
import Post from '../components/Post.vue';

export default {
    name: 'PostList',
    components: {
        Post,
    },
    data() {
        return{
            postArray: [],
        }
    },
    methods: {
        getPost() {
            axios.get('http://127.0.0.1:8000/api/post').then((result) => {this.postArray = result.data.data}).catch((error) => {console.warn(error)});
        }
    },
    created() {
        this.getPost();
    }
}
</script>

<style lang="scss" scoped>
</style>