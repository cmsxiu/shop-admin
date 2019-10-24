<template>
    <div class="mui-numbox"
         data-numbox-min='1'>
        <button class="mui-btn mui-btn-numbox-minus"
                type="button">-</button>
        <input id="test"
               class="mui-input-numbox"
               type="number"
               value="1"
               @change="numChange"
               ref="num" />
        <button class="mui-btn mui-btn-numbox-plus"
                type="button">+</button>
    </div>
</template>
<script>
import mui from '../../lib/mui/js/mui.js'
export default {
    mounted () {
        mui(".mui-numbox").numbox()
        console.log("最多可以购买：" + this.max + "件")
    },
    methods: {
        numChange () {
            this.$emit('getnumber', parseInt(this.$refs.num.value));
            console.log("还能购买：" + (this.max - this.$refs.num.value) + "件")
        },
    },
    props: ["max"],
    watch: {
        max: (newVal, oldVal) => {
            mui(".mui-numbox").numbox().setOption('max', newVal)
        }
    },
}
</script>
<style lang="scss" scoped>
.mui-numbox {
    height: 1.5rem;
}
</style>