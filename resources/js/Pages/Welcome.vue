<script setup>
import { Head, Link } from '@inertiajs/vue3';
import NavLinkEU from '@/Components/NavLinkEU.vue';
import CardItemBlog from '@/Components/CardItemBlog.vue';

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

const blogs = [
  {
    id: 1,
    title: 'Menyembuhkan demam anak dengan ramuan tradisional',
    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea aut id laboriosam quis est aut id laboriosam quis est animi',
    url: 'info.index',
    imgCover: 'images/herbal-1.png'
  },
  {
    id: 2,
    title: 'Manfaat bawang putih bagi kesehatan',
    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea aut id laboriosam quis est aut id laboriosam quis est animi',
    url: 'info.index',
    imgCover: 'images/herbal-2.png'
  },
  {
    id: 3,
    title: 'Sedia jahe di rumah, minuman jahe hangat',
    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea aut id laboriosam quis est aut id laboriosam quis est animi',
    url: 'info.index',
    imgCover: 'images/herbal-3.png'
  },
];

const categories = ['Usada Rare', 'Usada Dalem', 'Usada Paneseh'];
</script>

<template>

  <Head title="Welcome" />
  <div class="flex flex-col min-h-screen">
    <header class="bg-gradient-to-r from-cyan-500 to-green-700 text-gray-100 pt-5">
      <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800 max-w-6xl mx-auto">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
          <a href="https://flowbite.com" class="flex items-center">
            <span class="self-center text-xl font-semibold whitespace-nowrap text-green-600">Gatrabali</span>
          </a>
          <div class="flex items-center lg:order-2">
            <Link :href="route('login')"
              class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">
            Masuk</Link>
            <button data-collapse-toggle="mobile-menu-2" type="button"
              class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
              aria-controls="mobile-menu-2" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd"></path>
              </svg>
              <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                  clip-rule="evenodd"></path>
              </svg>
            </button>
          </div>
          <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
            <div class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
              <NavLinkEU :key="item.title" :href="route(item.url)" :active="route().current(item.url)"
                v-for="item in navigations">
                {{ item.title }}
              </NavLinkEU>
            </div>
          </div>
        </div>
      </nav>
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
        <div class="w-3/4 flex flex-col justify-stretch p-8 pl-0">
          <h1 class="text-4xl mb-8 font-semibold text-slate-700">
            Informasi Kesehatan
          </h1>

          <CardItemBlog v-for="item in blogs" :key="item.id" :title="item.title" :description="item.description"
            :url="item.url" :imgCover="item.imgCover" />

        </div>
        <aside class="w-2/4 flex flex-col justify-stretch md:border-l-[1px] md:border-slate-200 md:p-8">
          <h1 class="text-4xl mb-8 text-slate-700 font-semibold">Kategori</h1>
          <ul class="text-slate-700 flex flex-col">
            <li class="py-3 border-b border-slate-200 flex-1" :key="index" v-for="(item, index) in categories">
              <a href="#">{{ item }}</a>
            </li>
          </ul>
        </aside>
      </div>
    </main>
    <!-- component -->
    <footer class="p-4 bg-gradient-to-r from-cyan-500 to-green-700 md:p-8 lg:p-10 dark:bg-gray-800">
      <div class="mx-auto max-w-screen-xl text-center">
        <a href="#" class="flex justify-center items-center text-2xl font-semibold text-lime-200 dark:text-white">
          Gatrabali
        </a>
        <p class="my-6 text-green-200">Solusi pengobatan tradisional Bali</p>
        <ul class="flex flex-wrap justify-center items-center mb-6 text-gray-100">
          <li :key="item.title" v-for="item in navigations">
            <Link :href="route(item.url)" class="mr-4 hover:underline md:mr-6">{{ item.title }}</Link>
          </li>
        </ul>
        <span class="text-sm text-green-200 sm:text-center">&copy; 2024 <a href="#"
            class="hover:underline">Gatrabali</a>. All
          Rights Reserved.</span>
      </div>
    </footer>
  </div>
</template>
