<template>
  <div class="container">
    <div class="test-blank">
      <table>
        <caption class="test-name">
          {{
            tests.name
          }}
        </caption>
        <tr>
          <th>{{ tests.blank.title }}</th>
          <th
            v-for="optionName in tests.blank.options"
            :key="optionName"
            class="head"
          >
            {{ optionName }}
          </th>
        </tr>
        <tr
          v-for="(quest, numberQuest) in tests.blank.questions"
          :key="quest"
          class="row"
        >
          <td>{{ quest }}</td>
          <td v-for="(option, value) in tests.blank.options" :key="option">
            <input
              type="radio"
              :value="value"
              class="check"
              :id="'cs-bad-' + numberQuest"
              :name="'cs-' + numberQuest"
              v-model="answer[numberQuest]"
            />
          </td>
        </tr>
      </table>
      <input type="submit" value="asdasd" @click="getResult" />
    </div>
    <div class="char" >
      <chart    theme="ovilia-green" autoresize  :options="chartOptionsBar">></chart>
    </div>
   
  </div>
</template>

<script>
export default {
  props: ["tests"],
  data() {
    return {
      answer: {},
      result: false,
      chartOptionsBar: {
        xAxis: {
          data: ["Соматизация","Навязчивости","Сенситивность","Депрессия","Тревожность","Враждебность","Фобия","Паранойяльные","Психотизм"],
        },
        yAxis: {
          type: "value",
        },
        series: [
          {
            type: "bar",
            data: [63, 75, 24, 92],
          },
        ],

      },
    };
  },
  mounted() {
    console.log(this.tests);
  },
  methods: {
    getResult() {
      axios
        .post("/api/test/" + this.tests.id + "/result", {
          id: this.tests.id,
          data: this.answer,
        })
        .then((resp) => {
          this.chartOptionsBar.series[0].data = Object.values(resp.data);
          this.chartOptionsBar.xAxis.data = Object.keys(resp.data);
          console.log(resp.data);
          this.result = true;
        });
    },
  },
};
</script>
<style scoped>
.char{
    width: 100%;
    height: 500px;
}
.echarts {
  width: 100%;
  height: 100%;
}

.row {
  font-size: 19px;
 border-bottom: 1px solid black;

}
.test-name {
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
  padding: 10px 200px;
}
.test-blank {
  padding: 30px;
  background-color: #fafafa;
}
.question {
  padding: 15px;
  height: 20px;
  font-size: 19px;
}
.option {
  display: inline-block;
  justify-content: left;
}
</style>