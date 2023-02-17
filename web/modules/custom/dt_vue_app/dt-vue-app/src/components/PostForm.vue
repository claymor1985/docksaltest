<template>
  <div>
    <form @submit.prevent>
      <input type="text" placeholder="title" v-model="post.title"/>
      <button @click="addPost">Add post</button>
    </form>
  </div>
</template>

<script>
export default {
  name: "PostForm",
  data() {
    return {
      post: {
        id: '',
        title: '',
      }
    }
  },
  methods: {
    addPost(event) {
      this.post.id = Date.now();
      this.$emit('create', this.post)

      this.post = {id: '', title: ''};
    }
  }
}
</script>

<style scoped>

</style>
