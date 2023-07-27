<template>
    <div class="contact-form">
      <h2 class="text-2xl font-bold mb-4">Contact Us</h2>
      <form @submit.prevent="sendFeedback">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" v-model="formData.name" required class="form-input">
        </div>
        <div class="form-group">
          <label for="name">Contact Number</label>
          <input type="text" id="name" v-model="formData.number" required class="form-input">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" v-model="formData.email" required class="form-input">
        </div>
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea id="message" v-model="formData.message" required rows="4" class="form-input"></textarea>
        </div>
        <button type="submit" class="btn-submit">Send Feedback</button>
      </form>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        formData: {
          name: '',
          number:'',
          email: '',
          message: '',
        },
      };
    },
    methods: {
      sendFeedback() {
        // Simulate sending the feedback to the backend
        console.log('Feedback Sent:');
        console.log('Name:', this.formData.name);
        console.log('Contact Number:', this.formData.number);
        console.log('Email:', this.formData.email);
        console.log('Message:', this.formData.message);
  
        // Reset the form data after sending feedback
        this.formData = {
          name: '',
          email: '',
          message: '',
        };
      },
    },
  };
  </script>
  
  <style>
  /* Styles for the contact form */
  .contact-form {
    max-width: 400px;
    margin: 0 auto;
    padding: 1rem;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #f9f9f9;
  }
  
  .form-group {
    margin-bottom: 1rem;
  }
  
  .form-input {
    width: 100%;
    padding: 0.5rem;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  
  .btn-submit {
    padding: 0.5rem 1rem;
    background-color: rgb(31 41 55);
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  .btn-submit:hover {
    background-color: #0056b3;
  }
  </style>
  