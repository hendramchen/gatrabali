<script setup>
import VisitorLayout from '@/Layouts/VisitorLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';

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
            <div class="flex flex-col md:flex-row md:flex-wrap text-slate-700 w-full">

                <div class="flex items-center space-x-5 my-6 w-96" v-for="item in doctors" :key="item.id">
                    <img v-if="item.user.photo" :src="'storage/' + item.user.photo" alt="avatar 1"
                        class="rounded-lg w-24" />
                    <img v-else src="images/avatar-default.png" alt="avatar 1" class="rounded-lg w-24" />
                    <div class="text-lg">
                        <Link :href="route('pengusada.show', item.id)" class="text-2xl font-semibold">
                        {{ item.user.name }}
                        </Link>
                        <div>{{ item.category.name }}</div>
                    </div>
                </div>
            </div>
        </div>
    </VisitorLayout>
</template>
