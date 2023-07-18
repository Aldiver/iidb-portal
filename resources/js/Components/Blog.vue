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
  import bannerImage1 from '../../images/banner1.jpg';
  import bannerImage2 from '../../images/banner2.jpg';
  import bannerImage3 from '../../images/banner3.jpg';
  
  export default {
    data() {
      return {
        blogs: [
          {
            title: 'Blog Title 1',
            imageUrl: bannerImage1,
            excerpt: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          },
          {
            title: 'Blog Title 2',
            imageUrl: bannerImage2,
            excerpt: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          },
          {
            title: 'Blog Title 3',
            imageUrl: bannerImage3,
            excerpt: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
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
