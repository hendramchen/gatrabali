<script setup>
import VisitorLayout from '@/Layouts/VisitorLayout.vue';
import { Head } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import TextareaInput from '@/Components/TextareaInput.vue';
import { useForm } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    question: Object
});

const form = useForm({
    title: props.question.title ?? '',
    description: props.question.description ?? ''
});


</script>

<template>

    <Head title="Buat Pertanyaan" />

    <VisitorLayout>
        <div class="py-12 flex-1">
            <h1 class="text-4xl mb-8 text-slate-700 font-semibold">
                Buat Pertanyaan
            </h1>
            <form @submit.prevent="form.post(route('bertanya.store'))">
                <!-- Modal body -->
                <div class="">
                    <div class="my-6">
                        <label for="title" class="text-slate-700 font-semibold">Judul Pertanyaan</label>
                        <input type="text" name="title" v-model="form.title" placeholder="Pertanyaan..."
                            class="w-full border border-slate-300 rounded">
                        <InputError class="mt-2" :message="form.errors.title" />
                    </div>

                    <div class="my-6">
                        <label for="description" class="text-slate-700 font-semibold">Penjelasan /
                            Keterangan</label>
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
