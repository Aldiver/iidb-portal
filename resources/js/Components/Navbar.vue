<template>
    <nav :class="{ 'sticky': isSticky }">
      <!-- Navbar content -->
    </nav>
  </template>
  
  <script>
  import { ref, onMounted, onUnmounted } from 'vue';
  
  export default {
    setup() {
      const isSticky = ref(false);
  
      const handleScroll = () => {
        if (window.pageYOffset > 0) {
          isSticky.value = true;
        } else {
          isSticky.value = false;
        }
      };
  
      onMounted(() => {
        window.addEventListener('scroll', handleScroll);
      });
  
      onUnmounted(() => {
        window.removeEventListener('scroll', handleScroll);
      });
  
      return {
        isSticky,
      };
    },
  };
  </script>
  
  <style scoped>
  .sticky {
    position: fixed;
    top: 0;
    width: 100%;
    /* Add other styling properties for your navbar */
  }
  </style>
  