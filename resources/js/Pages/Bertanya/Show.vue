<script setup>
import VisitorLayout from '@/Layouts/VisitorLayout.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps({
    question: Object,
    answers: Array,
});

</script>

<template>

    <Head title="Jawaban dari Pertanyaan" />

    <VisitorLayout>
        <div class="py-12 flex-1">
            <h1 class="text-4xl mb-8 text-slate-700 font-semibold">
                {{ question.title }}
            </h1>
            <p class="text-lg text-slate-700 my-4">{{ question.description }}</p>
            <div v-if="answers.length > 0" class="text-lg text-slate-700 my-4">
                <div class="flex items-center space-x-5 my-6">
                    <img v-if="answers[0].user.photo" :src="'/storage/' + answers[0].user.photo" alt="avatar 1"
                        class="rounded-lg w-16" />
                    <img v-else src="/images/avatar-default.png" alt="avatar 1" class="rounded-lg w-16" />
                    <div class="text-lg">
                        <h2 class="text-2xl font-semibold">{{ answers[0].user.name }}</h2>
                    </div>
                </div>
                <p>{{ answers[0].description }}</p>
            </div>
            <p v-else class="text-lg text-slate-700 my-4">Belum ditanggapi</p>
            <!-- <p>Oleh: {{ question.answers[0]. }}</p> -->
        </div>
    </VisitorLayout>
</template>
