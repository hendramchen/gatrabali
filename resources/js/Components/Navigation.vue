<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import NavLinkEU from '@/Components/NavLinkEU.vue';

const showingNavigation = ref(false);

const navigations = [
    {
        title: 'Info',
        url: 'info.index'
    },
    {
        title: 'Pengusada',
        url: 'pengusada.index'
    },
    {
        title: 'Bertanya',
        url: 'bertanya.index'
    },
    {
        title: 'Konsultasi',
        url: 'konsultasi.index'
    },
    {
        title: 'Tentang',
        url: 'tentang.index'
    },
];


</script>

<template>
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800 max-w-6xl mx-auto mb-4">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="/" class="flex items-center">
                <span class="self-center text-xl font-semibold whitespace-nowrap text-green-600">Gatrabali</span>
            </a>
            <div class="flex items-center md:order-2 lg:order-2">
                <Link :href="route('login')"
                    class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">
                Masuk</Link>
                <!-- Hamburger -->
                <div class="-me-2 flex items-center sm:hidden">
                    <button @click="showingNavigation = !showingNavigation"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{
                                hidden: showingNavigation,
                                'inline-flex': !showingNavigation,
                            }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{
                                hidden: !showingNavigation,
                                'inline-flex': showingNavigation,
                            }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1 lg:flex lg:w-auto lg:order-1"
                id="mobile-menu-2">
                <div
                    class="flex flex-col mt-4 font-medium md:flex-row md:space-x-4 md:mt-0 lg:flex-row lg:space-x-8 lg:mt-0">
                    <NavLinkEU :key="item.title" :href="route(item.url)" :active="route().current(item.url)"
                        v-for="item in navigations">
                        {{ item.title }}
                    </NavLinkEU>
                </div>
            </div>
        </div>
        <!-- Responsive Navigation Menu -->
        <div :class="{ block: showingNavigation, hidden: !showingNavigation }" class="md:hidden lg:hidden">
            <div class="pt-2 pb-3 space-y-1 flex flex-col">
                <NavLinkEU :key="item.title" :href="route(item.url)" :active="route().current(item.url)"
                    v-for="item in navigations">
                    {{ item.title }}
                </NavLinkEU>
            </div>
        </div>
    </nav>
</template>