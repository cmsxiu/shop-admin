<template>
    <div id="photoinfo">
        <div class="photoinfo-title">
            <h1>标题</h1>
            <p>
                <span>发布时间：2019/10/22 16:38</span>
                <span>点击次数：99</span>
            </p>
        </div>
        <hr>
        <!-- 缩略图 -->
        <div class="thumbs">
            <vue-preview :slides="photolist"
                         class="imgPrev"></vue-preview>
        </div>
        <!-- 内容 -->
        <div class="content">

        </div>
        <!-- 评论 -->
        <comments></comments>
    </div>
</template>
<script>
import comments from '../subcomponents/comment'
export default {
    data () {
        return {
            photolist: []
        }
    },
    created () {
        this.getimages()
    },
    methods: {
        getimages () {
            const url = "getimages.php"
            this.$http.get(url).then(res => {
                res.body.forEach(item => {
                    item.w = 300;   //设置以大图浏览时的宽度
                    item.h = 438.6;     //设置以大图浏览时的高度
                    item.src = item.img_url;  //大图
                    item.msrc = item.img_url;  //小图
                });
                this.photolist = res.body
            })
        }, handleClose () {
            console.log('close event')
        }
    },
    components: {
        comments
    }
}
</script>
<style lang="scss" scoped>
#photoinfo {
    .photoinfo-title {
        text-align: center;
        h1 {
            font-size: 1.2rem;
            padding: 1rem 0 0.5rem;
        }
        p {
            display: flex;
            justify-content: space-between;
            padding: 0 1rem;
        }
    }
}
.thumbs {
    /deep/ .my-gallery {
        //deep深层作用选择器
        display: flex;
        flex-wrap: wrap; //默认换行
        figure {
            width: 30%;
            margin: 5px;
            img {
                width: 100%;
                box-shadow: 0 0 8px #999;
                border-radius: 5px;
            }
        }
    }
}
</style>