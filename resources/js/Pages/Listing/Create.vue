<template>
    <form @submit.prevent="create">
        <div>
            <div>
                <label>Beds</label>
                <input type="text" v-model.number="form.beds" />
            </div>
            <div class="text-red-500" v-if="form.errors.beds">{{form.errors.beds}}</div>

            <div>
                <label>Baths</label>
                <input type="text" v-model.number="form.baths" />

            </div>
            <div class="text-red-500" v-if="form.errors.baths">{{form.errors.baths}}</div>

            <div>
                <label>Area</label>
                <input type="text" v-model.number="form.area" />
            </div>
            <div class="text-red-500" v-if="form.errors.area">{{form.errors.area}}</div>

            <div>
                <label>City</label>
                <input type="text" v-model="form.city" />
            </div>

            <div class="text-red-500" v-if="form.errors.city">{{form.errors.city}}</div>

            <div>
                <label>Post Code</label>
                <input type="text" v-model="form.code" />
            </div>
            <div class="text-red-500" v-if="form.errors.code">{{form.errors.code}}</div>

            <div>
                <label>Street</label>
                <input type="text" v-model="form.street" />
            </div>

            <div class="text-red-500" v-if="form.errors.street">{{form.errors.street}}</div>

            <div>
                <label>Street Nr</label>
                <input type="text" v-model.number="form.street_nr"/>
            </div>
            <div class="text-red-500" v-if="form.errors.street_nr">{{form.errors.street_nr}}</div>

            <div>
                <label>Price</label>
                <input type="text" v-model.number="form.price" />
            </div>

            <div class="text-red-500" v-if="form.errors.price">{{form.errors.price}}</div>

            <div>
                <button type="submit" class="bg-blue-500 rounded px-2 text-white">Create</button>
            </div>
        </div>
    </form>
</template>

<script setup>
import {reactive} from "vue";
import {useForm} from '@inertiajs/vue3'


const form = useForm({
    beds:0,
    baths:0,
    area:0,
    city:null,
    street:null,
    code:null,
    street_nr:null,
    price:0,
})

const create = () => form.post('/listing')
// function create(){
//     router.post('/listing',form)
// }

</script>

<style scoped>
label {
    margin-right: 2em;
}

div {
    padding: 2px
}
</style>
