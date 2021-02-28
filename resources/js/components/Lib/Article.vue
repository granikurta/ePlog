<template>
  <div class="article">

    <h1>{{ article.title }}</h1>
    <div v-for="chapter in article.chapter" :key="chapter.id">
      <h2 class="chapter-title">{{ chapter.title }}</h2>
   <div v-html="chapter.body" class="soub-chapte-body"></div>
      <div v-for="subChapter in chapter.sub_chapter" :key="subChapter.id">
        <h3 class="sub-chapter-title">{{ subChapter.title }}</h3>
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
    // console.log(this.article);
  },
  methods: {},
};
</script>
<style scoped>
.article{
  display: grid;  
    grid-template-columns: 1fr 740px 1fr;
}
.article > \* {  
    grid-column: 2;  
}
h1 {
  text-align: center;
  font-family: "Lora", sans-serif;
  color:#13022C;
  line-height: 54px;
  font-size: 43px;
  margin-bottom: 0;
  font-weight: bold;
}
.chapter-title {
  font-family: "Lora", sans-serif;
  text-align: center;
  margin-top: 54px;
  font-size: 32px;
  font-weight: bold;
  margin-bottom: 27px;
  color:#13022C;
  line-height: 54px;
}
h3 span {
    background:#fff; 
    padding:0 10px; 
}
.sub-chapter-title {
    font-family: "Lora", sans-serif;
    /* font-family: "Georgia", sans-serif; */
    text-align: center;
    font-size: 24px;
    color:#13022C;
     font-weight: bold;
     font-style: italic;
    line-height: 27px;
    margin-bottom: 14px;
}
.soub-chapte-body{
    /* text-align: justify; */
font-weight: 400;
  font-size: 18px;
  font-family: "Source Sans Pro", sans-serif;
  line-height: 27px;
  /* color:#13022C; */
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