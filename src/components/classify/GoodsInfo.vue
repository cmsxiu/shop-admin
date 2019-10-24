<template>
    <div>
        <transition name="box"
                    @before-enter="beforeEnter"
                    @enter="enter"
                    @after-enter="afterEnter">
            <div class="box"
                 v-show="box"
                 ref="box"></div>
        </transition>
        <div class="mui-card">
            <div class="mui-card-content">
                <div class="mui-card-content-inner">
                    <my-swiper :lunbotu="productLunbotu"
                               :isfull="false"></my-swiper>
                </div>
            </div>
        </div>
        <div class="mui-card">

            <div class="mui-card-header">{{productInfo.title}}</div>
            <div class="mui-card-content">
                <div class="mui-card-content-inner">
                    <p class="price">
                        原价：<span class="oldPrice"><del>￥{{productInfo.sell_price}}</del></span>
                        现价：<span class="newPrice">￥{{productInfo.new_price}}</span>
                    </p>

                    <p style="height: 1.5rem;">
                        购买数量：<myNumber :max="productInfo.stock_quantity"
                                  @getnumber="getnumber"></myNumber>
                    </p>
                    <p>
                        <mt-button type="primary"
                                   size="small">立即购买</mt-button>
                        <mt-button type="danger"
                                   size="small"
                                   @click="box=!box">加入购物车</mt-button>
                    </p>
                </div>
            </div>
        </div>

        <div class="mui-card">
            <div class="mui-card-header">商品参数</div>
            <div class="mui-card-content">
                <div class="mui-card-content-inner">
                    <p>上架时间：{{productInfo.add_time}}</p>
                    <p>剩余库存：{{productInfo.stock_quantity}}</p>
                </div>
            </div>
            <mt-button type="primary"
                       size="large"
                       plain
                       @click="goodsdesc(id)">图文详情</mt-button>
            <br>
            <mt-button type="primary"
                       size="large"
                       plain
                       @click="goodscomment(id)">商品评论</mt-button>
        </div>
    </div>
</template>
<script>
import mySwiper from '../tabbar/swiper'
import myNumber from './GoodsInfo_number'
export default {
    data () {
        return {
            id: this.$route.params.id,
            num: 1,
            pageindex: 1,
            productLunbotu: [],
            productInfo: [],
            box: false
        }
    },
    created () {
        this.getgoodslist()
    },
    methods: {
        getgoodslist () {
            const url = "getgoodslist.php"
            this.$http.get(url + "?pageindex=" + this.pageindex).then(res => {
                this.productLunbotu = res.body
                this.productInfo = this.productLunbotu[this.$route.params.id]
            })
        },
        goodsdesc (id) {
            this.$router.push({
                name: "goodsdesc",
                params: { id }
            })
        },
        goodscomment (id) {
            this.$router.push({
                name: "goodscomment",
                params: { id }
            })
        },
        // 购物车动画
        beforeEnter (el) {
            el.style.transform = "translate(0, 0)"
        },
        enter (el, done) {
            // 获取坐标 getBoundingClientRect()
            // 用购物车（徽标）的坐标减去小球的坐标，获取的到的就是准确的位置
            const boxPosition = this.$refs.box.getBoundingClientRect()
            const badgePistion = document
                .getElementById("badge")
                .getBoundingClientRect()
            const xDist = badgePistion.left - boxPosition.left
            const yDist = badgePistion.top - boxPosition.top
            el.offsetWidth
            // ES3, ES5拼接
            // el.style.transform = "translate(" + xDist + "px, " + yDist + "px)"
            // ES6方法
            el.style.transform = `translate(${xDist}px, ${yDist}px)`
            el.style.transition = "all .4s cubic-bezier(.4, -0.3, 1, .68)"
            done()
        },
        afterEnter (el) {
            this.box = !this.box
        },
        getnumber (num) {
            // 获取子传的数据
            this.num = num
            console.log(this.num)
        }
    },
    components: {
        mySwiper,
        myNumber
    }
}
</script>
<style lang="scss" scope>
.price {
    .oldPrice {
        color: #ddd;
    }
    .newPrice {
        color: #f40;
    }
}
.box {
    width: 15px;
    height: 15px;
    background-color: #f40;
    border-radius: 50%;
    position: absolute;
    left: 147px;
    top: 463px;
    z-index: 99;
}
// 购物车小球动画
</style>