<template>
    <div>
        <ul class="mui-table-view">
            <li class="mui-table-view-cell mui-media"
                v-for="item in newslist"
                :key="item.id">
                <router-link :to="'/home/newsinfo/' + item.id">
                    <img class="mui-media-object mui-pull-left"
                         :src="item.src">
                    <div class="mui-media-body">
                        <h3>{{ item.title }}</h3>
                        <div class='mui-ellipsis'>
                            <span class="varDate">
                                <i class="icon iconfont">&#xe65f;</i>
                                {{item.add_time}}
                            </span>
                            <span class="hits">
                                <i class="icon iconfont">&#xe81a;</i>
                                {{item.click}}
                            </span>
                        </div>
                    </div>
                </router-link>
            </li>

        </ul>
    </div>
</template>
<script>
export default {
    data () {
        return {
            newslist: []
        }
    },
    created () {
        this.getNewsList()
    },
    methods: {
        getNewsList () {
            const url = "http://it.cmsxiu.com/getnewslist.php"
            this.$http.get(url).then(res => {
                if (res) {
                    this.newslist = res.body
                }
            })
        }
    }
}
</script>
<style lang="scss" scoped>
// 导入 MUI 的样式
@import url("./../../lib/mui/css/mui.min.css");
// 导入扩展图标样式
@import url("./../../lib/mui/css/icons-extra.css");
.mui-media-body {
    h3 {
        font-size: 0.8rem;
        color: #333;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    .mui-ellipsis {
        // css3 flex布局
        display: flex;
        // 两端对齐
        justify-content: space-between;
        color: #999;
        span {
            font-size: 0.7rem;
            line-height: 1.2rem;
            float: left;
            i {
                font-size: 0.7rem;
            }
        }
    }
}
</style>