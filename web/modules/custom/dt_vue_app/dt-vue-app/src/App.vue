<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <TestComponent msg="Welcome to MY Vue.js App"/>
  <PostForm @create="addPost" />
  <PostList v-bind:posts="posts" />

</template>

<script>
import TestComponent from "@/components/TestComponent.vue";
import PostForm from "@/components/PostForm.vue";
import PostList from "@/components/PostList.vue";

export default {
  name: 'App',
  components: {
    PostList,
    PostForm,
    TestComponent
  },
  data() {
    return {
      posts: [
        {id: 1, title: 'Title 1'},
        {id: 2, title: 'Title 2'},
        {id: 3, title: 'Title 3'},
        {id: 4, title: 'Title 4'},
      ],
    }
  },
  methods: {
    addPost(post) {
      this.posts.push(post);
    }
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
