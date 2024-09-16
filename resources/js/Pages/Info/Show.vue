<script setup>
import VisitorLayout from '@/Layouts/VisitorLayout.vue';
import { Head } from '@inertiajs/vue3';
import showdown from 'showdown';



const props = defineProps({
    blog: Object,
});

const converter = new showdown.Converter();
const text = props.blog.description;
const html = converter.makeHtml(text);

function getImageCover(item) {
    if (item) {
        return '/storage/' + item;
    }
    return null;
}
</script>

<template>

    <Head :title="blog.title" />

    <VisitorLayout>
        <div class="py-12 text-slate-700 text-lg">
            <h1 class="text-slate-700 text-4xl font-semibold mb-9">{{ blog.title }}</h1>
            <p class="font-semibold text-slate-700 my-4 leading-9">{{ blog.highlight }}</p>
            <img v-if="blog.image_path != null" :src="getImageCover(blog.image_path)" class="rounded-md w-full my-6"
                alt="kesehatan" />
            <div v-html="html" class="leading-9"></div>
        </div>
    </VisitorLayout>

</template>

<style>
p {
    margin: 1rem 0;
}
</style>
