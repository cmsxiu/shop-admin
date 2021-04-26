<template>
  <div id="app">
    <mt-header title="女神秀-做你自己的女神" fixed>
      <a slot="left" @click="goBack">
        <mt-button icon="back"></mt-button>
      </a>
    </mt-header>
    <transition mode="out-in">
      <router-view />
    </transition>
    <Footer></Footer>
  </div>
</template>
<script>
import Footer from './components/Footer'
export default {
  name: 'app',
  data() {
    return {
      seleted: 'home',
    }
  },
  methods: {
    goBack() {
      this.$router.go(-1)
    },
  },
  watch: {
    seleted(newval, oldval) {
      //   console.log({ newval, oldval })
      switch (newval) {
        case 'home':
          this.$router.push({
            path: '/home',
          })
          break
        case 'member':
          this.$router.push({
            path: '/member',
          })
          break
        case 'cart':
          this.$router.push({
            path: '/cart',
          })
          break
        case 'search':
          this.$router.push({
            path: '/search',
          })
          break
      }
    },
  },
  components: {
    Footer,
  },
}
</script>
<style lang="scss">
@import url('./assets/icon/iconfont.css');
* {
  margin: 0;
  padding: 0;
  list-style: none;
  /* text-decoration: none; */
  /* font-size: 12px; */
}
body {
  background-color: #fff !important;
}
#app {
  padding: 40px 0 55px;
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
.mint-tabbar {
  .mint-tab-item.is-selected {
    background-color: transparent;
  }
}
</style>
