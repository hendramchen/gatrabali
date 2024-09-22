<script setup>
import VisitorLayout from '@/Layouts/VisitorLayout.vue';
import { Head } from '@inertiajs/vue3';
import DataTable from 'datatables.net-vue3';
import DataTablesCore from 'datatables.net-dt';
import { Link } from '@inertiajs/vue3';

DataTable.use(DataTablesCore);

const props = defineProps({
    consultations: Array,
    user: Object,
});

const columns = [
    { data: 'problem', title: 'Keluhan / Masalah' },
];

</script>

<template>

    <Head title="Konsultasi" />

    <VisitorLayout>

        <div class="py-12 flex-1">
            <h1 class="text-4xl mb-8 text-slate-700 font-semibold">
                Daftar Konsultasi
            </h1>

            <div v-if="user">
                <Link :href="route('konsultasi.create')"
                    class="bg-green-500 py-3 px-5 font-semibold text-white rounded">
                Buat Konsultasi
                Baru</Link>

                <div class="my-8">
                    <DataTable :columns="columns" :data="consultations" class="display" width="100%">
                    </DataTable>
                </div>
            </div>

            <div class="text-lg text-slate-700" v-else>Untuk bisa melakukan konsultasi, silahkan login atau registrasi
                akun terlebih
                dahulu.</div>
        </div>

    </VisitorLayout>
</template>

<style>
@import 'datatables.net-dt';

select.dt-input {
    width: 5rem;
    margin-right: 0.5rem;
}
</style>
