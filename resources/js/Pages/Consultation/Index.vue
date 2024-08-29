<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

</script>

<template>

    <Head title="Konsultasi" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Konsultasi Management</h2>
        </template>

        <div class="py-12">
            Konsultasi
        </div>
    </AuthenticatedLayout>
</template>