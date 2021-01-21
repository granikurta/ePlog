<template>
  <div class="container-slide">
    <div class="slide">
        <p><span>Введённое  сообщение:</span></p>
        <textarea  v-model="data" placeholder="введите несколько строчек"></textarea>
       <p><input type="submit" @click="getResult"></p>
    </div>
  </div>
</template>
<style scoped>
.container-slide{
  padding: 10px 200px;
}
.slide {
    margin-top: 10px;
    padding: 30px;
    background-color: white;
    border-bottom: 2px solid rgba(0, 0, 0, 0.1);
    box-shadow: 0 15px 30px rgba(0,0,0,0.2), 0 10px 10px rgba(0,0,0,0.2);
}

</style>
<script lang="ts">
export default {
  data() {
    return {
        data: [],
    };
  },
  mounted() {
   
  },
  methods: {
    getResult() {
      axios.post("/api/test/refact", {
          data: this.data,
        })
        .then((resp) => {

        });
    },
  },
};
</script>