import Vue from 'vue'
import Router from 'vue-router'
// 引入组件
import Home from '@/components/tabbar/Home'
import Member from '@/components/tabbar/Member'
import Cart from '@/components/tabbar/Cart'
import Search from '@/components/tabbar/Search'

import NewsList from '@/components/news/NewsList'
import NewsInfo from '@/components/news/NewsInfo'

import PhotoList from '@/components/photos/PhotoList'
import PhotoInfo from '@/components/photos/PhotoInfo'

import GoodsList from '@/components/classify/GoodsList'
import GoodsInfo from '@/components/classify/GoodsInfo'
import GoodsDesc from '@/components/classify/GoodsDesc'
import GoodsComment from '@/components/classify/GoodsComment'

Vue.use(Router)

export default new Router({
  routes: [{
    path: '/',
    redirect: '/home'
  },
  {
    path: '/home',
    component: Home
  },
  {
    path: '/home/newsList',
    component: NewsList
  },
  {
    path: '/home/newsinfo/:id',
    component: NewsInfo
  },
  {
    path: '/home/photolist',
    component: PhotoList
  },
  {
    path: '/home/photoinfo/:id',
    component: PhotoInfo
  },
  {
    path: '/home/classify',
    component: GoodsList
  },
  {
    path: '/home/goodsinfo/:id',
    component: GoodsInfo
  },
  {
    path: '/home/goodsdesc/:id',
    component: GoodsDesc,
    name: 'goodsdesc'
  },
  {
    path: '/home/goodscomment/:id',
    component: GoodsComment,
    name: 'goodscomment'
  },
  {
    path: '/member',
    component: Member
  },
  {
    path: '/cart',
    component: Cart
  },
  {
    path: '/search',
    component: Search
  }
  ],
  linkActiveClass: 'mui-active'
})