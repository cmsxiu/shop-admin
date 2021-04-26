<template>
  <div class="mui-numbox" data-numbox-min="1">
    <button class="mui-btn mui-btn-numbox-minus" type="button">-</button>
    <input
      id="test"
      class="mui-input-numbox"
      type="number"
      :value="goodsNumber"
      @change="numChange"
      readonly
      ref="num"
    />
    <button class="mui-btn mui-btn-numbox-plus" type="button">+</button>
  </div>
</template>
<script>
import mui from '../lib/mui/js/mui.js'
export default {
  mounted() {
    mui('.mui-numbox').numbox()
    // console.log("最多可以购买：" + this.max + "件")
  },
  methods: {
    numChange() {
      // 数量改变了
      // console.log(this.$refs.num.value)
      // 每当数值改变，就将最新的数值传输到
      this.$store.commit('updateGoodsInfo', {
        id: this.goodsid,
        num: this.$refs.num.value,
      })
    },
  },
  props: ['goodsNumber', 'goodsid'],
}
</script>
<style lang="scss" scoped>
.mui-numbox {
  height: 1.5rem;
}
</style>
