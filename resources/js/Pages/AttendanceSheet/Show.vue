<script setup>
import { defineProps } from "vue";

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
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg"
            >
                <div class="px-4 py-5 sm:p-6">
                    <h2 class="font-bold text-4xl">{{ program.name }}</h2>
                    <p>
                        {{ program.venue }},
                        {{ formatDate(program.created_at) }}
                    </p>
                </div>
                <hr />
                <div class="px-4 py-5 sm:p-6">
                    <!-- <h4 class="font-bold text-md mb-2">Attendees</h4> -->
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
                                    Affiliation Name
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider"
                                >
                                    Affiliation
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider"
                                >
                                    Gender
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider"
                                >
                                    Email
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider"
                                >
                                    Contact Number
                                </th>
                            </tr>
                        </thead>
                        <tbody
                            class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700"
                        >
                            <tr
                                v-for="attendee in program.attendees"
                                :key="attendee.id"
                            >
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ attendee.last_name }},
                                    {{ attendee.first_name }}
                                    {{ attendee.middle_name }}
                                </td>
                                
                                
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ attendee.affiliation }}
                                </td>
                                
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ attendee.affiliation_name }}
                                </td>
                                
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ attendee.gender }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ attendee.email }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ attendee.contact_number }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>
