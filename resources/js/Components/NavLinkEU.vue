<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
    },
});

const classes = computed(() =>
    props.active
        ? 'block py-2 pr-4 pl-3 text-green-500 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0'
        : 'block py-2 pr-4 pl-3 text-gray-500 border-b border-gray-100 hover:text-gray-900 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0'
);
</script>

<template>
    <Link :href="href" :class="classes">
    <slot />
    </Link>
</template>
