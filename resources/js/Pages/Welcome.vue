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
      <section class="max-w-7xl mx-auto text-center md:flex md:text-left md:items-center">
        <div>
          <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl">
            Solusi pengobatan tradisional Bali
          </h1>
          <p class="mb-6 text-gray-200 lg:mb-8 md:text-lg lg:text-xl">
            Melayani pengobatan tradisional, obat herbal, konsultasi online.
          </p>
        </div>

        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
          <img src="/images/jahe-herbal.png" alt="mockup" />
        </div>
      </section>
    </header>
    <main class="flex-1 flex flex-col">
      <div class="bg-slate-100 pt-8 pb-14">
        <h1 class="text-4xl font-semibold my-6 text-green-700 text-center max-w-lg mx-auto tracking-wide">Berikut
          Layanan Kesehatan
          Tradisional Kami
        </h1>
        <div
          class="flex flex-col px-4 md:px-0 md:flex-row md:justify-between max-w-7xl mx-auto gap-8 text-slate-700 text-lg">
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-16">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
            </svg>

            <h2 class="text-2xl font-semibold my-4 text-yellow-600">Informasi Kesehatan</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt laboriosam exercitationem, nulla
              incidunt
              totam enim! Saepe, fugiat ullam? Consequatur ipsum saepe repellat aliquam? Suscipit debitis rem esse neque
              blanditiis enim.</p>
          </div>

          <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-16">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
            </svg>

            <h2 class="text-2xl font-semibold my-4 text-yellow-600">Bertanya Tentang Kesehatan</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt laboriosam exercitationem, nulla
              incidunt
              totam enim! Saepe, fugiat ullam? Consequatur ipsum saepe repellat aliquam? Suscipit debitis rem esse neque
              blanditiis enim.</p>
          </div>

          <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-16">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
            </svg>

            <h2 class="text-2xl font-semibold my-4 text-yellow-600">Konsultasi Online</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt laboriosam exercitationem, nulla
              incidunt
              totam enim! Saepe, fugiat ullam? Consequatur ipsum saepe repellat aliquam? Suscipit debitis rem esse neque
              blanditiis enim.</p>
          </div>

        </div>
      </div>
      <div class="flex-1 max-w-7xl mx-auto flex md:flex-row flex-col">

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
            <li class="py-3 flex-1" :key="item.id" v-for="item in categories">
              <a href="#" class="font-semibold uppercase"># {{ item.name }}</a>
            </li>
          </ul>
        </aside>
      </div>
    </main>
    <!-- component -->
    <Footer />
  </div>
</template>
