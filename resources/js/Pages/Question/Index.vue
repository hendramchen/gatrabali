<script setup>
import Container from '@/Components/Container.vue';
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
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Bertanya</h2>
        </template>

        <Container title="Daftar Pertanyaan">
            <div v-for="item in questions" :key="item.id">
                <p>{{ item.title }}</p>
            </div>
        </Container>
    </AuthenticatedLayout>
</template>