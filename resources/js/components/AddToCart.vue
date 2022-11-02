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
    const productId = defineProps(['productId'])

    const addToCart = async() => {
        await axios.get('/sanctum/csrf-cookie')
        await axios.get('/api/user')
            .then(async(res) => {
                let response = await axios.post('/api/products', {
                    productId: productId
                })
                console.log(response)
            })
            .catch(err => console.log(err));
    }
</script>

<style scoped>

</style>
