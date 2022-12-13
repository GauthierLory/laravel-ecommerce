import {ref} from "vue";

export default function useStripe () {
    const elements = ref(null);
    const stripe = ref(null);

    const initialize = async () => {
        stripe.value = Stripe(process.env.MIX_STRIPE_TEST_PUBLIC_KEY, {
            locale: 'fr'
        });

        const clientSecret = await axios.post('/paymentIntent')
            .then(response => response.data.clientSecret)
            .catch(err => console.log(err))


        const appearance = {
            theme: 'minimal'
        };

        elements.value = stripe.value.elements({ clientSecret, appearance })

        const paymentElementOptions = {
            layout: "tabs",
            defaultChecked: 'card'
        };
        
        const paymentElement = elements.value.create('payment', paymentElementOptions)
        paymentElement.mount("#payment-element")
    }

    const handleSubmit = async() => {
        setLoading(true);

        const BASE_URL = "http://localhost:8000";
        const REDIRECT_URL = BASE_URL.concat("/dashboard");

        const { error } = await stripe.value.confirmPayment({
            elements: elements.value,
            confirmParams: {
                // Make sure to change this to your payment completion page
                return_url: REDIRECT_URL,
            },
        });

        // This point will only be reached if there is an immediate error when
        // confirming the payment. Otherwise, your customer will be redirected to
        // your `return_url`. For some payment methods like iDEAL, your customer will
        // be redirected to an intermediate site first to authorize the payment, then
        // redirected to the `return_url`.
        if (error.type === "card_error" || error.type === "validation_error") {
            showMessage(error.message);
        } else {
            showMessage("An unexpected error occurred.");
        }

        setLoading(false);
    }

    const checkStatus = async () => {
        const clientSecret = new URLSearchParams(window.location.search).get(
            "payment_intent_client_secret"
        );

        if (!clientSecret) {
            return;
        }

        const { paymentIntent } = await stripe.value.retrievePaymentIntent(clientSecret);

        switch (paymentIntent.status) {
            case "succeeded":
                showMessage("Payment succeeded!");
                break;
            case "processing":
                showMessage("Your payment is processing.");
                break;
            case "requires_payment_method":
                showMessage("Your payment was not successful, please try again.");
                break;
            default:
                showMessage("Something went wrong.");
                break;
        }
    }


// ------- UI helpers -------

    const showMessage = (messageText) => {
        const messageContainer = document.querySelector("#payment-message");

        messageContainer.classList.remove("hidden");
        messageContainer.textContent = messageText;

        setTimeout(function () {
            messageContainer.classList.add("hidden");
            messageText.textContent = "";
        }, 4000);
    }

// Show a spinner on payment submission
    const setLoading = (isLoading) => {
        if (isLoading) {
            // Disable the button and show a spinner
            document.querySelector("#submit").disabled = true;
            document.querySelector("#spinner").classList.remove("hidden");
            document.querySelector("#button-text").classList.add("hidden");
        } else {
            document.querySelector("#submit").disabled = false;
            document.querySelector("#spinner").classList.add("hidden");
            document.querySelector("#button-text").classList.remove("hidden");
        }
    }

    return {
        initialize,
        checkStatus,
        showMessage,
        setLoading,
        handleSubmit
    }
}
