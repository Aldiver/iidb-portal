<template>
    <div class="social-proof mx-8 my-7">
      <div v-for="(testimonial, index) in testimonials" :key="index" class="testimonial">
        <div class="quote-icon">“</div>
        <p class="content">{{ testimonial.text }}</p>
        <div class="author">{{ testimonial.author }}</div>
        <div class="concept">{{ testimonial.concept }}</div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        testimonials: [
          {
            concept:"Description",
            text: "The Department of Information and Communications Technology (DICT) shall be the primary policy, planning, coordinating, implementing and administrative entity of the Executive Branch of the government that will plan, develop, and promote the national ICT development agenda.(RA 10844)",
            author: "DICT",
          },
          {
            concept:"Mission",
            text: "The D-ICT of the People; D-ICT for the People.",
            author: "DICT",
          },
        ],
      };
    },
  }
  </script>
  
  <style>
  .social-proof {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
  }
  
  .testimonial {
    background-color: #f3f4f6;
    padding: 10px;
    border-radius: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: center;
  }
  
  .quote-icon {
    font-size: 24px;
    margin-bottom: 10px;
  }
  
  .content {
    font-size: 16px;
    margin-bottom: 10px;
  }
  
  .author {
    font-size: 14px;
    font-weight: bold;
    color: #888;
  }
  </style>
  