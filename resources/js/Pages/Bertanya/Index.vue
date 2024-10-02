<script setup>
import VisitorLayout from '@/Layouts/VisitorLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import Pagination from '@/Components/Pagination.vue';
import { parseISO, formatDistanceToNow } from 'date-fns';

defineProps({
    questions: Object,
    title: String,
    user: Object,
});

function convertDateToReadable(dateString = '') {
    const date = parseISO(dateString);

    return formatDistanceToNow(date, { addSuffix: true });
}

</script>

<template>

    <Head title="Bertanya" />

    <VisitorLayout>
        <div class="py-12 flex-1">
            <div class="flex flex-col justify-stretch p-8 pl-0">
                <h1 class="text-4xl mb-8 text-slate-700 font-semibold">
                    Tanya Pengusada
                </h1>
                <form method="GET" :action="route('bertanya.index')" class="mb-4 flex items-center space-x-2">
                    <input type="text" name="title" placeholder="Cari berdasarkan judul pertanyaan..." :value="title"
                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full py-3" />
                    <button type="submit" class="bg-green-500 py-3 px-5 font-semibold text-white rounded">Cari</button>
                </form>
                <h1 class="text-4xl my-5 text-slate-700 font-semibold">
                    Diskusi Kesehatan Terbaru
                </h1>
                <div class="my-3">
                    <Link :href="route('login')" v-if="$page.props.auth.user === null"
                        class="border border-green-500 py-3 px-5 font-semibold text-green-600 rounded">Buat Pertanyaan
                    </Link>
                    <Link v-else :href="route('bertanya.create')"
                        class="border border-green-500 py-3 px-5 font-semibold text-green-600 rounded">
                    Buat Pertanyaan
                    </Link>
                </div>
                <div class="border-b border-slate-300 py-5" :key="item.id" v-for="item in questions.data">
                    <div class="flex flex-col md:flex-row text-lg text-slate-700">
                        <div class="rounded-lg w-12 h-12 bg-gray-300 flex items-center justify-center">
                            {{ item.user.name.charAt(0) }}
                        </div>
                        <div class="my-4 md:my-0 md:ml-4">
                            <div class="font-semibold">
                                {{ item.title }}
                            </div>
                            <div><span class="font-semibold">Oleh:</span> {{ item.user.name }} | <span
                                    class="text-slate-400 font-semibold">{{ convertDateToReadable(item.created_at)
                                    }}</span>
                            </div>
                            <Link v-if="item.question_status === 'done'" :href="route('bertanya.show', item.id)"
                                class="text-green-700 font-semibold">Lihat Balasan
                            </Link>
                            <Link v-if="item.question_status === 'pending' && user && user.role !== 'visitor'"
                                :href="route('bertanya.edit', item.id)" class="text-orange-700 font-semibold">
                            Balas Pertanyaan
                            </Link>
                        </div>
                    </div>
                    <div class="pt-5 text-lg text-slate-700">
                        {{ item.description }}
                    </div>
                </div>
            </div>

            <Pagination :links="questions.links" />
        </div>
    </VisitorLayout>
</template>
