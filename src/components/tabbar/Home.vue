<template>
  <div>
    <my-swiper :lunbotu="lunbotu" :isfull="true"></my-swiper>
    <div class="homeNav">
      <ul>
        <li>
          <router-link to="/home/newslist" tag="a">
            <img src="../../assets/icon/menu1.png" alt="" />
            <p>新闻资讯</p>
          </router-link>
        </li>
        <li>
          <router-link to="/home/photolist" tag="a">
            <img src="../../assets/icon/menu2.png" alt="" />
            <p>图片分享</p>
          </router-link>
        </li>
        <li>
          <router-link to="/home/classify" tag="a">
            <img src="../../assets/icon/menu3.png" alt="" />
            <p>商品购买</p>
          </router-link>
        </li>
        <li>
          <router-link to="/home/newslist" tag="a">
            <img src="../../assets/icon/menu4.png" alt="" />
            <p>留言反馈</p>
          </router-link>
        </li>
        <li>
          <router-link to="/home/newslist" tag="a">
            <img src="../../assets/icon/menu5.png" alt="" />
            <p>视频专区</p>
          </router-link>
        </li>
        <li>
          <router-link to="/home/newslist" tag="a">
            <img src="../../assets/icon/menu6.png" alt="" />
            <p>联系我们</p>
          </router-link>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
import mySwiper from '../tabbar/swiper'
export default {
  data() {
    return {
      lunbotu: [],
    }
  },
  created() {
    this.getLunbotu()
  },
  methods: {
    getLunbotu() {
      const url = 'http://www.18t.net/vueProject/getlunbo.php'
      this.$http.get(url).then((res) => {
        this.lunbotu = res.body
      })
    },
  },
  components: {
    mySwiper,
  },
}
</script>
<style lang="scss" scoped>
/*导航*/
.homeNav {
  height: 200px;
  ul {
    width: 100%;
    padding: 3% 0;
    li {
      width: 33.3333%;
      float: left;
      height: 100px;
      a {
        display: block;
        height: 70px;
        text-align: center;
        color: #666;
        text-decoration: none;
        img {
          width: 50px;
          height: 50px;
          display: block;
          margin: 0 auto;
        }
        p {
          display: block;
          height: 40px;
          line-height: 40px;
          text-align: center;
          font-size: 0.9rem;
        }
      }
    }
  }
}
</style>
