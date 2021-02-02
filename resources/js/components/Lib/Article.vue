<template>
  <div class="container-slide">
    <h1>{{ article.title }}</h1>
    <div v-for="chapter in article.chapter" :key="chapter.id">
      <h2 class="chapter-title">{{ chapter.title }}</h2>
   <div v-html="chapter.body" class="soub-chapte-body"></div>
      <div v-for="subChapter in chapter.sub_chapter" :key="subChapter.id">
        <h3 class="sub-chapter-title"><span>{{ subChapter.title }}</span></h3>
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
.container-slide {
  padding: 3% 31%;
}
h1 {
  letter-spacing: -0.02em;
  text-align: center;
  font-family: "Helvetica Neue", sans-serif;
  letter-spacing: 1px;
}
.chapter-title {
  font-family: "Helvetica Neue", sans-serif;
  letter-spacing: 1px;
  text-align: center;

}
h3 span {
    background:#fff; 
    padding:0 10px; 
}
.sub-chapter-title {
    font-family: "Helvetica Neue", sans-serif;
    /* font-family: "Georgia", sans-serif; */
    text-align: center;
    border-bottom: 1px solid #555;
    line-height: 0.1em;
    margin: 35px 0 35px;
    letter-spacing: 1px;
}
.soub-chapte-body{
    /* text-align: justify; */
    font-size: 16px;
    font-family: "Verdana ", sans-serif;
    line-height: 25px;
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