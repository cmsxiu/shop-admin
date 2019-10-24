<template>
    <div class="goodslist">
        <mt-loadmore :top-method="loadTop"
                     :bottom-method="loadBottom">
            <ul class="item">
                <router-link tag="li"
                             :to="'/home/goodsinfo/' + item.id"
                             class="item-list"
                             v-for="item in goodslist"
                             :key="item.id">
                    <img :src="item.img_url"
                         class="pic">
                    <div class="product">
                        <h3 class="title">{{item.title}}</h3>
                        <div class="info">
                            <p class="price">
                                <span class="new">￥{{item.new_price}}</span>
                                <span class="old">￥{{item.sell_price}}</span>
                            </p>
                            <p class="sell">
                                <span>热卖中</span>
                                <span>剩余{{item.stock_quantity}}件</span>
                            </p>
                        </div>
                    </div>
                </router-link>
            </ul>
        </mt-loadmore>
    </div>
</template>
<script>
import { Toast } from 'mint-ui';
export default {
    data () {
        return {
            pageindex: 1,
            goodslist: [],
            allLoaded: false,
            scrollMode: "touch"
        }
    },
    created () {
        this.getgoodslist()
    },
    methods: {
        getgoodslist () {
            const url = "getgoodslist.php"
            this.$http.get(url + "?pageindex=" + this.pageindex).then(res => {
                this.goodslist = res.body
            })
            this.allLoaded = true
        },
        loadTop () {
            setTimeout(() => {
                this.$refs.loadmore.onTopLoaded();// 固定方法，查询完要调用一次，用于重新定位
                Toast("下拉刷新")
                this.getgoodslist()
            }, 2000)
        },
        loadBottom () {
            this.allLoaded = true;// 若数据已全部获取完毕
            this.pageindex++
            this.getgoodslist()
            Toast("获取完成数据")
        }
    },
}
</script>
<style lang="scss" scoped>
.goodslist {
    overflow: scroll;
    ul.item {
        padding: 0.5rem;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        li.item-list {
            float: left;
            width: 49%;
            border: 1px solid #ccc;
            box-shadow: 0 0 7px #ccc;
            margin: 0.25rem 0;
            padding: 0.5%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 300px;
            img.pic {
                width: 100%;
            }
            .product {
                .title {
                    font-size: 0.9rem;
                }
                .info {
                    background-color: #eee;
                    p {
                        margin: 0;
                        padding: 0.25rem;
                    }
                    .price {
                        .new {
                            color: #f40;
                        }
                        .old {
                            margin-left: 0.5rem;
                            text-decoration: line-through;
                        }
                    }

                    .sell {
                        display: flex;
                        justify-content: space-between;
                    }
                }
            }
        }
    }
}
</style>