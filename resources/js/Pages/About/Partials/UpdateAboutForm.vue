<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Link, useForm } from '@inertiajs/vue3';
import TextareaInput from '@/Components/TextareaInput.vue';
import { onMounted } from 'vue';

defineProps({
    about: {
        type: Array
    }
});

const form = useForm({
    title: 'title...',//about[0].title,
    subtitle: 'subtile...', //about[0].subtitle,
    description: 'description...', /// about[0].description
});

onMounted(() => {
    console.log(`the component is now mounted.`)
});
</script>

<template>
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900">Pengaturan Tentang</h2>

            <p class="mt-1 text-sm text-gray-600">
                Update informasi "Tentang" Gatrabali disini.
            </p>
        </header>
        <form @submit.prevent="form.patch(route('profile.update'))" class="mt-6 space-y-6">
            <div>
                <InputLabel for="title" value="Title" />
                <TextInput id="title" type="text" class="mt-1 block w-full" v-model="form.title" required />
                <InputError class="mt-2" :message="form.errors.title" />
            </div>
            <div>
                <InputLabel for="subtitle" value="Subtitle" />
                <TextInput id="subtitle" type="text" class="mt-1 block w-full" v-model="form.subtitle" required />
                <InputError class="mt-2" :message="form.errors.subtitle" />
            </div>
            <div>
                <InputLabel for="description" value="description" />
                <TextareaInput id="description" class="mt-1 block w-full" v-model="form.description" required />
                <InputError class="mt-2" :message="form.errors.description" />
            </div>
            <div class="flex items-center gap-4">
                <PrimaryButton :disabled="form.processing">Save</PrimaryButton>
            </div>
        </form>
    </section>
</template>