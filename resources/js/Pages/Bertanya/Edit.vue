<script setup>
import VisitorLayout from '@/Layouts/VisitorLayout.vue';
import { Head } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import TextareaInput from '@/Components/TextareaInput.vue';
import { useForm } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import VerifiedEmail from '@/Components/VerifiedEmail.vue';

const props = defineProps({
    question: Object,
    user: Object,
    status: String,
});

const form = useForm({
    description: ''
});


</script>

<template>

    <Head title="Balas Pertanyaan" />

    <VisitorLayout>
        <div class="py-12 flex-1">
            <h1 class="text-4xl mb-8 text-slate-700 font-semibold">
                Balas Pertanyaan
            </h1>

            <div class="text-lg text-slate-700 font-semibold my-3">Pertanyaan dari: <span>{{ question.user.name
                    }}</span></div>

            <div class="text-2xl text-slate-700 font-semibold my-3">{{ question.title }}</div>

            <div class="text-lg text-slate-700">{{ question.description }}</div>

            <div v-if="user.email_verified_at === null">
                <VerifiedEmail :status="status" />
            </div>

            <form @submit.prevent="form.patch(route('bertanya.update', question.id))" v-else>
                <!-- Modal body -->
                <div class="">
                    <div class="my-6">
                        <label for="description" class="text-slate-700 font-semibold">Penjelasan</label>
                        <TextareaInput v-model="form.description" class="mt-1 block w-full" />
                        <InputError class="mt-2" :message="form.errors.description" />
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex justify-end gap-3 items-center my-6">
                    <button type="submit"
                        class="border border-green-500 bg-green-500 py-3 px-5 font-semibold text-white rounded">
                        Kirim</button>
                    <Link :href="route('bertanya.index')"
                        class="border border-green-500 py-3 px-5 font-semibold text-green-600 rounded">Batal</Link>
                </div>
            </form>
        </div>
    </VisitorLayout>
</template>
