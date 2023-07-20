<script setup>
import { Head, Link } from "@inertiajs/vue3";
import Navbar1 from "@/Components/Navbar1.vue";
import Slides from "@/Components/Slides.vue";
import Avatar from "@/Components/Avatar.vue";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>
<template>
    <Head title="Welcome" />
    <Navbar1 />
    <Slides />
    <Avatar />
    


    <div class="bg-white-100 text-blue-900 min-h-screen flex flex-col">
    <div class="max-w w-full">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 text-center">
                <h1 class="text-center md:text-center text-dark-tf text-4xl sm:text-4xl md:text-5xl lg:text-5xl xl:text-6xl 4xl:text-7xl w-full tracking-wide" style="font-family: ;">
  <span class="head-font leading-relaxed md:leading-14 lg:leading-15 font-bold">Department of Information and Communications Technology</span>
  <span class="brand-font-medium text-blue-tf leading-relaxed md:leading-14 lg:leading-15"></span>
</h1>                
</h1>
    
                <p class="text-center">
                    Attendance Management System
                </p>
                <p class="text-xl mb-8 text-center">
                    IIDB - Region IX and BASULTA
                </p>
                
                    <Link
                        v-if="$page.props.auth.user"
                        :href="route('dashboard')"
                        class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold flex justify-center py-2 mb-8 px-4 rounded"
                        >Dashboard</Link
                    >
                    <template v-else>
                        <Link
    v-if="canRegister"
    :href="route('login')"
    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 mb-0 px-4 rounded mr-0 flex justify-center"
    >Login</Link>

                        <Link
    v-if="canRegister"
    :href="route('register')"
    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 mb-8 px-4 rounded mr-0 flex justify-center"
    >Register</Link>
                    </template>
                </div>  
            </div>
        <footer class="bg-gray-800 shadow">
            <div class="container mx-auto px-4 py-4 text-center">
                &copy; 2023 Ateneo De Zamboanga University. All rights
                reserved.
            </div>
        </footer>
</template>
