<script setup>
import { ref } from 'vue';

const model = defineModel({
    required: true,
});

const input = ref(null);

// onMounted(() => {
//     if (input.value.hasAttribute('autofocus')) {
//         input.value.focus();
//     }
// });

// defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <textarea class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
        v-model="model" ref="input" />
</template>
