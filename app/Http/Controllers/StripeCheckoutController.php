<?php

namespace App\Http\Controllers;

use App\Repositories\CartRepository;

class StripeCheckoutController extends Controller
{
    public function create()
    {
        return view('checkout.create');
    }

    public function paymentIntent()
    {
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey(config('stripe.test_secret_key'));

        $cartTotal = (new CartRepository())->total();

        header('Content-Type: application/json');

        try {
            // Create a PaymentIntent with amount and currency
            $paymentIntent = \Stripe\PaymentIntent::create([
                'amount' => $cartTotal,
                'currency' => 'eur',
                'payment_method_types' => [
                    'card'
                ],
                'metadata' => [
                    'order_items' => (new CartRepository())->jsonOrderItems()
                ]
            ]);

            $output = [
                'clientSecret' => $paymentIntent->client_secret,
            ];

            echo json_encode($output);

        } catch (Error $e) {
            http_response_code(500);
            echo json_encode(['error' => $e->getMessage()]);
        }
    }
}