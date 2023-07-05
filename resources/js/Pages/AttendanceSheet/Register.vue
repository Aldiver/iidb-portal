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
});
const form = useForm({
    first_name: "",
    last_name: "",
    middle_name: "",
    gender: "",
    email: "",
    contact_number: "",
    school: "",
});

const submit = () => {
    form.post(route("attendancesheet.store", { program: props.program }), {
        onSuccess: () => {
            form.reset();
        },
    });
};
</script>

<template>
    <Head title="Sign in Attendance" />

    <AuthenticationCard>
        <template #logo>
            <AuthenticationCardLogo />
        </template>

        <h1 class="text-2xl font-bold mb-4">Attendee Registration</h1>

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="first_name" value="First Name" />
                <TextInput
                    id="first_name"
                    v-model="form.first_name"
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
                    autocomplete="additional-name"
                    type="text"
                    class="mt-1 block w-full"
                />
                <InputError class="mt-2" :message="form.errors.middle_name" />
            </div>

            <div>
                <InputLabel for="gender" value="Gender" />
                <TextInput
                    id="gender"
                    v-model="form.gender"
                    required
                    autocomplete="sex"
                    type="text"
                    class="mt-1 block w-full"
                />
                <InputError class="mt-2" :message="form.errors.gender" />
            </div>

            <div>
                <InputLabel for="email" value="Email Address" />
                <TextInput
                    id="email"
                    type="email"
                    v-model="form.email"
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
                    autocomplete="tel"
                    type="text"
                    class="mt-1 block w-full"
                />
                <InputError
                    class="mt-2"
                    :message="form.errors.contact_number"
                />
            </div>

            <div>
                <InputLabel for="school" value="School" />
                <TextInput
                    id="school"
                    v-model="form.school"
                    required
                    type="text"
                    class="mt-1 block w-full"
                />
                <InputError class="mt-2" :message="form.errors.school" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <PrimaryButton
                    class="ml-4"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Submit
                </PrimaryButton>
            </div>
        </form>
    </AuthenticationCard>
</template>
