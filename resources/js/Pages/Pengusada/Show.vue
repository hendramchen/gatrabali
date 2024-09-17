<script setup>
import VisitorLayout from '@/Layouts/VisitorLayout.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps({
    doctor: Object,
});

</script>

<template>

    <Head title="Detail Pengusada" />

    <VisitorLayout>
        <div class="py-12 flex-1">
            <img v-if="doctor.user.photo" :src="'/storage/' + doctor.user.photo" alt="avatar 1"
                class="rounded-lg w-32" />
            <img v-else src="/images/avatar-default.png" alt="avatar 1" class="rounded-lg w-32" />

            <h1 class="text-3xl text-slate-700 my-3">{{ doctor.user.name }}</h1>
            <h2 class="text-2xl text-slate-700 my-3">{{ doctor.category.name }}</h2>
            <div class="text-lg text-slate-700 my-3">{{ doctor.user.email }}</div>
            <div class="text-lg text-slate-700 my-3">{{ doctor.description }}</div>

        </div>
    </VisitorLayout>
</template>
