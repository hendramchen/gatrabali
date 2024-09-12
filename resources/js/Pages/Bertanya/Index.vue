<script setup>
import VisitorLayout from '@/Layouts/VisitorLayout.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import Modal from '@/Components/Modal.vue';
import { useForm } from '@inertiajs/vue3';
import Pagination from '@/Components/Pagination.vue';

defineProps({
    questions: Object
});

const isShowFormModal = ref(false);
const isShowSearchModal = ref(false);

const form = useForm({
    title: '',
    description: ''
});


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
                    <Link :href="route('login')" v-if="$page.props.auth.user === null"
                        class="border border-green-500 py-3 px-5 font-semibold text-green-600 rounded">Buat Pertanyaan
                    </Link>
                    <Link v-else :href="route('bertanya.create')"
                        class="border border-green-500 py-3 px-5 font-semibold text-green-600 rounded">
                    Buat Pertanyaan
                    </Link>
                    <button @click="isShowSearchModal = true"
                        class="bg-green-500 py-3 px-5 font-semibold text-white rounded">
                        Cari Pertanyaan Berdasarkan Topik
                    </button>
                </div>

                <h1 class="text-4xl my-5 text-slate-700 font-semibold">
                    Diskusi Kesehatan Terbaru
                </h1>
                <div class="border-b border-slate-300 py-5" :key="item.id" v-for="item in questions.data">
                    <div class="flex flex-col md:flex-row text-lg text-slate-700">
                        <div class="rounded-lg w-12 h-12 bg-gray-300 flex items-center justify-center">
                            {{ item.user.name.charAt(0) }}
                        </div>
                        <div class="my-4 md:my-0 md:ml-4">
                            <p class="font-semibold">
                                {{ item.title }}
                            </p>
                            <p>Oleh: {{ item.user.name }}</p>
                            <Link :href="route('bertanya.show', item.id)">Detail</Link>
                        </div>
                    </div>
                    <div class="pt-5 text-lg text-slate-700">
                        {{ item.description }}
                    </div>
                </div>
            </div>

            <Pagination :links="questions.links" />

            <Modal :show="isShowSearchModal">
                <div class="relative rounded-lg shadow bg-white">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="text-xl font-semibold text-gray-900">
                            Cari Pertanyaan
                        </h3>
                        <button type="button" @click="isShowSearchModal = false"
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
                        <input type="text" name="question" id="question" placeholder="Pertanyaan..."
                            class="w-full border border-slate-300 rounded">
                    </div>
                </div>
            </Modal>
        </div>
    </VisitorLayout>
</template>
