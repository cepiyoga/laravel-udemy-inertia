<template>
    <Link href="/listing/create" class="bg-blue-500 text-white border px-2 py-0.5 rounded">Create</Link>
    <div><h1 class="text-red-500 text-2xl">Halaman listing Index</h1></div>
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3  gap-4">
    <Box v-for="ls in listings" :key="ls.id">
        <div>
        <Link :href="`/listing/${ls.id}`">
            <Price :price="ls.price" class="text-lg font-bold"/>
            <ListingSpace :ls="ls" class="text-lg" />
            <ListingAddress :ls="ls" class="text-gray-500"/>
        </Link>
        </div>

        <div class="flex gap-2">
        <div class="text-white rounded bg-green-500 px-2">
            <Link :href="`/listing/${ls.id}/edit`">Edit</Link>
        </div>
        <div class="text-white rounded bg-red-500 px-2">
            <Link :href="`/listing/${ls.id}`" method="DELETE" as="button">Delete</Link>
        </div>
        </div>

    </Box>
    </div>
</template>

<script setup>
import {Link} from "@inertiajs/vue3";
import ListingAddress from "../../Components/ListingAddress.vue";
import Box from "../../Components/UI/Box.vue";
import ListingSpace from "../../Components/ListingSpace.vue";
import Price from "../../Components/Price.vue";

defineProps({
    listings:Array,
})

</script>
