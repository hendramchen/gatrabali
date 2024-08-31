<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    users: Array
})
</script>

<template>

    <Head title="Blogs" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">User Management</h2>
        </template>

        <div class="py-12">
            User Detail
            <div v-for="item in users" :key="item.id">{{ item.name }}</div>
        </div>
    </AuthenticatedLayout>
</template>