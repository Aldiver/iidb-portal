<template>
    <div class="avatar">
      <img :src="imageUrl" :alt="altText" class="avatar-image">
      <div class="avatar-placeholder"><p>asdfas</p>
        {{ initials }}
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      imageUrl: {
        type: String,
        required: true,
      },
      altText: {
        type: String,
        required: true,
      },
      initials: {
        type: String,
        required: true,
      },
    },
  }
  </script>
  
  <style>
  .avatar {
    position: center;
    display: inline-block;
  }
  
  .avatar-image {
    width: 10%;
    height: 10%;
    object-fit: cover;
    border-radius: 50%;
  }
  
  .avatar-placeholder {
    position: absolute;
    top: 10;
    left: 100;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 10%;
    height: 10%;
    background-color: #f3f4f6;
    border-radius: 50%;
    color: #374151;
    font-weight: bold;
    font-size: 14px;
  }
  </style>
  