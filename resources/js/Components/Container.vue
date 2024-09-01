<script setup>

defineProps({
    title: {
        type: String,
    },
})
</script>

<template>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <header>
                    <h2 class="text-lg font-medium text-gray-900">{{ title }}</h2>

                    <p class="mt-1 text-sm text-gray-600">
                        Tambah, edit dah hapus disini.
                    </p>
                </header>
                <div class="my-6 pt-6 border-t border-slate-300">
                    <slot />
                </div>
            </div>
        </div>
    </div>
</template>