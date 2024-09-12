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
    { data: 'consult_status', title: 'Status' },
    {
        data: null,
        render: '#action',
        title: 'Action'
    },
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
                        <template #action="props">
                            <!-- <button class="bg-slate-500 text-white">Edit {{ props.rowData.id }}</button> -->
                            <button>Action is inprogress</button>
                        </template>
                    </DataTable>
                </div>
            </div>

            <div v-else>Silahkan login atau registrasi akun</div>


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
