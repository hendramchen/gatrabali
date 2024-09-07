<script setup>
import VisitorLayout from '@/Layouts/VisitorLayout.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';

defineProps({
    questions: Array
});

const isShowModal = ref(false);

function handleModal() {
    isShowModal.value = true;
}

function handleClose() {
    isShowModal.value = false;
}
// const questions = [
//     {
//         id: 1,
//         profile: 'H',
//         question: 'Bagaimana menyembuhkan flu dengan obat herbal?',
//         from: 'He**a',
//         description: 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto aliquam in possimus optio reprehenderit iure ipsa unde omnis adipisci'
//     },
//     {
//         id: 2,
//         profile: 'M',
//         question: 'Bagaimana menyembuhkan flu dengan obat herbal?',
//         from: 'Man**a',
//         description: 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto aliquam in possimus optio reprehenderit iure ipsa unde omnis adipisci'
//     },
//     {
//         id: 3,
//         profile: 'N',
//         question: 'Bagaimana menyembuhkan flu dengan obat herbal?',
//         from: 'N***i',
//         description: 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto aliquam in possimus optio reprehenderit iure ipsa unde omnis adipisci'
//     },
// ];
</script>

<template>

    <Head title="Bertanya" />

    <VisitorLayout>
        <div class="py-12">
            <div class="flex flex-col justify-stretch p-8 pl-0">
                <h1 class="text-4xl mb-8 text-slate-700 font-semibold">
                    Tanya Pengusada
                </h1>
                <div class="flex space-x-3">
                    <button @click="handleModal" class="border border-green-500 py-3 px-5 font-semibold text-green-600">
                        Buat Pertanyaan
                    </button>
                    <button class="bg-green-500 py-3 px-5 font-semibold text-white">
                        Cari Pertanyaan Berdasarkan Topik
                    </button>
                </div>


                <!-- Modal toggle -->
                <!-- <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                    Toggle modal
                </button> -->

                <!-- Main modal -->
                <div id="default-modal" tabindex="-1" aria-hidden="true"
                    class="overflow-y-auto overflow-x-hidden bg-slate-700 fixed top-0 right-0 left-0 z-30 opacity-85 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
                    :style="{ display: isShowModal ? 'block' : 'none' }">
                </div>
                <div class="relative mx-auto p-4 w-full max-w-2xl max-h-full z-40"
                    :style="{ display: isShowModal ? 'block' : 'none' }">
                    <!-- Modal content -->
                    <div class="relative rounded-lg shadow bg-white">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                            <h3 class="text-xl font-semibold text-gray-900">
                                Terms of Service
                            </h3>
                            <button type="button" @click="handleClose"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                data-modal-hide="default-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4">
                            <p class="text-base leading-relaxed text-gray-500">
                                With less than a month to go before the European Union enacts new consumer privacy
                                laws for its citizens, companies around the world are updating their terms of
                                service agreements to comply.
                            </p>
                            <p class="text-base leading-relaxed text-gray-500">
                                The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect
                                on May 25 and is meant to ensure a common set of data rights in the European Union.
                                It requires organizations to notify users as soon as possible of high-risk data
                                breaches that could personally affect them.
                            </p>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                            <button data-modal-hide="default-modal" type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">I
                                accept</button>
                            <button data-modal-hide="default-modal" type="button"
                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Decline</button>
                        </div>
                    </div>
                </div>

                <h1 class="text-4xl my-5 text-slate-700 font-semibold">
                    Diskusi Kesehatan Terbaru
                </h1>
                <div class="border-b border-slate-300 py-5" :key="item.id" v-for="item in questions">
                    <div class="flex flex-col md:flex-row text-lg text-slate-700">
                        <div class="rounded-lg w-12 h-12 bg-gray-300 flex items-center justify-center">
                            {{ item.user.name.charAt(0) }}
                        </div>
                        <div class="my-4 md:my-0 md:ml-4">
                            <p class="font-semibold">
                                {{ item.title }}
                            </p>
                            <p>Oleh: {{ item.user.name }}</p>
                            <p>{{ item.answers ? 'Lihat jawaban' : '' }}</p>
                        </div>
                    </div>
                    <div class="pt-5 text-lg text-slate-700">
                        {{ item.description }}
                    </div>
                </div>
            </div>
        </div>
    </VisitorLayout>
</template>
