<template>
    <div class="slides">
      <div class="slides-container">
        <div v-for="(slide, index) in slides" :key="index" :class="{ 'slide-active': index === activeIndex }">
          <img :src="slide.image" :alt="slide.caption" class="slide-image">
          <div class="slide-caption">
            {{ slide.caption }}
          </div>
        </div>
      </div>
      <div class="slides-navigation">
        <button @click="goToPreviousSlide" class="slides-button">Previous</button>
        <button @click="goToNextSlide" class="slides-button">Next</button>
      </div>
    </div>
  </template>
  
  <script>
  import { ref } from 'vue';
  
  export default {
    data() {
      return {
        slides: [
          { image: '/path/to/image1.jpg', caption: 'Slide 1' },
          { image: '/path/to/image2.jpg', caption: 'Slide 2' },
          { image: '/path/to/image3.jpg', caption: 'Slide 3' },
        ],
        activeIndex: 0,
      };
    },
    methods: {
      goToPreviousSlide() {
        this.activeIndex = (this.activeIndex - 1 + this.slides.length) % this.slides.length;
      },
      goToNextSlide() {
        this.activeIndex = (this.activeIndex + 1) % this.slides.length;
      },
    },
  }
  </script>
  
  <style scoped>
  .slides {
    position: relative;
    width: 100%;
    height: 400px;
  }
  
  .slides-container {
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
  }
  
  .slide-active {
    opacity: 1;
  }
  
  .slide-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
  }
  
  .slide-caption {
    position: absolute;
    bottom: 10px;
    left: 10px;
    color: #fff;
    font-size: 18px;
  }
  
  .slides-navigation {
    position: absolute;
    bottom: 10px;
    right: 10px;
  }
  
  .slides-button {
    margin-left: 10px;
  }
  </style>
  