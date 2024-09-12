<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    links: Array
});

</script>

<template>
    <nav aria-label="Page navigation">
        <ul class="inline-flex -space-x-px text-base h-10">
            <li v-for="(item, index) in links" :key="index">

                <Link :href="item.url ?? '#'" v-if="!item.active"
                    class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                <span v-html="item.label"></span></Link>

                <Link :href="item.url" aria-current="page" v-if="item.active"
                    class="flex items-center justify-center px-4 h-10 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">
                <span v-html="item.label"></span></Link>
            </li>

        </ul>
    </nav>
</template>