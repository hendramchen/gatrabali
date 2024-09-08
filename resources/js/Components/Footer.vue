<script setup>
import { Link } from '@inertiajs/vue3';
import Logo from './Logo.vue';

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
    <footer class="p-6 bg-gradient-to-r from-cyan-500 to-green-700 md:p-8 lg:p-10 dark:bg-gray-800">
        <div class="mx-auto max-w-screen-xl text-center">
            <div class="flex justify-center">
                <Logo class="w-12 h-12" />
            </div>
            <a href="/" class="flex justify-center items-center text-3xl font-semibold text-lime-200">
                Gatrabali
            </a>
            <p class="text-yellow-300 font-semibold">Pengobatan Tradisional Bali</p>
            <p class="my-6 text-green-200">Solusi pengobatan tradisional Bali</p>
            <ul class="flex flex-wrap justify-center items-center mb-6 text-gray-100">
                <li :key="item.title" v-for="item in navigations">
                    <Link :href="route(item.url)" class="mr-4 hover:underline md:mr-6">{{ item.title }}</Link>
                </li>
            </ul>
            <span class="text-sm text-green-200 sm:text-center">&copy; 2024
                <a href="#" class="hover:underline">Gatrabali</a>. All Rights Reserved.</span>
        </div>
    </footer>
</template>