<template>
  <div>
    <mt-swipe :auto="4000">
      <mt-swipe-item v-for="(item, key) in lunbotu" :key="item.id">
        <img :src="item.src" alt="">
      </mt-swipe-item>
    </mt-swipe>
    <div class="homeNav">
      <ul>
        <li>
          <a href="">
            <img src="../assets/icon/menu1.png" alt="">
            <p>新闻资讯</p>
          </a>
        </li>
        <li>
          <a href="">
            <img src="../assets/icon/menu2.png" alt="">
            <p>图片分享</p>
          </a>
        </li>
        <li>
          <a href="">
            <img src="../assets/icon/menu3.png" alt="">
            <p>商品购买</p>
          </a>
        </li>
        <li>
          <a href="">
            <img src="../assets/icon/menu4.png" alt="">
            <p>留言反馈</p>
          </a>
        </li>
        <li>
          <a href="">
            <img src="../assets/icon/menu5.png" alt="">
            <p>视频专区</p>
          </a>
        </li>
        <li>
          <a href="">
            <img src="../assets/icon/menu6.png" alt="">
            <p>联系我们</p>
          </a>
        </li>
      </ul>
    </div>
    <h3>这个是首页</h3>
  </div>
</template>

<script>
export default {
  data(){
    return {
      lunbotu: []
    }
  },
  created() {
    this.getLunbotu()
  },
  methods: {
    getLunbotu () {
      const url = 'http://it.cmsxiu.com/getlunbo.php'
      this.$http.get(url).then(res => {
        this.lunbotu = res.body
      })
    }
  },
};
</script>
<style lang="scss" scoped>
  .mint-swipe {
    height: 280px;
    .mint-swipe-item {
      img{
        width: 100%;
        height: 100%;
      }
    }
  }
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
            font-size: 1.2rem;
          }
        }
      }
    }
  }
</style>