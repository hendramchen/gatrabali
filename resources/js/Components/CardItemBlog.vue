<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    title: {
        type: String,
    },
    description: {
        type: String,
    },
    url: {
        type: String,
    },
    imgCover: {
        type: String,
    }
})
</script>

<template>
    <div class="flex w-full flex-col lg:flex-row mb-8">
        <div class="lg:w-3/4 order-2 lg:order-1 flex flex-col justify-between">
            <div class="pr-4 text-slate-700">
                <h2 class="text-2xl font-semibold">
                    {{ title }}
                </h2>
                <p class="mt-4">
                    {{ description }}
                </p>
            </div>
            <Link :href="route(url)" class="text-green-700 font-semibold mt-4">
            Baca Selengkapnya
            </Link>
        </div>
        <div class="lg:w-1/4 order-1 lg:order-2">
            <img :src="imgCover" class="rounded-md w-full lg:w-[200px]" alt="kesehatan" />
        </div>
    </div>
</template>