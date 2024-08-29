<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Link, useForm } from '@inertiajs/vue3';
import TextareaInput from '@/Components/TextareaInput.vue';
import { ref } from 'vue';

const props = defineProps({
    about: {
        type: Object
    }
});

const aboutData = ref(props.about);

const form = useForm({
    title: aboutData.value.title,
    subtitle: aboutData.value.subtitle,
    description: aboutData.value.description
});

</script>

<template>

    <Head title="Tentang" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Pengaturan Tentang</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900">Pengaturan Tentang</h2>

                        <p class="mt-1 text-sm text-gray-600">
                            Update informasi "Tentang" Gatrabali disini.
                        </p>
                    </header>
                    <form @submit.prevent="form.patch(route('profile.update'))" class="mt-6 space-y-6">
                        <div>
                            <InputLabel for="title" value="Title" />
                            <TextInput id="title" type="text" class="mt-1 block w-full" v-model="form.title" required
                                autofocus autocomplete="title" />
                            <InputError class="mt-2" :message="form.errors.title" />
                        </div>
                        <div>
                            <InputLabel for="subtitle" value="Subtitle" />
                            <TextInput id="subtitle" type="text" class="mt-1 block w-full" v-model="form.subtitle"
                                required autofocus autocomplete="subtitle" />
                            <InputError class="mt-2" :message="form.errors.subtitle" />
                        </div>
                        <div>
                            <InputLabel for="description" value="description" />
                            <TextareaInput id="description" class="mt-1 block w-full" v-model="form.description"
                                required />
                            <InputError class="mt-2" :message="form.errors.description" />
                        </div>
                        <div class="flex items-center gap-4">
                            <PrimaryButton :disabled="form.processing">Save</PrimaryButton>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>