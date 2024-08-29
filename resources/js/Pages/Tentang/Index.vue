<script setup>
import VisitorLayout from '@/Layouts/VisitorLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    about: Object
});
</script>

<template>

    <Head title="Tentang" />

    <VisitorLayout>
        <div class="py-12 text-slate-700 text-center flex flex-col items-center">
            <h1 class="text-4xl font-semibold mb-1 w-2/3">{{ about.title }}</h1>
            <h2 class="text-lg font-semibold w-2/3">{{ about.subtitle }}</h2>
            <div class="flex space-x-5 mt-6">
                <div class="flex flex-col items-center">
                    <img src="images/avatar-2.jpg" alt="avatar 1" class="rounded-lg w-32" />
                    <h3 class="font-semibold">Karlina Sumiari</h3>
                    <p>Dosen Fakultas A</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="images/avatar-4.jpg" alt="avatar 4" class="rounded-lg w-32" />
                    <h3 class="font-semibold">Sukma Megaputri</h3>
                    <p>Dosen Fakultas B</p>
                </div>
            </div>
            <p class="mt-4 text-lg">{{ about.description }}</p>
        </div>
    </VisitorLayout>
</template>
