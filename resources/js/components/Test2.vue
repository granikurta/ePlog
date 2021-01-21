<template>

  <div class="container">
    <div class="test-blank" >
      <spinner size="huge" v-if="loading"></spinner>
      <div v-if="blank">
          <div class="test-name">
            {{tests.name}}
          </div>
        <div class="title">
          {{step}} из {{tests.question.length}} вопросов
        </div>
        <div class="title">
          {{tests.title}}
        </div>
        <div class="question">
          {{tests.question[step].text}}
        </div>
        <form @submit.prevent="step++">
            <label  class="option red" v-for="(option, value)  in tests.option" :key="option.id" >
              <input  type="radio" name="option"  :value="value"  v-model="answer[step]" required>
                <span> {{option.text}}</span>
            </label >
            <input class="next" type="submit" value="Next" v-if="step != tests.question.length-1" />
            <input class="next" type="submit" value="Finish"  @click="getResult" v-else />
        </form>
      </div>
      <div class="char" v-if="result">
        <div class="test-name" >
          Результаты:
        </div>
        <echart :data="resultData" label-rotate> </echart>
    </div>
        <div class="description" v-if="description.length != 0 ">
            {{description['description']}}
        </div>
    </div>

   
  </div>
</template>

<script>
export default {
  props: ["tests"],
  data() {
    return {
      loading: false,
      checked:'',
      step: 0,
      answer: {},
      result: false,
      blank: true,
      description: [],
      resultData: [
        {
        name: "学生人数",
        data: []
        }
      ],

    };
  },
  mounted() {
    //console.log(this.tests);
  },
  methods: {
    getResult() {
       this.blank = false;
       this.loading = true;
      axios
        .post("/api/test/" + this.tests.id + "/result", {
          id: this.tests.id,
          data: this.answer,
          code: this.tests.code,
        })
        .then((resp) => {
          console.log(resp.data);
          this.resultData[0].data = resp.data.scales;
          this.description = resp.data.other;
        })
        .finally(() => (this.loading = false, this.result = true));
    },
  },
};
</script>

<style scoped>
.description{
    width: 100%;
  height: 150px;
  padding-top: 30px;
}
.char{
  width: 100%;
  height: 500px;
}
.echarts {
  width: 100%;
  height: 100%;
}
body{
  height: 100%;
}
.row {
  font-size: 19px;
 border-bottom: 1px solid black;

}
.test-name {
    font-family: 'Noto Sans', sans-serif;
    text-align: center;
  font-size: 30px;
  font-weight: 600;
}
.head {
  padding: 10px;
}
.check {
  width: 100%;
}
table {
  width: 100%;
  border-collapse: collapse;
}
.container {
  padding: 60px 200px;
}
.test-blank {
  box-shadow: 0 15px 30px rgba(0,0,0,0.2), 0 10px 10px rgba(0,0,0,0.2);
  padding: 30px;
  background-color: #ffffff;
}
.title{
  text-align: center;
  padding: 15px;
  height: 20px;
  font-size: 19px;
  font-weight: 600;
}
.question {
  /* font-size: 1.3em; */
    /* text-align: center; */
padding: 15px;
  height: 20px;
  font-size: 19px;
  font-weight: 600;
}
.next{
  display: block;
  width: 100%;
color: #DF5C2E !important;
text-transform: uppercase;
text-decoration: none;
background: #ffffff;
padding: 20px;
border: 4px solid #DF5C2E !important;
display: inline-block;
  margin-top: 15px;
   transition: all 0.25s ease-in-out;
     letter-spacing: 1px;
       font-family: 'Lato', Helvetica, Arial, sans-serif;
       font-size: 1.15em;
}
.next:hover{
  color: #ffffff !important;
  background: #DF5C2E;
  border-color: #DF5C2E !important;
}
.next:active {
  background-color: #DF5C2E;
  border-color: #df5c2e;
  color: #ffffff;
  box-shadow: none;
}
.option {
  font-weight: 600;
  border: none;
  outline: none;
  width: 100%;
  text-align: left;
  background: transparent;
  font-size: 18px;
  display: block;
  padding: 15px;
}
.next:focus, .next:active:focus {

  outline: 5px auto #DF5C2E;
}
.next:visited {
  background-color: #ffffff;
  border-color: #DF5C2E;
   color: #DF5C2E;
}
</style>