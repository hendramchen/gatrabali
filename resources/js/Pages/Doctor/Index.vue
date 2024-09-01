<script setup>
import Container from '@/Components/Container.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    doctors: Array
})
</script>

<template>

    <Head title="Blogs" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Pengusada</h2>
        </template>

        <Container title="Daftar Konsultasi">
            <div v-for="item in doctors" :key="item.id">{{ item.description }}</div>
        </Container>
    </AuthenticatedLayout>
</template>