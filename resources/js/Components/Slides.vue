<template>
  <div class="carousel-container relative">
    <div class="flex justify-center text-4xl font-bold my-2">Abouts</div>
    <div v-for="(slide, index) in slides" :key="index" class="carousel-slide" :class="{ 'active-slide': index === activeIndex }">
      <img :src="slide.image" :alt="slide.caption" class="w-full h-80 object-cover">
      <div class="carousel-overlay">
        <h3 class="text-white text-xl font-bold">{{ slide.caption }}</h3>
        <p class="text-white mt-2">{{ slide.description }}</p>
      </div>
    </div>
    <div class="carousel-navigation">
      <button @click="goToPreviousSlide" class="carousel-nav-button">&lt;</button>
      <button @click="goToNextSlide" class="carousel-nav-button">&gt;</button>
    </div>
  </div>
</template>

<script>
import { ref } from 'vue';
import slide1 from '../../Images/Main.jpg'
import slide2 from '../../Images/2nd.jpg'
import slide3 from '../../Images/3rd.jpg'
import slide4 from '../../Images/4th.jpg'
import slide5 from '../../Images/5th.jpg'
export default {
  data() {
    return {
      slides: [
        {
          image: slide1,
          caption: 'Office',
          description: 'DICT Region IX BASULTA Zamboanga City, Philippines',
        },
        {
          image: slide2,
          caption: 'World Summit on Information Society',
          description: 'Winner 2022 - Champion 2020-2021',
        },
        {
          image: slide3,
          caption: 'StartUp',
          description: 'DICT StartUp Community and Local Enhancement.',
        },
        {
          image:slide4,
          caption:'InnoHive',
          description: 'DICT Zampen InnoHive',
        },
        {
          image:slide5,
          caption:'Smart Village Initiative',
          description: 'Closing Ceremony at Sacol Island of the National ICT Month 2023',
        },
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
};
</script>

<style>
/* Styling the carousel container */
.carousel-container {
  width: 100%;
  height: 400px;
}

.carousel-slide {
  position: absolute;
  width: 100%;
  height: 100%;
  opacity: 0;
  transition: opacity 2s ease-in-out;
}

.active-slide {
  opacity: 1;
}

.carousel-overlay {
  position: absolute;
  bottom: -1rem;
  left: 1rem;
  right: 1rem;
  padding: 1rem;
  background-color: rgba(0, 0, 0, 0.7);
}

.carousel-nav-button {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 40px;
  height: 40px;
  background-color: rgba(0, 0, 0, 0.7);
  color: white;
  font-size: 1.5rem;
  border: none;
  border-radius: 50%;
  cursor: pointer;
}

.carousel-nav-button:nth-child(1) {
  left: 1rem;
}

.carousel-nav-button:nth-child(2) {
  right: 1rem;
}
</style>
