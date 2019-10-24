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

Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  components: { App },
  template: '<App/>'
})
