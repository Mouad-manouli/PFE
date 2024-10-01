<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Machine;
use App\Models\Contrat;
use Srmklive\PayPal\Services\ExpressCheckout;

class PaypalController extends Controller
{
    

    public function payment(){
        $entreprise = session('info_entr');

        $Machines = Machine::where('entreprise_id', $entreprise->id)->count();
        
        $data = [];
        $data['items'] = [
            [
                'name'  => 'Machine',
                'price' => 5,
                'qty'   => $Machines,
            ]
        ];

        $data['invoice_id'] = 1;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');
        
        $total = 0;
        foreach ($data['items'] as $item) {
            $total += $item['price'] * $item['qty'];  
        }
        $data['total'] = $total;

        $provider = new ExpressCheckout();
        $response = $provider->setExpressCheckout($data);

        return redirect($response['paypal_link']);
    }

    public function cancel(){
        return response()->json('Payment Cancelled', 402);
    }

    public function success(Request $request){
        $provider = new ExpressCheckout;
        $response = $provider->getExpressCheckoutDetails($request->token);

        if(in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])){
            $contractData = session('valide_contrat');
            $contractData['entreprise_id'] = session('info_entr')->id;
            Contrat::create($contractData);
            session()->forget('valide_contrat');
            return redirect('/profile/company')->with('success','Well-created contract');
        }
        return response()->json('Failed payment', 402);
    }
}
