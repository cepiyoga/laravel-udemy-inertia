<template>
    <form @submit.prevent="update">
        <div>
            <div>
                <label>Beds</label>
                <input type="text" v-model.number="form.beds" />
            </div>
            <div style="color: red" v-if="form.errors.beds">{{form.errors.beds}}</div>

            <div>
                <label>Baths</label>
                <input type="text" v-model.number="form.baths" />

            </div>
            <div style="color: red" v-if="form.errors.baths">{{form.errors.baths}}</div>

            <div>
                <label>Area</label>
                <input type="text" v-model.number="form.area" />
            </div>
            <div style="color: red" v-if="form.errors.area">{{form.errors.area}}</div>

            <div>
                <label>City</label>
                <input type="text" v-model="form.city" />
            </div>

            <div style="color: red" v-if="form.errors.city">{{form.errors.city}}</div>

            <div>
                <label>Post Code</label>
                <input type="text" v-model="form.code" />
            </div>
            <div style="color: red" v-if="form.errors.code">{{form.errors.code}}</div>

            <div>
                <label>Street</label>
                <input type="text" v-model="form.street" />
            </div>

            <div style="color: red" v-if="form.errors.street">{{form.errors.street}}</div>

            <div>
                <label>Street Nr</label>
                <input type="text" v-model.number="form.street_nr"/>
            </div>
            <div style="color: red" v-if="form.errors.street_nr">{{form.errors.street_nr}}</div>

            <div>
                <label>Price</label>
                <input type="text" v-model.number="form.price" />
            </div>

            <div style="color: red" v-if="form.errors.price">{{form.errors.price}}</div>

            <div>
<!--                <button type="submit">Edit</button>-->
                <ButtonGreen :type="'submit'" >Edit</ButtonGreen>
            </div>
        </div>
    </form>
</template>

<script setup>
import ButtonGreen from "../../Components/UI/ButtonGreen.vue";
import {reactive} from "vue";
import {useForm} from '@inertiajs/vue3'

const props =  defineProps({
    listing: Object
})



const form = useForm({
    beds:props.listing.beds,
    baths:props.listing.baths,
    area:props.listing.area,
    city:props.listing.city,
    street:props.listing.street,
    code:props.listing.code,
    street_nr:props.listing.street_nr,
    price:props.listing.price,
})

const update = () => form.put(`/listing/${props.listing.id}`)

</script>

<style scoped>
label {
    margin-right: 2em;
}

div {
    padding: 2px
}
</style>
