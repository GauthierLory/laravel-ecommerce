export const formatPrice = (price) => {
    return new Intl.NumberFormat('fr-FR', { style: 'currency', currency: 'EUR'}).format(price/100)
}
export const registerOrder = async () => {
    await axios.post('/orders')
        .catch(e => console.log(e));
}
