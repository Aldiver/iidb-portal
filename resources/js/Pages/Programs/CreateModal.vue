<template>
    <teleport to="body">
        <transition leave-active-class="duration-200">
            <div
                v-show="show"
                class="fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
                scroll-region
            >
                <transition
                    enter-active-class="ease-out duration-300"
                    enter-from-class="opacity-0"
                    enter-to-class="opacity-100"
                    leave-active-class="ease-in duration-200"
                    leave-from-class="opacity-100"
                    leave-to-class="opacity-0"
                >
                    <div
                        v-show="show"
                        class="fixed inset-0 transform transition-all"
                        @click="close"
                    >
                        <div
                            class="absolute inset-0 bg-gray-500 dark:bg-gray-900 opacity-75"
                        />
                    </div>
                </transition>

                <transition
                    enter-active-class="ease-out duration-300"
                    enter-from-class="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    enter-to-class="opacity-100 translate-y-0 sm:scale-100"
                    leave-active-class="ease-in duration-200"
                    leave-from-class="opacity-100 translate-y-0 sm:scale-100"
                    leave-to-class="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                >
                    <div
                        v-show="show"
                        class="mb-6 bg-white dark:bg-gray-800 rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:mx-auto"
                        :class="maxWidthClass"
                    >
                        <div class="p-6">
                            <h2 class="text-lg font-semibold mb-4">
                                Add Program
                            </h2>
                            <form @submit.prevent="saveProgram">
                                <div class="mb-4">
                                    <label
                                        for="programName"
                                        class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1"
                                        >Program Name:</label
                                    >
                                    <input
                                        id="programName"
                                        type="text"
                                        v-model="form.name"
                                        class="w-full border-gray-300 dark:border-gray-700 rounded-md shadow-sm"
                                    />

                                    <label
                                        for="programVenue"
                                        class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1"
                                        >Venue:</label
                                    >
                                    <input
                                        id="programVenue"
                                        type="text"
                                        v-model="form.venue"
                                        class="w-full border-gray-300 dark:border-gray-700 rounded-md shadow-sm"
                                    />
                                </div>
                                <div class="flex justify-end">
                                    <button
                                        type="submit"
                                        class="px-4 py-2 bg-blue-500 text-white rounded-lg mr-2"
                                    >
                                        Save
                                    </button>
                                    <button
                                        @click="close"
                                        class="px-4 py-2 bg-gray-500 text-white rounded-lg"
                                    >
                                        Cancel
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </transition>
            </div>
        </transition>
    </teleport>
</template>

<script setup>
import { computed, defineEmits, defineProps, ref } from "vue";
import { useForm } from "@inertiajs/inertia-vue3";

const props = defineProps({
    show: {
        type: Boolean,
        default: false,
    },
    maxWidth: {
        type: String,
        default: "2xl",
    },
    closeable: {
        type: Boolean,
        default: true,
    },
});

const emit = defineEmits(["close", "save"]);

const form = useForm({
    name: "",
    venue: "",
});

const close = () => {
    if (props.closeable) {
        emit("close");
    }
};

const saveProgram = () => {
    form.post(route("programs.store"), {
        onSuccess: () => {
            form.reset();
            emit("save");
            close();
        },
    });
};

const maxWidthClass = computed(() => {
    return {
        sm: "sm:max-w-sm",
        md: "sm:max-w-md",
        lg: "sm:max-w-lg",
        xl: "sm:max-w-xl",
        "2xl": "sm:max-w-2xl",
    }[props.maxWidth];
});
</script>
