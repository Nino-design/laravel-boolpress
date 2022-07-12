<template>
    <div class="container text-center">
        <h1>
            Lista posts
        </h1>
        <div class="row">
            <div v-for="post in posts" :key="post.id" class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ post.title }}}</h5>
                        <p class="card-text">{{ post.content }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    name: 'Posts',
    data() {
        return {
            posts: []
        }
    },
    created() {
        this.getPosts();
    },
    methods: {
        getPosts() {
            axios.get('http://127.0.0.1:8000/api/posts').then((resp) => {
                this.posts = resp.data.results;
            });

        }
    },
}
</script>

<style>
</style>