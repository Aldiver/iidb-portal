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
                <!-- ... Modal content ... -->
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
                            <h2 class="text-5xl font-bold text-center">
                                Scan Me
                            </h2>
                            <div class="mb-4">
                                <img
                                    :src="qrCodeData"
                                    alt="QR Code"
                                    class="w-3/4 mx-auto"
                                />

                                <p class="mx-auto">
                                    or you can directly go to this link:
                                    <Link
                                        :href="
                                            route(
                                                'attendancesheet.register',
                                                id
                                            )
                                        "
                                        class="text-cyan-600"
                                    >
                                        {{ link }}
                                    </Link>
                                </p>
                            </div>
                            <div class="flex justify-end">
                                <button
                                    @click="close"
                                    class="px-4 py-2 bg-gray-500 text-white rounded-lg"
                                >
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </transition>
            </div>
        </transition>
    </teleport>
</template>

<script setup>
import { computed, ref, watch } from "vue";
import { Link } from "@inertiajs/inertia-vue3";
import qrcode from "qrcode";

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
    id: {
        type: Number,
        default: null,
    },
});

const emit = defineEmits(["close"]);
const qrCodeData = ref(null);
const link = ref(null);

watch(
    () => props.show,
    (newValue) => {
        if (newValue) {
            const data = `${Ziggy.url}/attendancesheet/register/${props.id}`;
            link.value = data;
            qrcode.toDataURL(data, (err, qrCodeImage) => {
                if (err) {
                    console.error(err);
                } else {
                    qrCodeData.value = qrCodeImage;
                }
            });
        } else {
            // qrCodeData.value = null;
        }
    }
);

const close = () => {
    if (props.closeable) {
        emit("close");
    }
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
