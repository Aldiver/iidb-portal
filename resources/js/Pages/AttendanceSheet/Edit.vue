<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3";
import AuthenticationCardLogo from "@/Components/AuthenticationCardLogo.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import AuthenticationCard from "@/Components/AuthenticationCard.vue";

const props = defineProps({
  program: {
    type: Object,
    default: () => ({}),
  },
  attendee: {
    type: Object,
    default: () => ({}),
  },
  oldInput: {
    type: Object,
    default: () => ({}),
  },
});


const form = useForm({
  first_name: props.attendee.first_name || "",
  last_name: props.attendee.last_name || "",
  middle_name: props.attendee.middle_name || "",
  gender: props.attendee.gender || "",
  email: props.attendee.email || "",
  contact_number: props.attendee.contact_number || "",
  affiliation_name: props.attendee.affiliation_name || "",
  affiliation: props.attendee.affiliation || "",
});


console.log("attendee id: ", props.attendee.id);

const submit = () => {
    form.post(
        route("attendancesheet.update", {
            program: props.program.id,
            attendee: props.attendee.id, // Replace attendeeId with the actual ID of the attendee being edited
        }),
        {
            onSuccess: () => {
                form.reset();
            },
        }
    );
};

</script>

<template>
    <Head title="Sign in Attendance" />

    <AuthenticationCard>
        <template #logo>
            <AuthenticationCardLogo />
        </template>

        <h1 class="text-2xl font-bold mb-4">Attendee Registration</h1>

        <h1 class="text-2xl font-bold mb-4">Event: {{ program.name }}</h1>
        <form @submit.prevent="submit">
            <div>
            <InputLabel for="first_name" value="First Name" />
            <TextInput
                id="first_name"
                v-model="form.first_name"
                :placeholder="props.oldInput.first_name || form.first_name"
                required
                autofocus
                type="text"
                class="mt-1 block w-full"
            />
            <InputError class="mt-2" :message="form.errors.first_name" />
            </div>

            <div>
            <InputLabel for="last_name" value="Last Name" />
            <TextInput
                id="last_name"
                v-model="form.last_name"
                :placeholder="props.oldInput.last_name || form.last_name"
                required
                autocomplete="family-name"
                type="text"
                class="mt-1 block w-full"
            />
            <InputError class="mt-2" :message="form.errors.last_name" />
            </div>

            <div>
            <InputLabel for="middle_name" value="Middle Name" />
            <TextInput
                id="middle_name"
                v-model="form.middle_name"
                :placeholder="props.oldInput.middle_name || form.middle_name"
                autocomplete="additional-name"
                type="text"
                class="mt-1 block w-full"
            />
            <InputError class="mt-2" :message="form.errors.middle_name" />
            </div>

            <div>
            <InputLabel for="gender" value="Gender" />
            <select
                v-model="form.gender"
                id="gender"
                class="mt-1 block w-full border border-gray-300 rounded-md bg-white px-3 py-2 pr-10 focus:outline-none focus:ring focus:border-blue-300"
                required
            >
                <option value="" disabled>Select gender</option>
                <option value="Male" :selected="form.gender === 'Male' || props.oldInput.gender === 'Male'">Male</option>
                <option value="Female" :selected="form.gender === 'Female' || props.oldInput.gender === 'Female'">Female</option>
                <option value="Other" :selected="form.gender === 'Other' || props.oldInput.gender === 'Other'">Prefer not to say</option>
            </select>
            <div class="mt-2" v-if="form.errors.gender">{{ form.errors.gender }}</div>
            </div>

            <!-- Add other form fields as needed -->
            <div>
            <InputLabel for="email" value="Email Address" />
            <TextInput
                id="email"
                type="email"
                v-model="form.email"
                :placeholder="props.oldInput.email || form.email"
                autocomplete="email"
                class="mt-1 block w-full"
            />
            <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div>
            <InputLabel for="contact_number" value="Contact Number" />
            <TextInput
                id="contact_number"
                v-model="form.contact_number"
                :placeholder="props.oldInput.contact_number || form.contact_number"
                autocomplete="tel"
                type="text"
                class="mt-1 block w-full"
            />
            <InputError class="mt-2" :message="form.errors.contact_number" />
            </div>

            <div>
            <InputLabel for="affiliation" value="Affiliation" />
            <select
                id="affiliation"
                v-model="form.affiliation"
                class="mt-1 block w-full border border-gray-300 rounded-md bg-white px-3 py-2 pr-10 focus:outline-none focus:ring focus:border-blue-300"
            >
                <option value="" disabled>Select affiliation</option>
                <option value="Agency" :selected="form.affiliation === 'Agency' || props.oldInput.affiliation === 'Agency'">Agency</option>
                <option value="Organization" :selected="form.affiliation === 'Organization' || props.oldInput.affiliation === 'Organnization'">Organization</option>
                <option value="School" :selected="form.affiliation === 'School' || props.oldInput.affiliation === 'School'">School</option>
            </select>
            </div>

            <div>
            <InputLabel for="affiliation_name" value="Affiliation Name" />
            <TextInput
                id="affiliation_name"
                v-model="form.affiliation_name"
                :placeholder="props.oldInput.affiliation_name  || form.affiliation_name"
                autocomplete="tel"
                type="text"
                class="mt-1 block w-full"
            />
            <InputError class="mt-2" :message="form.errors.affiliation_name" />
            </div>

            <div class="flex items-center justify-end mt-4">
            <PrimaryButton
                class="ml-4"
                :class="{ 'opacity-25': form.processing }"
                :disabled="form.processing"
            >
                Update
            </PrimaryButton>
            </div>
        </form>

    </AuthenticationCard>
</template>