<script setup>
import { Head, Link } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import { ref } from "vue";
import ApplicationMark from "@/Components/ApplicationMark.vue";
import Banner from "@/Components/Banner.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import NavLink from "@/Components/NavLink.vue";
import ANavLink from "@/Components/ANavLink.vue";
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import Navbar from '@/Components/Navbar.vue';
import SlidingBanner from '@/Components/SlidingBanner.vue';
import MVM from '@/Components/MVM.vue';
import Blog from '@/Components/Blog.vue';
import Aboutus from '@/Components/Aboutus.vue';
import Contactus from '@/Components/Contactus.vue';
import Programlist from '@/Components/Programlist.vue';

import { defineProps } from '@inertiajs/inertia-vue3';



defineProps({
  canLogin: Boolean,
  canRegister: Boolean,
  laravelVersion: String,
  phpVersion: String,
  programs: {
        type: Object,
        default: () => ({}),
        
    },

});


</script>
<template>
<nav class="sticky bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 shadow-lg">
  <!-- Primary Navigation Menu -->
  <div class="flex justify-between h-16">
    <div class="flex">
      <!-- Logo -->
      <div class="shrink-0 flex items-center">
        <Link :href="route('dashboard')">
          <ApplicationMark class="block h-auto w-auto" />
        </Link>
      </div>
      <!-- Navigation Links -->
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <ANavLink href="#home">Home</ANavLink>
      </div>
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <ANavLink href="#blog">Blog</ANavLink>
      </div>
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <ANavLink href="#about-us">About Us</ANavLink>
      </div>
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <ANavLink href="#mission-vision">Mission & Vision</ANavLink>
      </div>
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <ANavLink href="#contributors">Contributors</ANavLink>
      </div>

      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <ANavLink href="#contact-us">Contact Us</ANavLink>
      </div>

      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <ANavLink href="#testimonials">Testimonials</ANavLink>
      </div>
    </div>
    <!-- Login Button -->

    <div class="hidden space-x-8 mr-10 sm:-my-px sm:ml-10 sm:flex">
                                <NavLink :href="route('login')" :active="route().current('login')">
                                    Login
                                </NavLink>
                            </div>
  </div>
