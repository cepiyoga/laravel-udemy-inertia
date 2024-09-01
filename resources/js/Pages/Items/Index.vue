<template>
<h1>Halaman Items</h1>

    <ul>
        <li v-for=" it in items" :key="it.id">
            {{it.id}}. {{it.group}}, {{it.color}}, {{it.prodName}}
            <Link class="rounded bg-green-500 text-white px-2">Edit</Link>|
            <Link class="rounded bg-red-500 text-white px-2">Delete</Link>|
            <LinkGreen :href="'/listing'">OK</LinkGreen>
        </li>
    </ul>
</template>

<script setup>
import {Link} from "@inertiajs/vue3";
import LinkGreen from "../../Components/UI/LinkGreen.vue";

defineProps({
    items:Array
})

</script>


