<script setup>
import VisitorLayout from '@/Layouts/VisitorLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    doctors: Array
});
</script>

<template>

    <Head title="Pengusada" />

    <VisitorLayout>
        <div class="py-12">
            <h1 class="text-4xl mb-8 text-slate-700 font-semibold">
                Pengusada
            </h1>
            <div class="flex flex-col md:flex-row md:space-x-8 md:justify-between text-slate-700 w-full">

                <div class="flex items-center space-x-5 my-6" v-for="item in doctors" :key="item.id">
                    <img :src="'http://127.0.0.1:8000/storage/' + item.user.photo" alt="avatar 1"
                        class="rounded-lg w-24" />
                    <div class="text-lg">
                        <h2 class="text-2xl font-semibold">{{ item.user.name }}</h2>
                        <p>{{ item.category.name }}</p>
                    </div>
                </div>
            </div>
        </div>
    </VisitorLayout>
</template>
