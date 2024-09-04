<script setup>
import { Head } from '@inertiajs/vue3';
import CardItemBlog from '@/Components/CardItemBlog.vue';
import Navigation from '@/Components/Navigation.vue';
import Footer from '@/Components/Footer.vue';

defineProps({
  blogs: Array,
  categories: Array,
});

// const categories = ['Usada Rare', 'Usada Dalem', 'Usada Paneseh'];
</script>

<template>

  <Head title="Welcome" />
  <div class="flex flex-col min-h-screen">
    <header class="bg-gradient-to-r from-cyan-500 to-green-700 text-gray-100 pt-5">
      <Navigation />
      <section class="max-w-6xl mx-auto">
        <div class="grid max-w-screen-xl py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 px-4">
          <div class="mr-auto place-self-center lg:col-span-7">
            <h1
              class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
              Solusi pengobatan tradisional Bali
            </h1>
            <p class="max-w-2xl mb-6 font-light text-gray-200 lg:mb-8 md:text-lg lg:text-xl">
              Melayani pengobatan tradisional, obat herbal, Konsultasi via
              online.
            </p>
          </div>
          <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="/images/jahe-herbal.png" alt="mockup" />
          </div>
        </div>
      </section>
    </header>
    <main class="flex-1 flex px-4">
      <div class="flex-1 max-w-6xl mx-auto flex md:flex-row flex-col">
        <div class="md:w-3/4 flex flex-col justify-stretch py-8 px-4 md:px-0">
          <h1 class="text-4xl mb-8 font-semibold text-slate-700">
            Informasi Kesehatan
          </h1>

          <CardItemBlog v-for="item in blogs" :key="item.id" :blog="item" />

        </div>
        <aside
          class="md:w-1/4 flex flex-col justify-stretch md:border-l-[1px] md:border-slate-200 md:p-8 px-4 mt-8 md:mt-0">
          <h1 class="text-4xl mb-8 text-slate-700 font-semibold">Kategori</h1>
          <ul class="text-slate-700 flex flex-col">
            <li class="py-3 border-b border-slate-200 flex-1" :key="item.id" v-for="item in categories">
              <a href="#">{{ item.name }}</a>
            </li>
          </ul>
        </aside>
      </div>
    </main>
    <!-- component -->
    <Footer />
  </div>
</template>
