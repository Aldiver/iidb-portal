<template>
  <div class="bg-gray-100 py-16">
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Our Vision & Mission</h1>
      <div class="mx-20">
      <div class="grid grid-cols-1 sm:grid-cols-2">
        <!-- Vision -->
        <div class="text-center md:text-left bg-qapps-blue p-10 rounded-2xl self-stretch h-full">
          <div class="flex justify-center md:justify-start">
            <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z" stroke="#1C274C" stroke-width="1.5" />
              <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="#1C274C" stroke-width="1.5" />
            </svg>
          </div>
          <div class="mt-6">
            <h3 class="head-font font-semibold text-xl md:text-2.5xl 4xl:text-3xl text-darkblue-tf">Vision</h3>
            <p class="font-normal text-xl 4xl:text-2xl mt-3 text-gray-500">{{ vision }}</p>
          </div>
        </div>
        <!-- Mission -->
        <div class="text-center md:text-left bg-qapps-blue p-10 rounded-2xl self-stretch h-full">
          <div class="flex justify-center md:justify-start">
            <svg fill="#000000" width="64px" height="64px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
              <path d="M29.064 10.802c-0.521 0.158-0.894 0.635-0.894 1.198 0 0.127 0.019 0.25 0.054 0.366l-0.002-0.009c0.336 1.088 0.529 2.338 0.529 3.634 0 7.036-5.704 12.74-12.74 12.74s-12.74-5.704-12.74-12.74c0-7.036 5.704-12.74 12.74-12.74 1.295 0 2.544 0.193 3.721 0.552l-0.090-0.024c0.105 0.032 0.226 0.050 0.351 0.050 0.691 0 1.25-0.56 1.25-1.25 0-0.561-0.369-1.035-0.877-1.194l-0.009-0.002c-1.302-0.402-2.798-0.634-4.349-0.634-8.418 0-15.242 6.824-15.242 15.242s6.824 15.242 15.242 15.242c8.418 0 15.242-6.824 15.242-15.242 0-1.55-0.231-3.045-0.661-4.454l0.028 0.108c-0.159-0.521-0.635-0.893-1.199-0.893-0.126 0-0.248 0.019-0.363 0.053l0.009-0.002zM16 8.25c0 0 0 0 0.001 0 0.611 0 1.206 0.070 1.777 0.202l-0.053-0.010c0.086 0.021 0.185 0.033 0.286 0.033 0.69 0 1.249-0.559 1.249-1.249 0-0.596-0.418-1.095-0.977-1.22l-0.008-0.002c-0.68-0.161-1.461-0.253-2.263-0.253-5.654 0-10.238 4.584-10.238 10.238s4.584 10.238 10.238 10.238c5.654 0 10.238-4.584 10.238-10.238 0-0.803-0.093-1.585-0.267-2.335l0.014 0.069c-0.136-0.554-0.629-0.958-1.215-0.958-0.69 0-1.25 0.56-1.25 1.25 0 0.093 0.010 0.184 0.029 0.271l-0.002-0.008c0.123 0.518 0.194 1.113 0.194 1.724 0 4.281-3.47 7.751-7.751 7.751s-7.751-3.47-7.751-7.751c0-4.281 3.47-7.751 7.75-7.751h0zM20.75 5v4.482l-5.634 5.634c-0.228 0.226-0.369 0.54-0.369 0.887 0 0.69 0.56 1.25 1.25 1.25 0.347 0 0.66-0.141 0.887-0.369l5.634-5.634h4.482c0.69 0 1.25-0.56 1.25-1.25s-0.56-1.25-1.25-1.25v0h-1.982l0.5-0.5h4.482c0.69 0 1.25-0.56 1.25-1.25s-0.56-1.25-1.25-1.25v0h-1.982l1.866-1.866c0.226-0.226 0.366-0.539 0.366-0.884 0-0.691-0.56-1.251-1.251-1.251-0.346 0-0.658 0.14-0.885 0.367v0l-1.865 1.865v-1.982c0-0.69-0.56-1.25-1.25-1.25s-1.25 0.56-1.25 1.25v0 4.482l-0.5 0.5v-1.982c0-0.69-0.56-1.25-1.25-1.25s-1.25 0.56-1.25 1.25v0z"></path>
            </svg>
          </div>
          <div class="mt-6">
            <h3 class="head-font font-semibold text-xl md:text-2.5xl 4xl:text-3xl text-darkblue-tf">Mission</h3>
            <p class="font-normal text-xl 4xl:text-2xl mt-3 text-gray-500">{{ mission }}</p>
          </div>
        </div>
      </div>
    </div>
      <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Our Core Values</h1>
      <div class="mx-36">
      <div class="grid custom-grid grid-cols-2 sm:grid-cols-4 mt-4">     
          
          <!-- Core Values -->
          <div class="text-center md:text-left bg-qapps-blue p-10 rounded-full self-stretch h-full">
            <div class="flex flex-col items-center"> <!-- Updated 'flex' and 'items-center' classes -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
              </svg>
              <div class="mt-6">
                <h3 class="head-font font-semibold text-2xl md:text-3xl 4xl:text-4xl text-darkblue-tf">Dignity</h3>
              </div>
            </div>
          </div>
          <div class="text-center md:text-left bg-qapps-blue p-10 rounded-full self-stretch h-full">
            <div class="flex flex-col items-center"> <!-- Updated 'flex' and 'items-center' classes -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0v8m0 0l3-3m-3 3l-3-3"></path>
              </svg>
              <div class="mt-6">
                <h3 class="head-font font-semibold text-2xl md:text-3xl 4xl:text-4xl text-darkblue-tf">Integrity</h3>
              </div>
            </div>
          </div>
          <div class="text-center md:text-left bg-qapps-blue p-10 rounded-full self-stretch h-full">
            <div class="flex flex-col items-center"> <!-- Updated 'flex' and 'items-center' classes -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
              </svg>
              <div class="mt-6">
                <h3 class="head-font text-center font-semibold text-2xl md:text-3xl 4xl:text-4xl text-darkblue-tf">Competency & Compassion</h3>
              </div>
            </div>
          </div>
          <div class="text-center md:text-left bg-qapps-blue p-10 rounded-full self-stretch h-full">
            <div class="flex flex-col items-center"> <!-- Updated 'flex' and 'items-center' classes -->
              <svg width="40px" height="40px" viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M164.76 74.6114C192.022 75.36 218.723 74.7692 244.864 72.8389C284.075 69.9434 326.187 69.9434 326.187 76.6838C326.187 83.4243 326.187 101.574 326.187 112.416C326.187 123.258 326.187 224.588 326.187 232.597C326.187 240.606 321.817 240.606 310.713 240.606C299.609 240.606 167.757 246.81 160.409 240.606C153.062 234.402 154.83 134.898 154.83 125.871C154.83 116.844 154.83 104.706 154.83 97.9003" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M83.4863 161.086C114.702 161.301 137.894 160.79 153.064 159.553" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M246.363 243.056C246.363 275.232 246.363 313.209 246.363 317.986C246.363 325.996 241.972 325.996 230.815 325.996C219.658 325.996 87.1762 332.2 79.7934 325.996C72.4106 319.791 74.1877 220.275 74.1877 211.247C74.1877 202.219 74.1877 190.08 74.1877 183.273" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="0.503384" d="M178.366 158.02C213.423 155.454 246.363 155.454 246.363 161.428C246.363 167.402 246.363 183.488 246.363 193.097C246.363 196.37 246.363 208.945 246.363 224.387" stroke="#000000" stroke-opacity="0.9" stroke-width="12" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
              <div class="mt-6">
                <h3 class="head-font font-semibold text-2xl md:text-3xl 4xl:text-4xl text-darkblue-tf">Transparency</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</template>

<script>
export default {
  data() {
    return {
      vision: 'An innovative, safe and happy nation that thrives through and is enabled by Information and Communications Technology.',
      mission: 'DICT aspires for the Philippines to develop and flourish through innovation and constant development of ICT in the pursuit of a progressive, safe, secured, contented and happy Filipino nation.',
    };
  },
};
</script>

