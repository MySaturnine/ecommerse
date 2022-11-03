<?php

class Stripehelper
{


    public function __construct()
    {
        $this->client = $this->createClient();
    }

    public function createClient()
    {
        try {
            //code...
            $this->stripe = Stripeclient::getClient();
        } catch (\Throwable $th) {
            //throw $th;
            echo "Invalid api key";
            exit;
        }
    }

    public function getCheckoutOrder($session_id)
    {
        try {

            return $this->stripe->checkout->sessions->retrieve(
                $session_id,
                ['expand' => ['total_details.breakdown']]
            );
        } catch (\Throwable $th) {
            //throw $th;
            echo "Something went wrong";
        }
    }

    public function isCheckoutCompleted($checkout_session)
    {
        return $checkout_session->status == "complete" && $checkout_session->payment_status == "paid";
    }

    public function getPaymentDetails($checkout_session)
    {
        return [
            "payment" => "stripe",
            "payment_id" => $checkout_session->id,
            "subtotal" => $checkout_session->amount_subtotal / 100,
            "total" => $checkout_session->amount_total / 100,
            "total_discount_amount" => 0
        ];
    }
}
