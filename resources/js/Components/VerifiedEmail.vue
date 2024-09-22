<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    status: String,
});

</script>
<template>
    <div>
        <p class="text-lg mt-2 text-slate-700">
            Email Anda belum terverifikasi.
            <Link :href="route('verification.send')" method="post" as="button"
                class="underline text-lg text-gray-600 hover:text-green-600 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Klik disini untuk mengirimkan verifikasi email.
            </Link>
        </p>

        <div v-show="status === 'verification-link-sent'" class="mt-2 font-medium text-lg text-green-600">
            Verifikasi link baru telah dikirimkan ke alamat email Anda. Silahkan buka email Anda, buka pesan dari
            Gatrabali, kemudian klik link Verify Email Address.
        </div>
    </div>
</template>