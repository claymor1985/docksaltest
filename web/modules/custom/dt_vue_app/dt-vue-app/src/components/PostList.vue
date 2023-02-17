<template>
  <div class="posts" >
    <post-item :post="post" v-for="post in posts"/>
  </div>
</template>

<script>
import PostItem from "@/components/PostItem.vue";

export default {
  name: "PostList",
  components: {PostItem},
  props: {
    posts: Array,
    required: true,
  }
}
</script>

<style scoped>

</style>
