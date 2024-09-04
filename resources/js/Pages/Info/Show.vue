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
        return 'http://127.0.0.1:8000/storage/' + item;
    }
    return null;
}
</script>

<template>

    <Head :title="blog.title" />

    <VisitorLayout>
        <div class="py-12">
            <h1 class="text-slate-700 text-4xl font-semibold">{{ blog.title }}</h1>
            <p class="font-semibold text-slate-700 my-4">{{ blog.highlight }}</p>
            <img :src="getImageCover(blog.image_path)" class="rounded-md w-full" alt="kesehatan" />
            <p v-html="html"></p>
        </div>
    </VisitorLayout>

</template>
