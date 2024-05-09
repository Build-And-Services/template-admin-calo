<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $paymentMethods = PaymentMethod::all();
            return view('admin.pages.payments.index', [
                'getPaymentMethods' => $paymentMethods
            ]);
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('admin.pages.payments.create');
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'img' => 'required|mimes:png,jpg,jpeg,webp'
        ],
        [
            'required' => ':attribute wajib diisi'
        ]
        );
        try {
            $file = $request->file('img');
            $fileName = $file->getClientOriginalName();
            $filePath = 'paymentmethod-img/' . $fileName;
            $file->move('paymentmethod-img', $fileName);

            PaymentMethod::create([
                'platform' => $request->platform,
                'img' => $filePath,
                'type' => $request->type
            ]);

            return redirect('admin/payment-method')->with('success', 'payment methods successfull created');
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $paymentMethod = PaymentMethod::findOrFail($id);
            return view('admin.pages.payments.edit', [
                'getPaymentMethod' => $paymentMethod
            ]);
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'img' => 'required|mimes:png,jpg,jpeg,webp'
        ],
        [
            'required' => ':attribute wajib diisi'
        ]
        );
        try {
            $paymentMethod = PaymentMethod::findOrFail($id);

            if ($request->hasFile('img')) {
                if (file_exists(( $paymentMethod->img))) {
                    unlink(( $paymentMethod->img));
                }
                $file = $request->file('img');
                $fileName = $file->getClientOriginalName();
                $filePath = 'paymentmethod-img/' . $fileName;
                $file->move('paymentmethod-img', $fileName);
            }else {
                $filePath = $paymentMethod->img;
            }

            $paymentMethod->update([
                'platform' => $request->platform,
                'img' => $filePath,
                'type' => $request->type
            ]);

            return redirect('admin/payment-method')->with('success', 'payment method successfull updated');
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $paymentMethod = PaymentMethod::findOrFail($id);
            if (file_exists(( $paymentMethod->img))) {
                unlink(( $paymentMethod->img));
            }
            $paymentMethod->delete();
            return redirect()->back()->with('success', 'payment method successfull delete');
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }
}
