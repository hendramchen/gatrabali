<script setup>
import VisitorLayout from '@/Layouts/VisitorLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>

    <Head title="Pengusada" />

    <VisitorLayout>
        <div class="py-12">
            <div class="flex flex-col justify-stretch p-8 pl-0">
                <h1 class="text-4xl mb-8 text-slate-700 font-semibold">
                    Pengusada
                </h1>
                <div class="flex items-center space-x-5 my-6">
                    <img src="images/avatar-1.jpg" alt="avatar 1" class="rounded-lg w-16" />
                    <div>
                        <h2 class="text-2xl font-semibold">Nyoman Glebeg</h2>
                        <p>Konsultasi | Hubungi</p>
                    </div>
                </div>

                <div class="flex items-center space-x-5 my-6">
                    <img src="images/avatar-2.jpg" alt="avatar 1" class="rounded-lg w-16" />
                    <div>
                        <h2 class="text-2xl font-semibold">Luh Sari Sakti</h2>
                        <p>Konsultasi | Hubungi</p>
                    </div>
                </div>

                <div class="flex items-center space-x-5 my-6">
                    <img src="images/avatar-3.jpg" alt="avatar 1" class="rounded-lg w-16" />
                    <div>
                        <h2 class="text-2xl font-semibold">Wayan Dogenan</h2>
                        <p>Konsultasi | Hubungi</p>
                    </div>
                </div>

                <div class="flex items-center space-x-5 my-6">
                    <img src="images/avatar-4.jpg" alt="avatar 1" class="rounded-lg w-16" />
                    <div>
                        <h2 class="text-2xl font-semibold">Nengah Ayu</h2>
                        <p>Konsultasi | Hubungi</p>
                    </div>
                </div>
            </div>
        </div>
    </VisitorLayout>
</template>
