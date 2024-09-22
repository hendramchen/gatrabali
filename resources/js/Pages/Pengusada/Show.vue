<script setup>
import VisitorLayout from '@/Layouts/VisitorLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

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

            <div class="my-2 text-lg text-slate-700">
                <div class="font-semibold">Nama</div>
                <div>{{ doctor.user.name }}</div>
            </div>

            <div class="my-2 text-lg text-slate-700">
                <div class="font-semibold">Kategori</div>
                <div>{{ doctor.category.name }}</div>
            </div>

            <div class="my-2 text-lg text-slate-700">
                <div class="font-semibold">Email</div>
                <div>{{ doctor.user.email }}</div>
            </div>

            <div class="my-2 text-lg text-slate-700">
                <div class="font-semibold">Phone</div>
                <div>{{ doctor.user.phone ?? '-' }}</div>
            </div>

            <div class="my-2 text-lg text-slate-700">
                <div class="font-semibold">Alamat</div>
                <div>{{ doctor.user.address ?? '-' }}</div>
            </div>

            <div class="my-2 text-lg text-slate-700">
                <div class="font-semibold">Deskripsi</div>
                <div>{{ doctor.description ?? '-' }}</div>
            </div>

            <div class="my-6" v-if="doctor.user.map_address">
                <a class="bg-green-500 hover:bg-green-700 text-white font-semibold py-3 px-4 rounded"
                    :href="doctor.user.map_address" target="_blank" rel="noopener noreferrer">
                    Open on Google Map
                </a>
            </div>
        </div>
    </VisitorLayout>
</template>
