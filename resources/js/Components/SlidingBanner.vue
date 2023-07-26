<template>
  <div class="relative w-full">
    <div class="overflow-hidden w-full">
      <div class="flex transition-transform duration-500 h-full" :style="slideStyles">
        <div v-for="(item, index) in bannerItems" :key="index" class="w-full flex-none">
          <div class="relative">
            <img :src="item.image" alt="Banner Image" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="absolute inset-0 flex items-center justify-center">
              <div class="w-2/3 text-white">
                <h1 class="text-6xl font-bold leading-tight">{{ item.title }}</h1>
                <p class="text-3xl leading-tight my-4">{{ item.description }}</p>
                <a :href="item.link" class="text-white mt-2 py-2 px-4 bg-transparent hover:bg-white hover:text-black border-white border-2 rounded-md mt-4">
                  Learn More
                </a>



              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
import { ref, computed, onMounted } from 'vue';
import bannerImage1 from '../../images/banner1.jpg';
import bannerImage2 from '../../images/banner2.jpg';
import bannerImage3 from '../../images/banner3.jpg';


export default {
  setup() {
    const bannerItems = ref([
      {
        title: 'DICT Interns',
        description: '“DICT of the people and for the people.”',
        image: bannerImage1,
        link: '/programs/index',
      },
      {
        title: 'Passionate about Technology? Join Us!',
        description: 'Explore Opportunities to Make a Difference in ICT.',
        image: bannerImage2,
        link: '/register',
      },
      {
        title: 'Discover More with DICT Services',
        description: 'Login to Access Exclusive Resources and Features.',
        image: bannerImage3,
        link: '/login',
      },
      // Add more banner items as needed
    ]);
    const currentIndex = ref(0);

    const slideStyles = computed(() => {
      return {
        transform: `translateX(-${currentIndex.value * 100}%)`,
      };
    });

    const slideToNext = () => {
      currentIndex.value = (currentIndex.value + 1) % bannerItems.value.length;
    };

    onMounted(() => {
      setInterval(slideToNext, 5000); // Adjust the time interval between slides (in milliseconds)
    });

    return {
      bannerItems,
      slideStyles,
    };
  },
};
</script>

<style>
/* Optional: Customize the size and aspect ratio of the sliding banner */
.banner-container {
  height: 0;
  padding-bottom: 56.25%; /* 16:9 aspect ratio (adjust as needed) */
}

/* Optional: Add border and shadow to the banner items */
.banner-slide > div {
  border: 1px solid #ccc;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Add the transition for the sliding animation */
.banner-slide {
  transition: transform 0.5s ease-in-out;
}


/* Overlay styles */
.absolute {
  position: absolute;
}

.inset-0 {
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}

.flex {
  display: flex;
}

.items-center {
  align-items: center;
}

.justify-center {
  justify-content: center;
}

.bg-black {
  background-color: #000;
}

.opacity-50 {
  opacity: 0.5;
}
</style>
