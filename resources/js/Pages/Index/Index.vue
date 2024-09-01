<template>
        <div>
            <h1 class="text-2xl text-red-500">Halaman Index</h1>
        </div>
        <div>
            this message is : {{message}}
        </div>
</template>

<script setup>
defineProps({
    message: String,
})
</script>




