<template>
<div class="col-4 mb-3">
    <div class="card">
        <img :src="post.image_url" class="card-img-top" :alt="post.title">
        <div class="card-body">
            <h5 class="card-title">{{post.title}}</h5>
            <p class="card-text">{{post.content}}</p>
            <a href="#" class="btn btn-primary">Vai al Post</a>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: 'Post',
    components: {},
    props: ['post'],
}
</script>

<style lang="scss" scoped>
div.card {
    width: 100%;
}
</style>