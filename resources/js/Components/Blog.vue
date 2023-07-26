<template>
    <div class="blog-container">
      <div v-for="(blog, index) in blogs" :key="index" class="blog-card">
        <div class="blog-image-container">
          <img class="blog-image" :src="blog.imageUrl" :alt="blog.title" />
          <h2 class="blog-title">{{ blog.title }}</h2>
        </div>
          <p class="blog-excerpt">{{ blog.excerpt }}</p>
      </div>
    </div>
  </template>
  
  
  <script>
  import bannerImage1 from '../../images/blog1.jpg';
  import bannerImage2 from '../../images/blog2.jpg';
  import bannerImage3 from '../../images/blog3.jpg';
  
  export default {
    data() {
      return {
        blogs: [
          {
            title: 'Basic Digital Literacy Training for PWDS',
            imageUrl: bannerImage1,
            excerpt: 'This initiative was made possible in partnership with the City Social Welfare and Development Office (CSWDO)  Dipolog Tech4Ed Center and the LGU of Dipolog in celebration of the 𝟰𝟱𝘁𝗵 𝗡𝗮𝘁𝗶𝗼𝗻𝗮𝗹 𝗗𝗶𝘀𝗮𝗯𝗶𝗹𝗶𝘁𝘆 𝗣𝗿𝗲𝘃𝗲𝗻𝘁𝗶𝗼𝗻 𝗮𝗻𝗱 𝗥𝗲𝗵𝗮𝗯𝗶𝗹𝗶𝘁𝗮𝘁𝗶𝗼𝗻 𝗪𝗲𝗲𝗸 with the theme, “Persons with Disabilities Accessibility and Rights: Towards a Sustainable Future where No One is Left Behind”.',
          },
          {
            title: 'SCALE 2023 is here in Jolo, Sulu!',
            imageUrl: bannerImage2,
            excerpt: 'Startup Community and Locale Enhancement (SCALE) is DICT’s project offering for the Mapping of the Philippine Startup Ecosystem. It is a collaborative and participatory data-gathering method that explores the current startup initiatives, needs, and availability of resources in a certain location through a guided discussion with a multi-sectoral and well-represented set of participants.',
          },
          {
            title: '5th Adobe Community Expert in the Philippines',
            imageUrl: bannerImage3,
            excerpt: '𝗘𝗻𝗵𝗼𝗿𝗮𝗯𝘂𝗲𝗻𝗮 𝘁𝗼 𝗠𝘀. 𝗖𝗵𝗲𝗶𝘇𝗲𝗿 𝗬𝗻𝗶𝗲𝗴𝗼, Information System Analyst I and Branding Specialist of DICT R9 and BASULTA, on achieving the remarkable milestone of becoming a Certified Adobe Community Expert!',
          },
        ],
      };
    },
  };
  </script>

<style scoped>
.blog-container {
  display: flex;
  justify-content: center;
  margin: 0 -16px; /* Add horizontal margin */
}

.blog-card {
  position: relative;
  width: calc(30% - 32px); /* Adjust the width based on the desired number of cards */
  margin: 16px;
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  transition: box-shadow 0.3s ease;
}

.blog-card:hover {
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.blog-image-container {
  position: relative;
}

.blog-image {
  width: 100%;
  height: 300px; /* Adjust the image height as needed */
  object-fit: cover;
  transition: transform 0.3s ease;
}

.blog-title {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 16px;
  font-size: 20px;
  font-weight: bold;
  color: #fff;
  background-color: rgba(0, 0, 0, 0.7);
  opacity: 1;
  transform: translateY(0);
  transition: opacity 0.3s ease;
}

.blog-excerpt {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 16px;
  font-size: 16px;
  color: #fff;
  background-color: rgba(0, 0, 0, 0.7);
  opacity: 0;
  transform: translateY(100%);
  transition: opacity 0.3s ease, transform 0.3s ease;
}

.blog-card:hover .blog-image {
  transform: scale(1.1);
}

.blog-card:hover .blog-title {
  opacity: 0;
  transform: translateY(100%);
}

.blog-card:hover .blog-excerpt {
  opacity: 1;
  transform: translateY(0);
}

.blog-content {
  padding: 16px;
}

.blog-link {
  color: #3182ce;
  font-weight: bold;
  text-decoration: none;
  transition: color 0.3s ease;
}

.blog-link:hover {
  color: #4299e1;
}
</style>
