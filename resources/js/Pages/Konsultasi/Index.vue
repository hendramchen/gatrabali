<script setup>
import VisitorLayout from '@/Layouts/VisitorLayout.vue';
import { Head } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Link, useForm } from '@inertiajs/vue3';


const form = useForm({
    fullname: '',
    email: '',
    phone: '',
    complaint: ''
});
</script>

<template>

    <Head title="Konsultasi" />

    <VisitorLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h1 class="text-2xl mb-5">Konsultasi</h1>
                <form @submit.prevent="form.patch(route('profile.update'))" class="mt-6 space-y-6">
                    <div>
                        <InputLabel for="fullname" value="Nama lengkap" />

                        <TextInput id="fullname" type="text" class="mt-1 block w-full" v-model="form.fullname" required
                            autofocus autocomplete="fullname" />

                        <InputError class="mt-2" :message="form.errors.fullname" />
                    </div>

                    <div>
                        <InputLabel for="email" value="Email" />

                        <TextInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required
                            autocomplete="email" />

                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>

                    <div>
                        <InputLabel for="phone" value="Telephone atau (WhatsApp)" />

                        <TextInput id="phone" type="tel" class="mt-1 block w-full" v-model="form.phone" required
                            autocomplete="phone" />

                        <InputError class="mt-2" :message="form.errors.phone" />
                    </div>

                    <div>
                        <InputLabel for="complaint" value="Keluhan" />

                        <TextInput id="complaint" type="tel" class="mt-1 block w-full" v-model="form.complaint" required
                            autocomplete="complaint" />

                        <InputError class="mt-2" :message="form.errors.complaint" />
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
        </div>
    </VisitorLayout>
</template>
