<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import Logo from '@/Components/Logo.vue';
</script>

<template>
    <section class="bg-gradient-to-r from-cyan-500 to-green-700 text-slate-700">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <Logo class="w-16 h-16" />
            <a href="/" class="flex items-center text-3xl font-semibold text-lime-200">
                Gatrabali
            </a>
            <p class="text-yellow-300 font-semibold pb-4">Pengobatan Tradisional Bali</p>
            <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                        Sign in to your account
                    </h1>
                    <slot />
                </div>
            </div>
        </div>
    </section>
</template>
