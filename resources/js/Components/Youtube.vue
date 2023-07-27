<template>
  <div class="mt-20" >
    <iframe width="600" height="337.5" src="https://www.youtube.com/embed/ZsRqj9KtjVs" title="National ICT Month 2023 Official Launch Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>
</template>

<script>
export default {
  props: {
    videoId: {
      type: String,
      required: true,
    },
  },
  computed: {
    embedCode() {
      return `<iframe width="560" height="315" src="https://www.youtube.com/embed/${this.videoId}" frameborder="0" allowfullscreen></iframe>`;
    },
  },
};
</script>

<style>
  
</style>
