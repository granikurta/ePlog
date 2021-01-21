<template>
  <div class="container-slide">
    <div v-for="article in articles" :key="article.id">
      <a class="title" :href="'/lib/'+ article.id">{{ article.title }}</a>
      <p class="article-body" v-html="article.preview"></p>
      <p class="article-author">Author: {{ article.author }}</p>
      <p class="article-author">Source: {{ article.sources }}</p>
      <hr>
    </div>
  </div>
</template>

<script>
export default {
  props: ["articles"],
  data() {
    return {
      data: [],
    };
  },
  mounted() {
    console.log(this.articles);
  },
  methods: {},
};
</script>
<style scoped>
.container-slide {
    padding: 3% 14%;
}
hr{
    border-top: 1px solid #e5e5e5;
}
.title {
    font-size: 18px;
    font-weight: 600;
    font-style: italic;
    font-family: 'Georgia', sans-serif;
    color:black;
    text-decoration: none;
}
.article-body {
    font-size: 14px;
    line-height: 23px;
    font-family: 'Roboto', sans-serif
}
.article-author{
    font-style: italic;
    font-size: 14px;
    font-family: 'Georgia', sans-serif;
}
.slide {
  margin-top: 10px;
  padding: 30px;
  background-color: white;
  border-bottom: 2px solid rgba(0, 0, 0, 0.1);
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2), 0 10px 10px rgba(0, 0, 0, 0.2);
}
</style>