<template>
  <div class="home">
  	<ul>
      <li @click='gotoIndex'>1</li>
      <li>2</li>
      <li>3</li>
      <li>4</li>
      <li>5</li>
      <li>6</li>
      <li>7</li>
      <li>8</li>
      <li>9</li>
     </ul>
  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  },
  methods:{
  	 gotoIndex(){
  	 	 this.$router.push({path:'/index'});
  	 },
  },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
 *{ padding: 0;margin: 0; list-style: none; }
 .home{
 	margin:30px auto;
 	width: 300px; 
 	height: 300px;
 	border: 1px #ff0000 solid;
 	overflow: hidden;
 }
 .home ul{ width: 110%; }
 .home ul li{ 
 	 width: 100px;
 	 height: 100px;
 	 line-height: 100px; 
 	 float: left; 
 	 border-right:1px #ff0000 solid; 
 	 border-bottom:1px #ff0000 solid; 
 	}
 .home ul li:hover{
 	 background: #eee;
 	 cursor: pointer;
 }
 
</style>
