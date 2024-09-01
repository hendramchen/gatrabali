<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Container from '@/Components/Container.vue';
import DataTable from 'datatables.net-vue3';
import DataTablesCore from 'datatables.net-dt';

DataTable.use(DataTablesCore);


defineProps({
    categories: Array
});

const columns = [
    { data: 'id', title: '#' },
    { data: 'name', title: 'Name' },
    {
        data: null,
        render: '#action',
        title: 'Action'
    },
];

</script>

<template>

    <Head title="Category" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Categories</h2>
        </template>

        <Container title="Daftar Kategori">
            <DataTable :columns="columns" :data="categories" class="display" width="100%">
                <template #action="props">
                    <button class="bg-slate-500 text-white">Edit {{ props.rowData.id }}</button>
                </template>
            </DataTable>
        </Container>


    </AuthenticatedLayout>
</template>

<style>
@import 'datatables.net-dt';

select.dt-input {
    width: 5rem;
    margin-right: 0.5rem;
}
</style>