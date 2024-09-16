<script setup>
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';

const props = defineProps({
    blog: Object
});

function getImageCover(item) {
    if (item) {
        return 'storage/' + item;
    }
    return null;
}

const getWidth = computed(() => {
    return props.blog.image_path ? 'lg:w-3/4' : '';
})

</script>

<template>
    <div class="flex w-full flex-col lg:flex-row mb-8 border-b border-slate-200 pb-6">
        <div :class="getWidth + ' order-2 lg:order-1 flex flex-col justify-between mt-4 md:mt-0'">
            <div class="pr-4 text-slate-700">
                <h2 class="text-2xl font-semibold">
                    {{ blog.title }}
                </h2>
                <p class="mt-4 text-lg">
                    {{ blog.highlight }}
                </p>
            </div>
            <Link :href="route('info.show', blog)" class="text-green-700 font-semibold mt-4">
            Baca Selengkapnya
            </Link>
        </div>
        <div class="lg:w-1/4 order-1 lg:order-2" v-if="getImageCover(blog.image_path)">
            <img :src="getImageCover(blog.image_path)" class="rounded-md w-full lg:w-[200px]" alt="kesehatan" />
        </div>
    </div>
</template>