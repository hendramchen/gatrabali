<script setup>
import VisitorLayout from '@/Layouts/VisitorLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';

defineProps({
    stats: Object
});
</script>

<template>

    <Head title="Visitor Statistik" />

    <VisitorLayout>
        <div class="py-12">
            <h1 class="text-4xl mb-8 text-slate-700 font-semibold text-center">
                Visitor Statistics
            </h1>
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 w-full">
                <div class="flex flex-col gap-2">
                    <h2 class="text-center text-4xl font-bold text-green-800">Today</h2>
                    <div class="bg-slate-400 flex flex-col items-center justify-center w-52 h-52 rounded-lg">
                        <span class="text-6xl font-bold text-white">{{ stats.daily }}</span>
                        <span class="text-lg text-white">visitors</span>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="text-center text-4xl font-bold text-green-800">This Month</h2>
                    <div class="bg-slate-400 flex flex-col items-center justify-center w-52 h-52 rounded-lg">
                        <span class="text-6xl font-bold text-white">{{ stats.monthly }}</span>
                        <span class="text-lg text-white">visitors</span>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h2 class="text-center text-4xl font-bold text-green-800">Total</h2>
                    <div class="bg-slate-400 flex flex-col items-center justify-center w-52 h-52 rounded-lg">
                        <span class="text-6xl font-bold text-white">{{ stats.total }}</span>
                        <span class="text-lg text-white">visitors</span>
                    </div>
                </div>
            </div>

        </div>
    </VisitorLayout>
</template>
