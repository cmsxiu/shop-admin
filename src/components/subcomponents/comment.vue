<template>
    <div class="pl">
        <h4>发布评论</h4>
        <textarea placeholder="请输入您想要吐槽的话（最多120字）"
                  maxlength="120"
                  v-model="msg"></textarea>
        <mt-button type="primary"
                   size="large"
                   @click="setComments">发布评论</mt-button>
        <div class="comt">
            <ul class="comt-ul">
                <li class="comt-ul-li"
                    v-for="item in pinglun"
                    :key="item.id">
                    <p>
                        <span>第{{item.id}}楼</span>
                        <span>用户:{{item.user_name}}</span>
                        <span>发布时间：{{item.add_time}}</span>
                    </p>
                    <div class="comtContnet">
                        {{item.content}}
                    </div>
                </li>
            </ul>
        </div>
        <mt-button type="danger"
                   size="large"
                   plain
                   @click="getCommentsMroe">加载更多</mt-button>
    </div>
</template>
<script>
import { Toast } from 'mint-ui';
export default {
    data () {
        return {
            pageindex: 1,
            pinglun: [],
            msg: ""
        }
    },
    created () {
        this.getComments()
    },
    mounted () {
        console.log(this.pinglun)
    },
    methods: {
        getComments () {
            this.$http.get("getcomments.php?pageindex=" + this.pageindex).then(res => {
                this.pinglun = res.body
                // this.pinglun = (res.data.data.comments).slice(0, (5 * this.pageindex))
                console.log(this.pinglun)
            }).catch(error => {
                console.log(error)
            })
        },
        getCommentsMroe () {
            this.pageindex++
            this.getComments()
        },
        setComments () {
            Toast('无法发送')
        }
    }
}
</script>
<style lang="scss">
.pl {
    textarea {
        color: #fcc;
    }
    h4 {
        padding: 0.5rem 0 0.7rem;
    }
    .comt {
        margin: 1rem 0;
        .comt-ul {
            .comt-ul-li {
                border-bottom: 1px solid #ddd;
                padding: 0.3rem 0;
                p {
                    display: block;
                    background-color: #ccc;
                    color: #666;
                    span {
                        padding: 0 0.5rem 0 0;
                    }
                }
            }
        }
    }
}
// Access to XMLHttpRequest at 'http://vue.studyit.io/api/getlunbo' from origin 'http://127.0.0.1:8081' has been blocked by CORS policy: No 'Access-Control-Allow-Origin' header is present on the requested resource.
</style>
