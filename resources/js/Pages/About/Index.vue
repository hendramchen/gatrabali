<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

</script>

<template>

    <Head title="Blogs" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Pengaturan Tentang</h2>
        </template>

        <div class="py-12">
            Tentang
        </div>
    </AuthenticatedLayout>
</template>