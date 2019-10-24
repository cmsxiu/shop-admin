<template>
    <div class="show">
        <h3>这个是新闻详情页</h3>
        <p>
            <span class="varDate">
                <i class="icon iconfont">&#xe65f;</i>
                2019/10/20 8:33
            </span>
            <span class="hits">
                <i class="icon iconfont">&#xe81a;</i>
                108
            </span>
        </p>
        <hr>
        <div class="newscontent">

        </div>
        <comment></comment>
    </div>
</template>
<script>
import comment from '../subcomponents/comment'
export default {
    data () {
        return {

        }
    },
    created () {

    },
    methods: {

    },
    components: {
        comment
    }
}
</script>
<style lang="scss" scoped>
.show {
    padding: 0 4px;
    h3 {
        text-align: center;
        color: #f55;
        padding: 0.6rem 0;
    }
    hr {
        border: 1px solid #ddd;
        height: 0;
    }
    p {
        // css3 flex布局
        display: flex;
        // 两端对齐
        justify-content: space-between;
        color: #226aff;
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