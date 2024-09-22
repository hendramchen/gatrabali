<script setup>
import VisitorLayout from '@/Layouts/VisitorLayout.vue';
import { Head } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { useForm } from '@inertiajs/vue3';
import TextareaInput from '@/Components/TextareaInput.vue';
import VerifiedEmail from '@/Components/VerifiedEmail.vue';

const props = defineProps({
    user: Object,
    consultation: Object,
    status: String,
});

const form = useForm({
    fullname: props.user ? props.user.name : '',
    email: props.user ? props.user.email : '',
    phone: props.user ? props.user.phone : '',
    problem: props.consultation.problem ?? ''
});
</script>

<template>

    <Head title="Konsultasi" />

    <VisitorLayout>

        <div class="py-12 flex-1">
            <h1 class="text-4xl mb-8 text-slate-700 font-semibold">
                Formulir Konsultasi
            </h1>

            <div v-if="user.email_verified_at === null">
                <VerifiedEmail :status="status" />
            </div>
            <!-- <form @submit.prevent="form.patch(route('profile.update'))" class="mt-6 space-y-6"> -->
            <form @submit.prevent="form.post(route('konsultasi.store'))" class="mt-6 space-y-6" v-else>
                <div class="">
                    <InputLabel for="fullname" value="Nama lengkap" />

                    <input
                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
                        :value="form.fullname" disabled />
                </div>

                <div>
                    <InputLabel for="email" value="Email" />

                    <input
                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
                        :value="form.email" disabled />
                </div>

                <div class="">
                    <InputLabel for="phone" value="Telephone atau (WhatsApp)" />

                    <TextInput id="phone" type="tel" class="mt-1 block w-full" v-model="form.phone" />

                    <InputError class="mt-2" :message="form.errors.phone" />
                </div>

                <div>
                    <InputLabel for="problem" value="Keluhan / Masalah" />

                    <TextareaInput id="problem" class="mt-1 block w-full" v-model="form.problem" required />

                    <InputError class="mt-2" :message="form.errors.problem" />
                </div>

                <div class="flex items-center gap-4">
                    <PrimaryButton :disabled="form.processing">Save</PrimaryButton>

                    <Transition enter-active-class="transition ease-in-out" enter-from-class="opacity-0"
                        leave-active-class="transition ease-in-out" leave-to-class="opacity-0">
                        <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">Saved.</p>
                    </Transition>
                </div>
            </form>
        </div>

    </VisitorLayout>
</template>
