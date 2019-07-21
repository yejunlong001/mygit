<template>
  <div class="wrap">
    <!-- menu -->
    <div class="menu">
      <div class="logo">CIIC</div>
      <div class="list">
        <ul>
          <li>
            <b><em class="icon1"></em>基础数据管理</b>
            <div>
              <span>字典类型管理</span>
              <span>收费项目管理</span>
            </div>
          </li>
          <li>
            <b><em class="icon1"></em>人员组织管理</b>
            <div>
              <span>基础数据管理</span>
              <span>基础数据管理</span>
            </div>
          </li>
          <li>
            <b><em class="icon1"></em>权限管理</b>
            <div>
              <span>基础数据管理</span>
              <span>基础数据管理</span>
            </div>
          </li>
          <li>
            <b><em class="icon1"></em>预警管理</b>
            <div>
              <span>基础数据管理</span>
              <span>基础数据管理</span>
            </div>
          </li>
          <li>
            <b><em class="icon1"></em>特殊操作</b>
            <div>
              <span>基础数据管理</span>
              <span>基础数据管理</span>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <!-- header -->
    <div class="header"></div>

    <!-- content -->
    <div class="content">
      <div class="product"></div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'home',
  data () {
    return {
      msg: ''
    }
  },
  mounted(){
     $('.menu ul li b').click(function(){
          console.log(this);
          $(this).next().slideToggle();
     });
  },
}
</script>


<style>
@import "./../assets/css/publicStyle.css";
</style>
