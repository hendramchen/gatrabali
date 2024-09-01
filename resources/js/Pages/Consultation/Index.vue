<script setup>
import Container from '@/Components/Container.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    consultations: Array
})
</script>

<template>

    <Head title="Konsultasi" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Konsultasi Management</h2>
        </template>

        <Container title="Daftar Konsultasi">
            <div v-for="item in consultations" :key="item.id">{{ item.problem }}</div>
        </Container>



    </AuthenticatedLayout>
</template>