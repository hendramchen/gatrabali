<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    questions: Array,
});


</script>

<template>

    <Head title="Blogs" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Daftar Pertanyaan</h2>
        </template>

        <div class="py-12">
            <div v-for="item in questions" :key="item.id">
                <p>{{ item.title }}</p>
            </div>
        </div>
    </AuthenticatedLayout>
</template>