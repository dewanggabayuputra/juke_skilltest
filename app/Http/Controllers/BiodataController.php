<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Models\Biodata;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;




class BiodataController extends Controller
{
    protected function edit($id = null)
    {
        return view('biodata.edit'); 
    }

    protected function update(Request $request)
    {
        $isBiodataFound = '';
        $isBiodataFound = Biodata::where('user_id', Auth::user()->id);
        if($isBiodataFound == ''){
            dd($isBiodataFound);
            Biodata::where('user_id', Auth::user()->id)
            ->update([
                'applied_position' => $request->applied_position,
                'name' => $request->name,
                'ktp' => $request->ktp,
                'birth_place' => $request->birth_place,
                'birth_date' => $request->birth_date,
                'gender' => $request->gender,
                'religion' => $request->religion,
                'blood_type' => $request->blood_type,
                'marital_status' => $request->marital_status,
                'ktp_address' => $request->ktp_address,
                'address' => $request->address,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'nearest_people' => $request->nearest_people,
                'skills' => $request->skills,
                'is_willing_travel' => $request->is_willing_travel,
                'expected_salary' => $request->expected_salary
            ]);
        }else{
            Biodata::create([
                'user_id' => Auth::user()->id,
                'applied_position' => $request->applied_position,
                'name' => $request->name,
                'ktp' => $request->ktp,
                'birth_place' => $request->birth_place,
                'birth_date' => '2022-08-29 19:13:24',
                'gender' => $request->gender,
                'religion' => $request->religion,
                'blood_type' => $request->blood_type,
                'marital_status' => $request->marital_status,
                'ktp_address' => $request->ktp_address,
                'address' => $request->address,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'nearest_people' => $request->nearest_people,
                'skills' => $request->skills,
                'is_willing_travel' => $request->is_willing_travel,
                'expected_salary' => $request->expected_salary
            ]);
        }

        return view('home'); 
    }
}
