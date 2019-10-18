<template>
  <div id="app">
    <mt-header fixed title="女神秀-做你自己的女神"></mt-header>
    <transition mode="out-in">
      <router-view />
    </transition>
    <mt-tabbar v-model="seleted">
      <mt-tab-item id="home">
        <i class="icon iconfont" slot="icon">&#xe6b8;</i>
        首页
      </mt-tab-item>
      <mt-tab-item id="member">
        <i class="icon iconfont" slot="icon">&#xe78b;</i>
        会员
      </mt-tab-item>
      <mt-tab-item id="cart">
        <i class="icon iconfont" slot="icon">&#xe7d8;</i>
        购物车
      </mt-tab-item>
      <mt-tab-item id="search">
        <i class="icon iconfont" slot="icon">&#xe65c;</i>
        搜索
      </mt-tab-item>
    </mt-tabbar>
  </div>
</template>
<script>
export default {
  name: "app",
  data() {
    return {
      seleted: "home"
    };
  },
  watch: {
    seleted(newval, oldval) {
      console.log({ newval, oldval });
      switch (newval) {
        case "home":
          this.$router.push({
            path: "/home"
          });
          break;
        case "member":
          this.$router.push({
            path: "/member"
          });
          break;
        case "cart":
          this.$router.push({
            path: "/cart"
          });
          break;
        case "search":
          this.$router.push({
            path: "/search"
          });
          break;
      }
    }
  }
};
</script>
<style>
@import url("./assets/icon/iconfont.css");
* {
  margin: 0;
  padding: 0;
  list-style: none;
  text-decoration: none;
  font-size: 12px;
}
#app {
  padding-top: 40px;
  overflow-x: hidden;
}
/* 动画 */
.v-enter {
  opacity: 0;
  transform: translateX(100%);
}

.v-leave-to {
  opacity: 0;
  transform: translateX(-100%);
  position: absolute;
}

.v-enter-active,
.v-leave-active {
  transition: all 0.3s ease;
}

.mint-tabbar > .mint-tab-item.is-selected {
	background-color: transparent  ;
}
</style>
