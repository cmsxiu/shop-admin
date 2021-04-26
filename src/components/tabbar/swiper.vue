<template>
  <div>
    <mt-swipe :auto="4000">
      <mt-swipe-item v-for="item in lunbotu" :key="item.id">
        <img :src="item.img_url" :class="{ full: isfull }" />
      </mt-swipe-item>
    </mt-swipe>
  </div>
</template>
<script>
export default {
  props: ['lunbotu', 'isfull'],
}
</script>
<style lang="scss" scope>
.mint-swipe {
  height: 280px;
  .mint-swipe-item {
    text-align: center;
    img {
      height: 100%;
    }
    img.full {
      width: 100%;
    }
  }
}
</style>
