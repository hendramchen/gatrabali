<script setup>
import VisitorLayout from '@/Layouts/VisitorLayout.vue';
import { Head } from '@inertiajs/vue3';
import CardItemBlog from '@/Components/CardItemBlog.vue';

const blogs = [
    {
        id: 1,
        title: 'Menyembuhkan demam anak dengan ramuan tradisional',
        description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea aut id laboriosam quis est aut id laboriosam quis est animi Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        url: 'info.index',
        imgCover: 'images/herbal-1.png'
    },
    {
        id: 2,
        title: 'Manfaat bawang putih bagi kesehatan',
        description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea aut id laboriosam quis est aut id laboriosam quis est animi Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        url: 'info.index',
        imgCover: 'images/herbal-2.png'
    },
    {
        id: 3,
        title: 'Sedia jahe di rumah, minuman jahe hangat',
        description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea aut id laboriosam quis est aut id laboriosam quis est animi Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        url: 'info.index',
        imgCover: 'images/herbal-3.png'
    },
];
</script>

<template>

    <Head title="Info" />

    <VisitorLayout>
        <div class="py-12">
            <CardItemBlog v-for="item in blogs" :key="item.id" :title="item.title" :description="item.description"
                :url="item.url" :imgCover="item.imgCover" />
        </div>
    </VisitorLayout>

</template>
