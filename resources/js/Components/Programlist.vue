<template>
    <div class="grid gap-4 md:grid-cols-3">
      <!-- Use the 'programs' prop directly in the component -->
      <div
            v-for="program in programs"
            :key="program.id"
            class="bg-white rounded-lg overflow-hidden border border-stone-300 shadow-2xl p-4"
            >
        <!-- Program Image -->
        <img :src="sample" :alt="program.name" class="w-full h-40 object-cover" />
  
        <!-- Program Details -->
        <div class="p-4">
          <p class="text-xl font-semibold">{{ program.name }}</p>
          <div class="flex items-center text-gray-600">
            <svg
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="w-10 h-7" 
                    >
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M12 2C8.68629 2 6 4.68629 6 8C6 12.2643 12 22 12 22C12 22 18 12.2643 18 8C18 4.68629 15.3137 2 12 2ZM12 10.5C11.1716 10.5 10.5 11.1716 10.5 12C10.5 12.8284 11.1716 13.5 12 13.5C12.8284 13.5 13.5 12.8284 13.5 12C13.5 11.1716 12.8284 10.5 12 10.5Z"
                        fill="currentColor"
                    />
                    </svg>

            <p>{{ program.venue }}</p>
          </div>
          <div class="flex items-center text-gray-600">
            <svg
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                class="w-10 h-6" 
                >
                <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M3 4.5C3 3.67157 3.67157 3 4.5 3H19.5C20.3284 3 21 3.67157 21 4.5V19.5C21 20.3284 20.3284 21 19.5 21H4.5C3.67157 21 3 20.3284 3 19.5V4.5ZM4 7.5C4 7.22386 4.22386 7 4.5 7H5.5C5.77614 7 6 7.22386 6 7.5V8.5C6 8.77614 5.77614 9 5.5 9H4.5C4.22386 9 4 8.77614 4 8.5V7.5ZM8 7.5C8 7.22386 8.22386 7 8.5 7H9.5C9.77614 7 10 7.22386 10 7.5V8.5C10 8.77614 9.77614 9 9.5 9H8.5C8.22386 9 8 8.77614 8 8.5V7.5ZM12 7.5C12 7.22386 12.2239 7 12.5 7H13.5C13.7761 7 14 7.22386 14 7.5V8.5C14 8.77614 13.7761 9 13.5 9H12.5C12.2239 9 12 8.77614 12 8.5V7.5ZM16 7.5C16 7.22386 16.2239 7 16.5 7H17.5C17.7761 7 18 7.22386 18 7.5V8.5C18 8.77614 17.7761 9 17.5 9H16.5C16.2239 9 16 8.77614 16 8.5V7.5ZM4 11.5C4 11.2239 4.22386 11 4.5 11H5.5C5.77614 11 6 11.2239 6 11.5V12.5C6 12.7761 5.77614 13 5.5 13H4.5C4.22386 13 4 12.7761 4 12.5V11.5ZM8 11.5C8 11.2239 8.22386 11 8.5 11H9.5C9.77614 11 10 11.2239 10 11.5V12.5C10 12.7761 9.77614 13 9.5 13H8.5C8.22386 13 8 12.7761 8 12.5V11.5ZM12 11.5C12 11.2239 12.2239 11 12.5 11H13.5C13.7761 11 14 11.2239 14 11.5V12.5C14 12.7761 13.7761 13 13.5 13H12.5C12.2239 13 12 12.7761 12 12.5V11.5ZM16 11.5C16 11.2239 16.2239 11 16.5 11H17.5C17.7761 11 18 11.2239 18 11.5V12.5C18 12.7761 17.7761 13 17.5 13H16.5C16.2239 13 16 12.7761 16 12.5V11.5ZM4 15.5C4 15.2239 4.22386 15 4.5 15H5.5C5.77614 15 6 15.2239 6 15.5V16.5C6 16.7761 5.77614 17 5.5 17H4.5C4.22386 17 4 16.7761 4 16.5V15.5ZM8 15.5C8 15.2239 8.22386 15 8.5 15H9.5C9.77614 15 10 15.2239 10 15.5V16.5C10 16.7761 9.77614 17 9.5 17H8.5C8.22386 17 8 16.7761 8 16.5V15.5ZM12 15.5C12 15.2239 12.2239 15 12.5 15H13.5C13.7761 15 14 15.2239 14 15.5V16.5C14 16.7761 13.7761 17 13.5 17H12.5C12.2239 17 12 16.7761 12 16.5V15.5ZM16 15.5C16 15.2239 16.2239 15 16.5 15H17.5C17.7761 15 18 15.2239 18 15.5V16.5C18 16.7761 17.7761 17 17.5 17H16.5C16.2239 17 16 16.7761 16 16.5V15.5Z"
                    fill="currentColor"
                />
                </svg>

            <p>{{ formatDate(program.created_at) }}</p>
          </div>
        </div>
  
        <!-- Join Event Button -->
        <div class="p-4 bg-blue-500 text-white text-center">
            <a :href="route('attendancesheet.register', program)" class="block">
                Join Event
            </a>
            </div>

      </div>
    </div>
  </template>
  <script setup>
  // Import 'defineProps' if using Vue 3 composition API
  import { defineProps } from 'vue';
  import { Link } from '@inertiajs/vue3';
  import sample from '../../images/blog1.jpg';


  const formatDate = (dateString) => {
    const options = { year: "numeric", month: "long", day: "numeric" };
    const date = new Date(dateString);
    return date.toLocaleDateString(undefined, options);
};
  
  // Explicitly receive the 'programs' prop
  const { programs } = defineProps(['programs']);
  </script>
  