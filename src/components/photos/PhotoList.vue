<template>
    <div id="photolist">
        <!-- 顶部滑动条 -->
        <div id="slider"
             class="mui-slider">
            <div id="sliderSegmentedControl"
                 class="mui-scroll-wrapper mui-slider-indicator mui-segmented-control mui-segmented-control-inverted">
                <div class="mui-scroll">
                    <a class="mui-control-item mui-active"
                       href="#item1mobile"
                       data-wid="tab-top-subpage-1.html">
                        推荐
                    </a>
                    <a class="mui-control-item"
                       href="#item2mobile"
                       data-wid="tab-top-subpage-2.html">
                        热点
                    </a>
                    <a class="mui-control-item"
                       href="#item3mobile"
                       data-wid="tab-top-subpage-3.html">
                        北京
                    </a>
                    <a class="mui-control-item"
                       href="#item4mobile"
                       data-wid="tab-top-subpage-4.html">
                        社会
                    </a>
                    <a class="mui-control-item"
                       href="#item5mobile"
                       data-wid="tab-top-subpage-5.html">
                        娱乐
                    </a>
                    <a class="mui-control-item"
                       href="#item6mobile"
                       data-wid="tab-top-subpage-6.html">
                        科技
                    </a>
                </div>
            </div>

        </div>
        <ul>
            <router-link v-for="item in photolist"
                         :key="item.id"
                         tag="li"
                         :to="'/home/photoinfo/' + item.id">
                <img v-lazy="item.img_url">
                <div class="content">
                    <h1>{{item.title}}</h1>
                    <p>{{item.zhaiyao}}</p>
                </div>
            </router-link>
        </ul>
    </div>
</template>
<script>
// 导入mui.js文件
import mui from '../../lib/mui/js/mui.js'
export default {
    data () {
        return {
            photolist: [],
            pageindex: 1
        }
    },
    created () {
        this.getimages()
    },
    mounted () {
        mui('.mui-scroll-wrapper').scroll({
            deceleration: 0.0005 //flick 减速系数，系数越大，滚动速度越慢，滚动距离越小，默认值0.0006
        });
    },
    methods: {
        getimages () {
            const url = "http://it.cmsxiu.com/getimages.php"
            this.$http.get(url).then(res => {
                if (res) {
                    this.photolist = res.body
                }
            })
        }
    },
}
</script>
<style lang="scss" scoped>
* {
    // 清除
    touch-action: pan-x;
    touch-action: pan-y;
}
#photolist {
    .mui-slider {
        z-index: 0;
    }
    ul {
        margin: 0 4%;
        li {
            background-color: #ddd;
            text-align: center;
            border: 1px solid #ddd;
            margin-bottom: 4%;
            box-shadow: 0 0 9px #999;
            position: relative;
            img[lazy="loading"] {
                width: 40px;
                height: 300px;
                margin: auto;
            }
            img {
                width: 100%;
                vertical-align: middle;
            }
            .content {
                position: absolute;
                bottom: 0;
                background-color: rgba(0, 0, 0, 0.5);
                padding: 1%;
                h1 {
                    color: #f5f5f5;
                    font-size: 1rem;
                }
                p {
                    color: #f9f9f9;
                }
            }
        }
    }
}
</style>