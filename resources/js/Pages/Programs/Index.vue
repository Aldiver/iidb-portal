<script setup>
import { ref, defineProps } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import CreateModal from "./CreateModal.vue";
import QRModal from "./QRModal.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { Link } from "@inertiajs/inertia-vue3";

const props = defineProps({
    programs: {
        type: Object,
        default: () => ({}),
    },
});

const showAddModal = ref(false);
const showQRModal = ref(false);
const currentProgramId = ref(0);

const saveProgram = (program) => {
    // Logic to save the program to the database
    // Call the appropriate controller method or perform the necessary actions
    // For now, let's log the program data
    console.log("Saving program:", program);
    showAddModal.value = false;
};

const formatDate = (dateString) => {
    const options = { year: "numeric", month: "long", day: "numeric" };
    const date = new Date(dateString);
    return date.toLocaleDateString(undefined, options);
};
</script>

<template>
    <AppLayout title="Programs">
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"
            >
                Hello World
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg"
                >
                    <div class="flex items-center justify-end mt-4 mb-2">
                        <PrimaryButton
                            class="mr-4"
                            @click="showAddModal = true"
                        >
                            Create
                        </PrimaryButton>
                    </div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider"
                                >
                                    Name
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider"
                                >
                                    Date
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider"
                                >
                                    Venue
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider"
                                >
                                    Link
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider"
                                >
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody
                            class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700"
                        >
                            <tr
                                v-for="program in programs.data"
                                :key="program.id"
                            >
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <Link
                                        :href="
                                            route('programs.show', program.id)
                                        "
                                        class="no-underline hover:underline text-cyan-600 dark:text-cyan-400"
                                    >
                                        {{ program.name }}
                                    </Link>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ formatDate(program.created_at) }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ program.venue }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <!-- <Link
                                        :href="
                                            route(
                                                'attendancesheet.register',
                                                program
                                            )
                                        "
                                        class="mr-1"
                                    >
                                        Register
                                    </Link> -->
                                    <span
                                        class="mdi mdi-qrcode cursor-pointer text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300"
                                        @click="
                                            (showQRModal = true),
                                                (currentProgramId = program.id)
                                        "
                                    >
                                        QR Code
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button @click="deleteProgram(program.id)">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5" class="px-6 py-4">
                                    <nav
                                        class="flex items-center justify-between"
                                    >
                                        <div>
                                            <p
                                                class="text-sm text-gray-700 dark:text-gray-300"
                                            >
                                                Showing
                                                <span class="font-medium">{{
                                                    programs.from
                                                }}</span>
                                                to
                                                <span class="font-medium">{{
                                                    programs.to
                                                }}</span>
                                                of
                                                <span class="font-medium">{{
                                                    programs.total
                                                }}</span>
                                                results
                                            </p>
                                        </div>
                                        <div class="flex items-center">
                                            <button
                                                :disabled="
                                                    !programs.prev_page_url
                                                "
                                                @click="
                                                    $inertia.visit(
                                                        programs.prev_page_url
                                                    )
                                                "
                                                class="mr-2 px-3 py-1.5 border border-gray-300 dark:border-gray-700 rounded-md text-sm font-medium text-gray-500 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700"
                                            >
                                                Previous
                                            </button>
                                            <button
                                                :disabled="
                                                    !programs.next_page_url
                                                "
                                                @click="
                                                    $inertia.visit(
                                                        programs.next_page_url
                                                    )
                                                "
                                                class="px-3 py-1.5 border border-gray-300 dark:border-gray-700 rounded-md text-sm font-medium text-gray-500 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700"
                                            >
                                                Next
                                            </button>
                                        </div>
                                    </nav>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        
 

        <!-- Data entry modal -->
        <CreateModal
            :show="showAddModal"
            @close="showAddModal = false"
            @save="saveProgram"
        />

        <!-- Data entry modal -->
        <QRModal
            :id="currentProgramId"
            :show="showQRModal"
            @close="showQRModal = false"
        />
    </AppLayout>
</template>
