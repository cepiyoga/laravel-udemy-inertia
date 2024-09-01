<template>
    <div class="bg-green-500 rounded px-2 font-bold text-lg">Show detail listing</div>
    <span>
<!--        <ListingAddress :ls="listings"/>-->


        <Price :price="listings.price" class="text-lg font-bold"/>
        <ListingSpace :ls="listings" class="text-lg" />
        <ListingAddress :ls="listings" class="text-gray-500"/>


    </span>
    <div><Link href="/listing" class="bg-green-500 rounded px-2"> < Back</Link></div>
</template>

<script setup>
import {Link} from "@inertiajs/vue3";
import ListingAddress from "../../Components/ListingAddress.vue";
import Price from "../../Components/Price.vue";
import ListingSpace from "../../Components/ListingSpace.vue";

defineProps({
    listings:Object,
})
</script>
