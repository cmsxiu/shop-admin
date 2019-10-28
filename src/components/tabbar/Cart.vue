<template>
    <div class="shopcar-container">
        <div class="goodslist">
            <div class="mui-card"
                 v-for="(item, i) in goodslist"
                 :key="item.id">
                <div class="mui-card-content">
                    <div class="mui-card-content-inner">
                        <mt-switch>
                        </mt-switch>
                        <img :src="item.img_url">
                        <div class="info">
                            <p>{{ item.title }}</p>
                            <span class="price">￥{{ item.new_price }}</span>
                            <carNumber :goodsNumber="$store.getters.getGoodsCount[item.id]"
                                       :goodsid="item.id"></carNumber>
                            <a href="javascript:;"
                               @click.prevent="removeGoods(item.id, i)">删除</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import carNumber from '../Cart_number'
export default {
    data () {
        return {
            getgid: this.$store.state.car,
            gidlist: [],
            gogid: null,
            goodslist: []
        }
    },
    created () {
    },
    mounted () {
        this.getcarlist()
    },
    methods: {
        getcarlist () {
            if (this.getgid.length) {
                for (let i = 0; i < this.getgid.length; i++) {
                    this.gidlist.push(this.getgid[i].id)
                }
                this.gogid = Array.from(this.gidlist)

                var url = 'getcargoodslist.php'
                this.$http.post(url, { gid: this.gogid }).then(res => {
                    this.goodslist = res.body
                })
            }
        },
        removeGoods (id, index) {
            this.goodslist.splice(index, 1)
        }
    },
    components: {
        carNumber
    }
}
</script>

<style lang="scss" scoped>
.shopcar-container {
    background-color: #eee;
    overflow: hidden;
    .goodslist {
        .mui-card-content-inner {
            display: flex;
            align-items: center;
            img {
                width: 50px;
                height: 50px;
                margin: 0 0.5rem;
            }
            .info {
                // display: flex;
                // flex-direction: column;
                // justify-content: space-between;
                p {
                    font-size: 0.8rem;
                    font-weight: 700;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    display: -webkit-box;
                    -webkit-line-clamp: 2;
                    -webkit-box-orient: vertical;
                }
                .price {
                    margin: 0;
                    color: #f40;
                }
            }
        }
    }
}
</style>