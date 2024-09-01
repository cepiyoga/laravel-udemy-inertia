<template>
    <div class="container m-2">
    <header class="bg-white border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 w-full">
        <div class="container mx-auto"></div>
        <nav class="p-4 flex items-center justify-start gap-4">
            <div class="text-lg text-indigo-600"><Link href="/">Main Page</Link></div>
            <div class="text-lg text-indigo-600"><Link href="/hello">Show</Link></div>
            <div class="text-lg text-indigo-600">
                <Link href="/listing">Listing</Link>
            </div>
            <div class="text-lg text-indigo-600">
                <Link href="/items">Items</Link>
            </div>
        </nav>

    </header>



    <div v-if="flashSuccess" class="bg-green-500 p-2 mb-2 rounded md:w-1/3">
        {{ flashSuccess }}
    </div>
    <slot></slot>

    </div>

</template>

<script setup>
import {computed} from "vue";
import {Link, usePage} from "@inertiajs/vue3";
const page = usePage()
const flashSuccess = computed(
    () => page.props.flash.message
)

</script>




