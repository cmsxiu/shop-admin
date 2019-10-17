<template>
  <div id="app">
    <mt-header fixed title="女神秀-做你自己的女神"></mt-header>
    <router-view />
    <h3>测试内容</h3>
    <mt-tabbar>
      <mt-tab-item id="首页">
		<i class="icon iconfont" slot="icon">&#xe6b8;</i>
        首页
      </mt-tab-item>
      <mt-tab-item id="分类">
		<i class="icon iconfont" slot="icon">&#xe729;</i>
        分类
      </mt-tab-item>
      <mt-tab-item id="购物车">
		<i class="icon iconfont" slot="icon">&#xe7d8;</i>
        购物车
      </mt-tab-item>
      <mt-tab-item id="我的">
		<i class="icon iconfont" slot="icon">&#xe78b;</i>
        我的
      </mt-tab-item>
    </mt-tabbar>
  </div>
</template>
<script>
	export default {
		name: 'app',
		data(){
			return {}
		},
		methods: {
			say: () => {
				var a = 123
				var b = 234
				console.table({a,b})
			}
		},
		created() {
			this.say()
		}
	}
</script>
<style>
	@import url("./assets/icon/iconfont.css");
	h3 {
	  padding-top: 40px;
	}

</style>
