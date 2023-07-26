<template>
    <div class="bg-gray-100 mb-20 py-16">
      <div class="mx-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
          <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">About Us</h1>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-32">
            <!-- YouTube Video -->
            <div class="aspect-w-16 aspect-h-9">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/ZsRqj9KtjVs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <!-- Description -->
            <div class="text-gray-500">
              <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our Story</h2>
              <p class="text-gray-500">The Department of Information and Communications Technology (DICT) of the Philippines was established in 2016 to drive ICT development and utilization. It focuses on expanding connectivity, improving internet access, enhancing cybersecurity, promoting digital literacy, supporting innovation, and driving digital transformation in government services. The DICT plays a crucial role in advancing the Philippines' socio-economic progress through strategic ICT initiatives.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <style>
    .aspect-w-16 { width: 100%; }
    .aspect-h-9 { height: 0; padding-bottom: 56.25%; }
  </style>
  