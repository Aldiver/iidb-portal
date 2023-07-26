<script setup>
import { defineProps } from "vue";
import AuthenticationCard from "@/Components/AuthenticationCard.vue";
import AuthenticationCardLogo from "@/Components/AuthenticationCardLogo.vue";

const props = defineProps({
    program: {
        type: Object,
        default: () => ({}),
    },
});

const formatDate = (dateString) => {
    const options = { year: "numeric", month: "long", day: "numeric" };
    const date = new Date(dateString);
    return date.toLocaleDateString(undefined, options);
};
</script>

<template>
        <AuthenticationCard>
            <template #logo>
            <AuthenticationCardLogo />
        </template>


                    <h2 class="font-bold justify-center text-2xl">Thank you for registering</h2>

</AuthenticationCard>

</template>
