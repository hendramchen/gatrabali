<script setup>
import VisitorLayout from '@/Layouts/VisitorLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    questions: Array
});
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
                    <button class="border border-green-500 py-3 px-5 font-semibold text-green-600">
                        Buat Pertanyaan
                    </button>
                    <button class="bg-green-500 py-3 px-5 font-semibold text-white">
                        Cari Pertanyaan Berdasarkan Topik
                    </button>
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
