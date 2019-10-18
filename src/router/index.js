import Vue from 'vue'
import Router from 'vue-router'
// 引入组件
import Home from '@/components/Home'
import Member from '@/components/Member'
import Cart from '@/components/Cart'
import Search from '@/components/Search'

Vue.use(Router)

export default new Router({
	routes: [
		{
			path: '/',
			redirect: '/home'
		},
		{
			path: '/home',
			component: Home
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
	]
})
