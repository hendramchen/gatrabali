<script setup>
import Navigation from '@/Components/Navigation.vue';
import Footer from '@/Components/Footer.vue';


</script>

<template>
    <div class="flex flex-col min-h-screen">
        <header class="bg-gradient-to-r from-cyan-500 to-green-700 text-gray-100 pt-5">
            <Navigation />
        </header>
        <main class="flex-1 flex px-4">
            <div class="flex-1 max-w-3xl mx-auto flex md:flex-row flex-col">
                <slot />
            </div>
        </main>
        <!-- component -->
        <Footer />
    </div>
</template>