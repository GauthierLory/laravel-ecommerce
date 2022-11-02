<template>
    <div class="flex items-center justify-between py-4">
        <button
            class="bg-indigo-500 text-white p-2"
            v-on:click.prevent="addToCart"
            >Ajouter au
        </button>
    </div>
</template>

<script setup>
    import useProduct from "../composables/products";

    const {add} = useProduct()
    const productId = defineProps(['productId'])

    const emitter = require('tiny-emitter/instance')

    const addToCart = async() => {
        await axios.get('/sanctum/csrf-cookie')
        await axios.get('/api/user')
            .then(async(res) => {
                let cartCount = await add(productId)
                emitter.emit('cartCountUpdated', cartCount)
            })
            .catch(err => console.log(err));
    }
</script>

<style scoped>

</style>
