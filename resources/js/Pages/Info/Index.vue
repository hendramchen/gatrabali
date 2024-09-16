<script setup>
import VisitorLayout from '@/Layouts/VisitorLayout.vue';
import { Head } from '@inertiajs/vue3';
import CardItemBlog from '@/Components/CardItemBlog.vue';
import Pagination from '@/Components/Pagination.vue';

const props = defineProps({
    info: Object,
});

</script>

<template>

    <Head title="Info" />

    <VisitorLayout>
        <div class="py-12">
            <CardItemBlog v-for="item in info.data" :key="item.id" :blog="item" />

            <Pagination :links="info.links" />
        </div>
    </VisitorLayout>

</template>
