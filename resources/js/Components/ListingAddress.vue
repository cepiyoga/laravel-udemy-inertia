<template>
    <span>
        {{ls.street}} {{ls.street_nr}}, {{ls.city}}
    </span>
</template>

<script setup>
defineProps({
    ls: Object,
})

</script>
