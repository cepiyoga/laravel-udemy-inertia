<template>
    <div>

     <span class="font-bold"> {{ls.beds}} bds </span>  |  <span class="font-bold"> {{ls.baths}} ba </span> | <span class="font-bold"> {{ls.area}} M2 </span>

    </div>

</template>
<script setup>

defineProps({
    ls:Object,
})

</script>
