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
            <h1 class="text-4xl font-semibold mb-1 w-2/3 leading-10">{{ about.title }}</h1>
            <h2 class="text-lg font-semibold w-2/3 my-4">{{ about.subtitle }}</h2>
            <div class="flex flex-col md:flex-row space-y-8 md:space-y-0 md:space-x-10 my-6">
                <div class="flex flex-col items-center">
                    <img src="images/avatar-2.jpg" alt="avatar 1" class="rounded-lg w-32" />
                    <h3 class="font-semibold text-lg mt-3">Karlina Sumiari</h3>
                    <div>Dosen Fakultas A</div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="images/avatar-4.jpg" alt="avatar 4" class="rounded-lg w-32" />
                    <h3 class="font-semibold text-lg mt-3">Sukma Megaputri</h3>
                    <div>Dosen Fakultas B</div>
                </div>
            </div>
            <p class="mt-4 text-lg leading-9">{{ about.description }}</p>
        </div>
    </VisitorLayout>
</template>
