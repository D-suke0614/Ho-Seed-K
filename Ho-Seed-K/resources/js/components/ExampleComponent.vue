<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Laravel Vue.js</div>

          <div class="card-body">I'm challenger</div>
        </div>


<div id="contents">
    <div class="tab_box">
      <ul class="tab_list">
        <li v-on:click="change('A')" v-bind:class="{'active': isActive === 'A'}">タブ1</li>
        <li v-on:click="change('B')" v-bind:class="{'active': isActive === 'B'}">タブ2</li>
        <li v-on:click="change('C')" v-bind:class="{'active': isActive === 'C'}">タブ3</li>
      </ul>
 
      <ul class="article">
        <li v-if="isActive === 'A'">ダミーテキスト1</li>
        <li v-else-if="isActive === 'B'">ダミーテキスト2</li>
        <li v-else-if="isActive === 'C'">ダミーテキスト3</li>
      </ul>
    </div>
 
  </div>


      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
};

// new Vue({
//   el: '#contents',
//   data: {
//     isActive: '1'
//   },
//   methods: {
//     change: function(num){
//       this.isActive = num
//     }
//   }
// })
</script>

<style lang="" scoped>
 
</style>
