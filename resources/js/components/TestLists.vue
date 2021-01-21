<template>
  <div class="container-slide">
    <autocomplete :search="search"></autocomplete>
    <div class="slide" v-for="test in tests" :key="test.id">
      <h2 ><a v-bind:href="'/test/'+ test.id" class="test-name">{{test.name}}</a></h2>
      <div class="rightSlideBlock">
        <span class="nameSlideBlock">Description:</span>
        <p class="descrip">
          {{test.description}}
        </p>
      </div>
      <div class="leftSlideBlock">
        <div class="slideBlock">
          <span class="nameSlideBlock">Source:</span>
          <p class="descrip" v-if="test.source">
            {{test.source}}
          </p>
          <p class="descrip" v-else>
            Отсутствует
          </p>
        </div>
        <div class="slideBlock" >
          <span class="nameSlideBlock">Other:</span>
          <p class="descrip" v-if="test.other">
            {{test.other}}
          </p>
          <p class="descrip" v-else>
            Отсутствует
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
.container-slide{
  padding: 3% 14%;
}
.slide {
    border-radius: 10px;
    margin-top: 10px;
    padding: 30px;
    background-color: white;
    border-bottom: 2px solid rgba(0, 0, 0, 0.1);
    box-shadow: 0 15px 30px rgba(0,0,0,0.2), 0 10px 10px rgba(0,0,0,0.2);
}
.test-name {
  text-decoration: none;
  color: #015bff;
  font-size: 35px;
  font-weight: bold;
  font-family: 'Georgia', sans-serif;
}
.rightSlideBlock {
  display: inline-block;
  width: 45%;
}
.nameSlideBlock {
  font-size: 18px;
  font-weight: bold;
}
.leftSlideBlock {
  margin-left: 5%;
  width: 45%;
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
  color: rgba(0, 0, 0, 0.5);
  line-height: 24px;
}
</style>