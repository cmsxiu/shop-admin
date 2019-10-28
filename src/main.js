// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'

// 引入 ElementUI
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-chalk/index.css'
Vue.use(ElementUI)

// 引入 MintUI
import MintUI from 'mint-ui'
import 'mint-ui/lib/style.css'

Vue.use(MintUI)

// 引入 VueResource
import VueResource from 'vue-resource'
Vue.use(VueResource)
// 全局配置接口地址
Vue.http.options.root = 'http://it.cmsxiu.com'
// 全局配置 psot 时候表单数据格式组织形式
Vue.http.options.emulateJSON = true

/* import axios from 'axios'
import VueAxios from 'vue-axios'
Vue.use(VueAxios, axios) */

// 导入 MUI 的样式
import './lib/mui/css/mui.min.css'
// 导入扩展图标样式
import './lib/mui/css/icons-extra.css'

// 导入 vue-review
import VuePreview from 'vue-preview'
// defalut install
Vue.use(VuePreview)

// 导入 vuex
import Vuex from 'vuex'
Vue.use(Vuex)

var car = JSON.parse(localStorage.getItem('car') || '[]')

var store = new Vuex.Store({
  state: {
    // this.$store.state.****
    car: car // 将购物车中的商品的数据，用一个数组存储其他，在car数组中存储一些商品的对象，咱们暂时可以将这个商品对象，设计成这个样子 {id：商品id，count：要购买的数量，price：商品的单价，selected：状态}
  },
  mutations: {
    // this.$store.mutations.****
    addToCar(state, goodsinfo) {
      // 点击加入购物车，把商品信息，保存到store中的car上
      /*
        分析：
        1. 如果购物车中，之前就已经有这个对应的商品了，那么只需要更新数量
        2. 如果没有，则直接把商品数据，push到car中即可

        假设 购物车中没有找到对应的商品
      */
      var flag = false
      state.car.some(item => {
        if (item.id == goodsinfo.id) {
          item.num += parseInt(goodsinfo.num)
          flag = true
          return true
        }
      })

      // 循环完毕后，没有得到falg，还是false，则直接把商品信息push到car中
      if (!flag) {
        state.car.push(goodsinfo)
      }

      // 存到本地，防止刷新购物车消失
      localStorage.setItem('car', JSON.stringify(state.car))
    },
    updateGoodsInfo(state, goodsinfo) {
      state.car.some(item => {
        if (item.id == goodsinfo.id) {
          item.num = parseInt(goodsinfo.num)
          return true
        }
      })
      localStorage.setItem('car', JSON.stringify(state.car))
    },
    removeCarList(state, id) {
      state.car.some((item, i) => {
        if (item.id == id) {
          state.car.splice(i, 1)
          console.log(ok)
          return true
        }
      })
      localStorage.setItem('car', JSON.stringify(state.car))
    }
  },
  getters: {
    // this.$store.getters.****
    getAllNumber(state) {
      var goodsNumber = 0
      state.car.forEach(item => {
        goodsNumber += item.num
      })
      return goodsNumber
    },
    getGoodsCount(state) {
      var o = {}
      state.car.forEach(item => {
        console.log(item.num)
        o[item.id] = item.num
      })
      return o
    }
  }
})

Vue.config.productionTip = false
Vue.config.devtools = true
/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  store,
  components: { App },
  template: '<App/>'
})
