<script setup>
import {onMounted, ref} from 'vue';
const count = ref(0)

onMounted(() => {
    console.log('Counter component is mounted');
});
</script>

<template>
    {{ count }}

    <button @click="count++">
        Add 3214124
    </button>
    <router-link to="/login">تسجيل الدخول</router-link>

</template>
