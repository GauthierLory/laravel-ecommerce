<x-app-layout>
    <x-slot name="header">
        Recapitulatif de votre panier
    </x-slot>
    <shopping-cart></shopping-cart>
</x-app-layout>
<script>
    import ShoppingCart from "../../js/components/ShoppingCart";
    export default {
        components: {ShoppingCart}
    }
</script>
