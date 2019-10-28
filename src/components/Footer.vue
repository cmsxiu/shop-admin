<template>
    <div>
        <nav class="mui-bar mui-bar-tab">
            <router-link to="/home"
                         tag="a"
                         class="mui-tab-item-cmsxiu">
                <span class="mui-icon mui-icon-home"></span>
                <span class="mui-tab-label">首页</span>
            </router-link>
            <router-link to="/member"
                         tag="a"
                         class="mui-tab-item-cmsxiu">
                <span class="mui-icon mui-icon-contact"></span>
                <span class="mui-tab-label">会员</span>
            </router-link>
            <router-link to="/cart"
                         tag="a"
                         class="mui-tab-item-cmsxiu">
                <span class="mui-icon mui-icon-extra mui-icon-extra-cart">
                    <span class="mui-badge"
                          id="badge">{{$store.getters.getAllNumber}}</span>
                </span>
                <span class="mui-tab-label">购物车</span>
            </router-link>
            <router-link to="/search"
                         tag="a"
                         class="mui-tab-item-cmsxiu">
                <span class="mui-icon mui-icon-search"></span>
                <span class="mui-tab-label">搜索</span>
            </router-link>
        </nav>
    </div>
</template>
<script>
export default {

}
</script>
<style lang="scss">
.router-link-exact-active .router-link-active {
    color: #f00;
}
.mui-bar-tab .mui-tab-item-cmsxiu.mui-active {
    color: #007aff;
}
.mui-bar-tab .mui-tab-item-cmsxiu {
    display: table-cell;
    overflow: hidden;
    width: 1%;
    height: 50px;
    text-align: center;
    vertical-align: middle;
    white-space: nowrap;
    text-overflow: ellipsis;
    color: #929292;
}
.mui-bar-tab .mui-tab-item-cmsxiu .mui-icon {
    top: 3px;
    width: 24px;
    height: 24px;
    padding-top: 0;
    padding-bottom: 0;
}
.mui-bar-tab .mui-tab-item-cmsxiu .mui-icon ~ .mui-tab-label {
    font-size: 11px;
    display: block;
    overflow: hidden;
    text-overflow: ellipsis;
}
</style>