</nav>

    <section id="home"><SlidingBanner /></section>

    <section id="event">
    <div class="my-20 mx-20">
        <h1 class="xl:text-4xl text-3xl text-center my-10 text-gray-800 font-extrabold pb-6 sm:w-4/6 w-5/6 mx-auto">Join on our latest Events!</h1>
        <Programlist :programs="programs" /> 
    </div>

    </section>
    <section id="blog" class="mb-16">
            <div class="container flex justify-center mx-auto pt-16">
            <div>
                <h1 class="xl:text-4xl text-3xl text-center text-gray-800 font-extrabold pb-6 sm:w-4/6 w-5/6 mx-auto">LATEST NEWS IN DICT IX BASULTA</h1>
            </div>
        </div>
            <div class="blog-container">
                <blog/>
            </div>
    </section>
    <section id="about-us"><Aboutus /></section>
    <section id="mission-vision"><MVM /></section>
    <section id="contributors">
    <div class="pb-16 bg-zinc-300">
        <div class="container flex justify-center mx-auto pt-16">
            <div>
                <p class="text-gray-500 text-lg text-center font-normal pb-3">BUILDING TEAM</p>
                <h1 class="xl:text-4xl text-3xl text-center text-gray-800 font-extrabold pb-6 sm:w-4/6 w-5/6 mx-auto">The Talented People Behind the Scenes of the Organization</h1>
            </div>
        </div>
        <div class="w-full px-10 pt-10">
            <div class="container mx-auto">
                <div class="lg:flex md:flex sm:flex items-center xl:justify-between flex-wrap md:justify-around sm:justify-around lg:justify-around">
                    <div class="grid grid-cols-3 gap-32 p-4">
                    <div class="transform hover:scale-105 transition-transform duration-300">
                        <div class="h-300 rounded overflow-hidden shadow-md bg-white">
                            <div class="absolute -mt-20 w-full flex justify-center">
                                <div class="h-32 w-32">
                                    <img src="https://scontent.fdvo2-1.fna.fbcdn.net/v/t39.30808-6/353654835_1895444907515239_4678820893078711662_n.jpg?_nc_cat=101&cb=99be929b-3346023f&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeEWhAuVdStiqPoVY54Yj3Rkzbd-GLPewnLNt34Ys97Ccvum_goK97z59CMdS5Tr9pXlzLD3Mz4g_8HlLqQenWvi&_nc_ohc=YrZn0NOt_40AX9mK5FW&_nc_ht=scontent.fdvo2-1.fna&oh=00_AfBu9bQA0L7zlenESSCCHcjG8jDlcD1NSQHsIFyh7o7B_w&oe=64BDC757" alt="" class="rounded-full object-cover h-full w-full shadow-md" />
                                </div>
                            </div>  
                            <div class="px-6 mt-16">
                                <div class="font-bold text-3xl text-center pb-1">Joshua De Guzman</div>
                                <p class="text-gray-800 text-sm text-center">Product Design Head</p>
                                <p class="text-center text-gray-600 text-base pt-3 font-normal">The emphasis on innovation and technology in our companies has resulted in a few of them establishing global benchmarks in product design and development.</p>
                                <div class="w-full flex justify-center pt-5 pb-5">
                                    <a href="javascript:void(0)" class="mx-5">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                                                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="mx-5">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="mx-5">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="transform hover:scale-105 transition-transform duration-300">
                        <div class="h-300 rounded overflow-hidden shadow-md bg-white">
                            <div class="absolute -mt-20 w-full flex justify-center">
                                <div class="h-32 w-32">
                                    <img src="https://scontent.fmnl9-3.fna.fbcdn.net/v/t1.6435-9/56726502_2133240183418602_7700804648659058688_n.jpg?_nc_cat=100&cb=99be929b-3346023f&ccb=1-7&_nc_sid=174925&_nc_eui2=AeEIgBGCdiF0w_f7eJDhvK1PjrdCXLM_kPGOt0Jcsz-Q8UJkzZstpaucfHpGmNolL16Pu_yBkPsnw4LVwqOZ_xJm&_nc_ohc=zQT35glp4JwAX_8tYbT&_nc_ht=scontent.fmnl9-3.fna&oh=00_AfCZab_oLlU6VkXFDrwVqvK83EWxlPt2OPBLRCKXHQzHVQ&oe=64D85A5E" alt="" class="rounded-full object-cover h-full w-full shadow-md" />
                                </div>
                            </div>
                            <div class="px-6 mt-16">
                                <div class="font-bold text-3xl text-center pb-1">Royd Pamplona</div>
                                <p class="text-gray-800 text-sm text-center">Product Design Head</p>
                                <p class="text-center text-gray-600 text-base pt-3 font-normal">The emphasis on innovation and technology in our companies has resulted in a few of them establishing global benchmarks in product design and development.</p>
                                <div class="w-full flex justify-center pt-5 pb-5">
                                    <a href="javascript:void(0)" class="mx-5">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                                                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="mx-5">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="mx-5">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="transform hover:scale-105 transition-transform duration-300">
                        <div class="h-300 rounded overflow-hidden shadow-md bg-white">
                            <div class="absolute -mt-20 w-full flex justify-center">
                                <div class="h-32 w-32">
                                    <img src="https://scontent.fdvo2-2.fna.fbcdn.net/v/t39.30808-6/283650932_722723818850092_5118523132048873966_n.jpg?_nc_cat=106&cb=99be929b-3346023f&ccb=1-7&_nc_sid=174925&_nc_eui2=AeE_BItdY9Ow81WaBBrwfSb5tO9MtdsEWoO070y12wRag0mzLUkn1ExHp0vlzYlMfKM3C6TWfpkv1ASZ5-lT3Tvi&_nc_ohc=DBWWt72LSzQAX94CXTZ&_nc_ht=scontent.fdvo2-2.fna&oh=00_AfDKzUphgkKXSY5ThTry3hPPv0RBeNRkjce24PbU2GeR9Q&oe=64BD7531" alt="" class="rounded-full object-cover h-full w-full shadow-md" />
                                </div>
                            </div>
                            <div class="px-6 mt-16">
                                <div class="font-bold text-3xl text-center pb-1">Gee Mercado</div>
                                <p class="text-gray-800 text-sm text-center">Manager Development</p>
                                <p class="text-center text-gray-600 text-base pt-3 font-normal">Our services encompass the assessment and repair of property damage caused by water, fire, smoke, or mold. We can also be a part of the restoration. Thank you!</p>
                                <div class="w-full flex justify-center pt-5 pb-5">
                                    <a href="javascript:void(0)" class="mx-5">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                                                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="mx-5">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="mx-5">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="transform hover:scale-105 transition-transform duration-300">
                        <div class="rounded overflow-hidden shadow-md bg-white">
                            <div class="absolute -mt-20 w-full flex justify-center">
                                <div class="h-32 w-32">
                                    <img src="https://scontent.fmnl9-1.fna.fbcdn.net/v/t1.6435-9/118603347_3465805546819099_3606932725222808194_n.jpg?_nc_cat=109&cb=99be929b-3346023f&ccb=1-7&_nc_sid=174925&_nc_eui2=AeFDBDzNL04qTCgCkaCEKgznZnacPzyf3g1mdpw_PJ_eDZbtyshjh-BIEcdGZeDCM7duMdjiO9t8aUF8xEgxNtSd&_nc_ohc=nnWFDtEzZJUAX9BUrQf&_nc_ht=scontent.fmnl9-1.fna&oh=00_AfBqq-rZ_eNLpC03ctTR_vKsvVohpoqfvEFHxc8uj5ixQg&oe=64D846E8" alt="" class="rounded-full object-cover h-full w-full shadow-md" />
                                </div>
                            </div>
                            <div class="px-6 mt-16">
                                <div class="font-bold text-3xl text-center pb-1">Martha Bernaldez</div>
                                <p class="text-gray-800 text-sm text-center">POS Support</p>
                                <p class="text-center text-gray-600 text-base pt-3 font-normal">An avid open-source developer who loves to be creative and inventive. I have 20 years of experience in the field of being a POS Support here in our agency.</p>
                                <div class="w-full flex justify-center pt-5 pb-5">
                                    <a href="javascript:void(0)" class="mx-5">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                                                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="mx-5">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="mx-5">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="transform hover:scale-105 transition-transform duration-300">
                        <div class="rounded overflow-hidden shadow-md bg-white">
                            <div class="absolute -mt-20 w-full flex justify-center">
                                <div class="h-32 w-32">
                                    <img src="https://scontent.fmnl9-2.fna.fbcdn.net/v/t1.6435-9/89384611_3057425877641264_5720696507544371200_n.jpg?_nc_cat=101&cb=99be929b-3346023f&ccb=1-7&_nc_sid=174925&_nc_eui2=AeF4m3JJcpMQRVf8eYPjtX8DXId7FjGVoA1ch3sWMZWgDSf58VoMIIgab-C09q_xumM-QenSPjI4O-6LgXoJKjVT&_nc_ohc=_QYBf-kzUE4AX-MMxUz&_nc_ht=scontent.fmnl9-2.fna&oh=00_AfBWw_TqI2yMJ-DsohftFaJXRH68VnNZ0d3bu4AxZ0ZN7w&oe=64D86293" alt="" class="rounded-full object-cover h-full w-full shadow-md" />
                                </div>
                            </div>
                            <div class="px-6 mt-16">
                                <div class="font-bold text-3xl text-center pb-1">Rashdee Salih</div>
                                <p class="text-gray-800 text-sm text-center">Product Design Head</p>
                                <p class="text-center text-gray-600 text-base pt-3 font-normal">Product designer with interests in immersive computing and XR, political ventures, and emerging technologies. Able to take ideas and give them a life.</p>
                                <div class="w-full flex justify-center pt-5 pb-5">
                                    <a href="javascript:void(0)" class="mx-5">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                                                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="mx-5">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="mx-5">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="transform hover:scale-105 transition-transform duration-300">
                        <div class="rounded overflow-hidden shadow-md bg-white">
                            <div class="absolute -mt-20 w-full flex justify-center">
                                <div class="h-32 w-32">
                                    <img src="https://scontent.fmnl9-2.fna.fbcdn.net/v/t1.18169-9/5155_96159473609_2165977_n.jpg?_nc_cat=107&cb=99be929b-3346023f&ccb=1-7&_nc_sid=cdbe9c&_nc_eui2=AeHd7373bR7woTrCohUxsegIpxOH2A5887enE4fYDnzzt7C47zwB3ks9ELbVcV7Y0ryiyJ8xXdH9HjNEVSxbSrHe&_nc_ohc=sjprviiH8wAAX_IdR_f&_nc_ht=scontent.fmnl9-2.fna&oh=00_AfCZHE4wE10SrFVJpZhUF-SO8xKQ3BWfByglZ-foOtFCmw&oe=64D82FA5" alt="" class="rounded-full object-cover h-full w-full shadow-md" />
                                </div>
                            </div>
                            <div class="px-6 mt-16">
                                <div class="font-bold text-3xl text-center pb-1">Maynard Calingacion</div>
                                <p class="text-gray-800 text-sm text-center">UX Designer</p>
                                <p class="text-center text-gray-600 text-base pt-3 font-normal">A UX designer is the voice of the customer. Our job is to look beyond the business goals. We don't just experience user interface but also questions it. Thank you!</p>
                                <div class="w-full flex justify-center pt-5 pb-5">
                                    <a href="javascript:void(0)" class="mx-5">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                                                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="mx-5">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="mx-5">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section id="contact-us" class="container my-24 mx-auto md:px-6"><Contactus/></section>
            <!--- Testimonials 1-->
    <section id="testimonials" class="bg-zinc-300 pt-20 mt-20">
        <h2 class="text-2xl leading-6 text-gray-800 text-center px-20">Testimonials</h2>
        <h1 class="lg:text-5xl md:text-4xl text-2xl font-semibold px-4 leading-10 text-gray-800 mt-6 text-center">What our client says</h1>
        <div class="container mx-auto grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 xl:px-20 px-10 py-20 gap-6">
            <div>
                <div class="group w-full bg-white relative flex flex-col items-center hover:bg-indigo-700 cursor-pointer shadow-md md:p-12 p-6">
                    <div class="text-gray-600 group-hover:text-white flex flex-col items-center">
                        <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path d="M25.2578 14.3309H19.2969C19.3988 9.55819 20.6309 9.01642 22.1785 8.86178L22.7753 8.78051V3.53242L22.0874 3.57292C20.0666 3.69783 17.8323 4.09805 16.3417 6.11965C15.035 7.89183 14.459 10.7871 14.459 15.2316V23.4673H25.2578V14.3309Z" fill="currentColor" />
                                <path d="M11.48 23.4673V14.3309H5.59859C5.70049 9.55819 6.89283 9.01642 8.44042 8.86178L8.99749 8.78051V3.53242L8.34931 3.57292C6.32844 3.69783 4.07421 4.09805 2.5836 6.11965C1.27707 7.89183 0.681147 10.7871 0.681147 15.2316V23.4673H11.48Z" fill="currentColor" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="24.5767" height="27" fill="white" transform="translate(25.2578 27) rotate(-180)" />
                                </clipPath>
                            </defs>
                        </svg>
                        <p class="xl:w-80 text-base leading-normal text-center mt-4">When our designs need an expert opinion or approval, I know I can rely on your agency Thank you for all your help-I will be recommending you to everyone</p>
                    </div>
                    <div class="text-white group-hover:text-indigo-700 absolute bottom-0 -mb-6">
                        <svg width="34" height="28" viewBox="0 0 34 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_dd)">
                                <path d="M17 19L28.2583 3.25H5.74167L17 19Z" fill="currentColor" />
                            </g>
                            <defs>
                                <filter id="filter0_dd" x="0.741699" y="0.25" width="32.5167" height="27.75" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                    <feMorphology radius="1" operator="erode" in="SourceAlpha" result="effect1_dropShadow" />
                                    <feOffset dy="4" />
                                    <feGaussianBlur stdDeviation="3" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                    <feOffset dy="2" />
                                    <feGaussianBlur stdDeviation="2.5" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.06 0" />
                                    <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow" result="shape" />
                                </filter>
                            </defs>
                        </svg>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center mt-10">
                    <img src="https://i.ibb.co/ZgF5Zzz/avatar-1.png" alt="profile pictre" class="w-12 h-12" />
                    <p class="text-base font-semibold leading-4 my-2 text-gray-800">Jose Ramon Mary</p>
                    <p class="text-base leading-4 text-center text-gray-600">Developer</p>
                </div>
            </div>
            <div>
                <div class="group w-full bg-white relative flex flex-col items-center hover:bg-indigo-700 cursor-pointer shadow-md md:p-12 p-6">
                    <div class="text-gray-600 group-hover:text-white flex flex-col items-center">
                        <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path d="M25.2578 14.3309H19.2969C19.3988 9.55819 20.6309 9.01642 22.1785 8.86178L22.7753 8.78051V3.53242L22.0874 3.57292C20.0666 3.69783 17.8323 4.09805 16.3417 6.11965C15.035 7.89183 14.459 10.7871 14.459 15.2316V23.4673H25.2578V14.3309Z" fill="currentColor" />
                                <path d="M11.48 23.4673V14.3309H5.59859C5.70049 9.55819 6.89283 9.01642 8.44042 8.86178L8.99749 8.78051V3.53242L8.34931 3.57292C6.32844 3.69783 4.07421 4.09805 2.5836 6.11965C1.27707 7.89183 0.681147 10.7871 0.681147 15.2316V23.4673H11.48Z" fill="currentColor" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="24.5767" height="27" fill="white" transform="translate(25.2578 27) rotate(-180)" />
                                </clipPath>
                            </defs>
                        </svg>
                        <p class="xl:w-80 text-base leading-normal text-center mt-4">When our designs need an expert opinion or approval, I know I can rely on your agency Thank you for all your help-I will be recommending you to everyone</p>
                    </div>
                    <div class="text-white group-hover:text-indigo-700 absolute bottom-0 -mb-6">
                        <svg width="34" height="28" viewBox="0 0 34 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_dd)">
                                <path d="M17 19L28.2583 3.25H5.74167L17 19Z" fill="currentColor" />
                            </g>
                            <defs>
                                <filter id="filter0_dd" x="0.741699" y="0.25" width="32.5167" height="27.75" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                    <feMorphology radius="1" operator="erode" in="SourceAlpha" result="effect1_dropShadow" />
                                    <feOffset dy="4" />
                                    <feGaussianBlur stdDeviation="3" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                    <feOffset dy="2" />
                                    <feGaussianBlur stdDeviation="2.5" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.06 0" />
                                    <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow" result="shape" />
                                </filter>
                            </defs>
                        </svg>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center mt-10">
                    <img src="https://i.ibb.co/8BLjmqz/avatar-2.png" alt="profile pictre" class="w-12 h-12" />
                    <p class="text-base font-semibold leading-4 my-2 text-gray-800">Adam Tagle</p>
                    <p class="text-base leading-4 text-center text-gray-600">Designer</p>
                </div>
            </div>
            <div>
                <div class="group w-full bg-white relative flex flex-col items-center hover:bg-indigo-700 cursor-pointer shadow-md md:p-12 p-6">
                    <div class="text-gray-600 group-hover:text-white flex flex-col items-center">
                        <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path d="M25.2578 14.3309H19.2969C19.3988 9.55819 20.6309 9.01642 22.1785 8.86178L22.7753 8.78051V3.53242L22.0874 3.57292C20.0666 3.69783 17.8323 4.09805 16.3417 6.11965C15.035 7.89183 14.459 10.7871 14.459 15.2316V23.4673H25.2578V14.3309Z" fill="currentColor" />
                                <path d="M11.48 23.4673V14.3309H5.59859C5.70049 9.55819 6.89283 9.01642 8.44042 8.86178L8.99749 8.78051V3.53242L8.34931 3.57292C6.32844 3.69783 4.07421 4.09805 2.5836 6.11965C1.27707 7.89183 0.681147 10.7871 0.681147 15.2316V23.4673H11.48Z" fill="currentColor" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="24.5767" height="27" fill="white" transform="translate(25.2578 27) rotate(-180)" />
                                </clipPath>
                            </defs>
                        </svg>
                        <p class="xl:w-80 text-base leading-normal text-center mt-4">When our designs need an expert opinion or approval, I know I can rely on your agency Thank you for all your help-I will be recommending you to everyone</p>
                    </div>
                    <div class="text-white group-hover:text-indigo-700 absolute bottom-0 -mb-6">
                        <svg width="34" height="28" viewBox="0 0 34 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_dd)">
                                <path d="M17 19L28.2583 3.25H5.74167L17 19Z" fill="currentColor" />
                            </g>
                            <defs>
                                <filter id="filter0_dd" x="0.741699" y="0.25" width="32.5167" height="27.75" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                    <feMorphology radius="1" operator="erode" in="SourceAlpha" result="effect1_dropShadow" />
                                    <feOffset dy="4" />
                                    <feGaussianBlur stdDeviation="3" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                    <feOffset dy="2" />
                                    <feGaussianBlur stdDeviation="2.5" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.06 0" />
                                    <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow" result="shape" />
                                </filter>
                            </defs>
                        </svg>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center mt-10">
                    <img src="https://i.ibb.co/y0KCX7p/avatar-3.png" alt="profile pictre" class="w-12 h-12" />
                    <p class="text-base font-semibold leading-4 my-2 text-gray-800">Frozza Manubag</p>
                    <p class="text-base leading-4 text-center text-gray-600">Support</p>
                </div>
            </div>
        </div>
    </section>
              



        <footer class="bg-gray-800 py-4">
            <div class="container mx-auto px-4">
            <p class="text-center text-white">All rights to the handsome makers</p>
            </div>
        </footer>
</template>


<script>
export default {
  methods: {
    scrollToSection(event) {
      event.preventDefault();
      const targetId = event.target.getAttribute("href");
      const targetElement = document.querySelector(targetId);

      if (targetElement) {
        // Using native JavaScript 'scrollIntoView' method
        targetElement.scrollIntoView({ behavior: "smooth" });
      }
    },
  },
};
</script>


<style scoped>
.sticky {

  width: 100%;
  position: sticky;
  top: 0;
  z-index: 999;
  /* Add other styling properties for your sticky navbar */
}

.banner-container {
  overflow: hidden;
  width: 100%;
  height: 300px; /* Adjust the height as per your requirements */
}

.banner-slide {
  display: inline-block;
  width: 100%;
  height: 100%;
  transition: transform 0.5s ease; /* Add transition for smooth sliding */
}
</style>
