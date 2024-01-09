<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Auth;

use App\Models\Payment;
class PaymentController extends Controller
{
    function show_payment()  {
        return view('payments.payment_prove');
    }
    public function store(Request $request) {
        $allowedDomain = 'exploremonero.com';
        $request->validate([
            'link' => [
                'required',
                'url',
                'regex:/^https:\/\/' . $allowedDomain . '/',
                Rule::unique('payments', 'link')->where(function ($query) {
                    return $query->where('user_id', Auth::id());
                }),
            ],
        ]);
        $user = Auth::user();

        // Check if the user's payment status is already 1
        if ($user->status == 1) {
            return redirect()->route('prove.payment')->with('success', 'Link already saved, payment proved');
        }
        $payment = Auth::user()->payments()->create([
            'link' => $request->input('link'),
        ]);
                
        if ($payment) {
            // Update the user's payment status to 1
            $user->update(['status' => 1]);
    
            return redirect()->route('prove.payment')->with('success', 'Link saved successfully, payment proved');
        }
    
        return redirect()->back()->with('error', 'Failed to save link');
    }
    

}
