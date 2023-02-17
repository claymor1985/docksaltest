<template>
  <h2>{{ post.title }}</h2>
</template>

<script>
export default {
  name: "PostItem",
  props: {
    post: {
      id: '',
      title: ''
    },
    required: true
  }
}
</script>

<style scoped>

</style>
