<template>
  <div class="container-slide">
    <autocomplete :search="search"></autocomplete>
    <div class="containter-column">
      <div class="slide" v-for="test in tests" :key="test.id">
        <h2>
          <a v-bind:href="'/test/' + test.id" class="test-name">{{
            test.name
          }}</a>
        </h2>
        <p class="source" v-if="test.source">
          {{ test.source }}
        </p>
        <p class="source" v-else>Отсутствует</p>
        <div class="rightSlideBlock">
          <p class="descrip">
            {{ test.description }}
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["tests"],
  mounted() {
    console.log(this.tests);
  },
  methods: {
    search(input) {
      if (input.length < 1) {
        return [];
      }
    },
  },
};
</script>

<style scoped>
.container-slide {
  padding: 3% 9%;
}
.containter-column{
  display: flex;
}
h2 {
  margin-bottom: 2px;
  font-size: 1.33333rem;
}
.slide {
  border-radius: 10px;
  /* margin-top: 10px; */
  /* padding: 30px; */
  padding-left: 60px;
  padding-top: 30px;
  display: flex;
  flex-direction: column;
}
.source {
  color: rgba(0, 0, 0, 0.5);
  margin: 0;
  font-size: 0.7em;
  text-transform: uppercase;
  /* font-family: montserrat,"Helvetica Neue",Helvetica,Arial,sans-serif; */
}
.test-name {
  text-decoration: none;
  color: black;
  font-size: 16px;
  /* font-size: 1.33333rem;
  font-weight: bold;
  font-style: italic; */
  font-family: "Open Sans", sans-serif;
  font-weight: bold;
  /* letter-spacing: 1px; */
}
.rightSlideBlock {
  display: inline-block;
  width: 454px;
}
.nameSlideBlock {
  font-size: 18px;
  font-weight: bold;
}
.leftSlideBlock {
  margin-left: 5%;
  display: inline-block;
}
.slideBlock {
  width: 46%;
  display: inline-block;
}
.btn-blue {
  font-size: 15px;
  margin: 10px;
  padding: 14px 16px;
  background: #015bff;
  color: white;
  text-decoration: none;
}
.btn-container-center {
  width: 100%;
  display: flex;
  justify-content: center;
}
.descrip {
  font-family: "Open Sans", sans-serif;
  line-height: 27px;
  padding-left: 15px;
  /* font-size: 1.125em; */
  font-size: 14px;
  font-weight: 400;
}
</style>