<template>
  <nav class="bg-gray-800">
    <div class="container mx-auto px-4 py-2">
      <div class="flex items-center justify-between">
        <div class="flex items-center">
          <a href="/" class="text-white font-semibold text-lg">DICT </a>
        </div>
        <div class="flex items-center">
            <li class="relative" @mouseover="openDropdown" @mouseleave="closeDropdown">
              <a href="#" class="text-gray-300 hover:text-white">Dropdown</a>
              <div v-if="isDropdownOpen" class="absolute bg-white mt-1 py-2 px-4 rounded shadow-lg">
                <a href="/dropdown-item1" class="block text-gray-700 hover:bg-gray-200 py-1">Home</a>
                <a href="/dropdown-item2" class="block text-gray-700 hover:bg-gray-200 py-1">AboutUs</a>
                <a href="/dropdown-item3" class="block text-gray-700 hover:bg-gray-200 py-1">Contact</a>
              </div>
            </li>
        </div>
      </div>
    </div>
  </nav>
</template>

<script>
import { ref } from 'vue';

export default {
  setup() {
    const isDropdownOpen = ref(false);

    function openDropdown() {
      isDropdownOpen.value = true;
    }

    function closeDropdown() {
      isDropdownOpen.value = false;
    }

    return {
      isDropdownOpen,
      openDropdown,
      closeDropdown,
    };
  },
}
</script>
