<template>
  <div class="container-slide">
    <h1>{{ article.title }}</h1>
    <div v-for="chapter in article.chapter" :key="chapter.id">
      <h2 class="chapter-title">{{ chapter.title }}</h2>
   <div v-html="chapter.body" class="soub-chapte-body"></div>
      <div v-for="subChapter in chapter.sub_chapter" :key="subChapter.id">
        <span class="sub-chapter-title">{{ subChapter.title }}</span>
            <div v-html="subChapter.body" class="soub-chapte-body"></div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["article"],
  data() {
    return {
      data: [],
    };
  },
  mounted() {
    console.log(this.article);
  },
  methods: {},
};
</script>
<style scoped>
.container-slide {
  padding: 3% 14%;
}
h1 {
  text-align: center;
  font-family: "Georgia", sans-serif;
}
.chapter-title {
  font-family: "Georgia", sans-serif;
  font-size: 24px;
}
.sub-chapter-title {
  font-family: "Georgia", sans-serif;
  font-size: 20px;
}
.soub-chapte-body{
    text-align: justify;
  font-size: 15px;
  font-family: "Roboto", sans-serif;
  line-height: 23px;
}
p {
  text-align: justify;
  font-size: 15px;
  font-family: "Roboto", sans-serif;
  line-height: 23px;
}
.title {
  font-size: 18px;
  font-weight: 600;
  font-style: italic;
  font-family: "Georgia", sans-serif;
  color: black;
  text-decoration: none;
}
.article-body {
  font-size: 14px;
  line-height: 23px;
  font-family: "Roboto", sans-serif;
}
.article-author {
  font-style: italic;
  font-size: 14px;
  font-family: "Georgia", sans-serif;
}
.slide {
  margin-top: 10px;
  padding: 30px;
  background-color: white;
  border-bottom: 2px solid rgba(0, 0, 0, 0.1);
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2), 0 10px 10px rgba(0, 0, 0, 0.2);
}
</style>