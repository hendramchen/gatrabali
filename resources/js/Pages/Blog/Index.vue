<script setup>
import EditorJS from '@editorjs/editorjs';
import Header from '@editorjs/header';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';

const editor = new EditorJS({ 
  /** 
   * Id of Element that should contain the Editor 
   */ 
  holder: 'editorjs', 
  
  /** 
   * Available Tools list. 
   * Pass Tool's class or Settings object for each Tool you want to use 
   */ 
  tools: { 
    header: {
      class: Header,
      config: {
        placeholder: 'Enter a header',
        levels: [2, 3, 4],
        defaultLevel: 3
      }
    }
  }, 
});

const output = ref('');

function saveEditor() {
    editor.save().then( savedData => {
        output.value = JSON.stringify(savedData, null, 4);
      });
}
</script>

<template>
    <Head title="Blogs" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Blog CMS</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">Content!</div>
                    <h2>THis is Heading 2</h2>
                    <div class="bg-slate-300" id="editorjs"></div>
                </div>
            </div>
            <button @click="saveEditor">Save</button>
        </div>
        <pre id="output">{{ output }}</pre>
    </AuthenticatedLayout>
</template>

<style scoped>
h2 {
    font-size: 1.5rem;
    font-weight: bold;
}
</style>