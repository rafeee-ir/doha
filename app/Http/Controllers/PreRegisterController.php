<?php

namespace App\Http\Controllers;

use App\Models\PreRegister;
use App\Http\Requests\StorePreRegisterRequest;
use App\Http\Requests\UpdatePreRegisterRequest;

class PreRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePreRegisterRequest $request)
    {
        //        try {
        $request->validate([
            'email' => 'email',
        ]);




        $item = PreRegister::create($request->all());

        activity('Pre Register form added')
            ->performedOn($item)
            ->log($item->company . ' added a new contact request by ' . $item->email);
        return redirect(url()->previous() . '#pre-register-form')->with('success', 'پیش ثبت نام انجام شد. همکاران ما بزودی با شما تماس خواهند گرفت.');
//        }catch(\Exception $e){
//            return redirect(url()->previous() . '#contact')->with('error','Something goes wrong!');
//        }
    }

    /**
     * Display the specified resource.
     */
    public function show(PreRegister $preRegister)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PreRegister $preRegister)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePreRegisterRequest $request, PreRegister $preRegister)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PreRegister $preRegister)
    {
        //
    }
}
