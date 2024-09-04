<script setup>
import VisitorLayout from '@/Layouts/VisitorLayout.vue';
import { Head } from '@inertiajs/vue3';
import CardItemBlog from '@/Components/CardItemBlog.vue';

const props = defineProps({
    blogs: Array,
});

</script>

<template>

    <Head title="Info" />

    <VisitorLayout>
        <div class="py-12">
            <CardItemBlog v-for="item in blogs" :key="item.id" :blog="item" />
        </div>
    </VisitorLayout>

</template>
