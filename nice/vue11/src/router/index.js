import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import Home from '@/page/home'
import Index from '@/page/index'
const Speed = ()=> import('@/page/speed')
const Speed2 = ()=> import('@/page/speed2')
Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/index',
      name: 'index',
      component: Index
    },
    {
      path: '/speed',
      name: 'speed',
      component: Speed
    },
    {
      path: '/speed2',
      name: 'speed2',
      component: Speed2
    }
  ]
})
