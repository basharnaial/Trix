<script setup>
import { ref } from 'vue'

const count = ref(0)
</script>

<template>
    {{ count }}

    <button @click="count++">
        Add 3214124
    </button>
</template>
