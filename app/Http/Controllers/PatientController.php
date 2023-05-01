<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;

class PatientController extends Controller
{
    public function create(Request $request)
    {
        $data = new patient();
        $data->name = $request->name;
        $data->lastname = $request->lastname;
        $data->citizen_id = $request->citizen_id;
        $data->address = $request->address;
        $data->gender = $request->gender;
        $data->age=$request->age;
        $data->save();

        return redirect()->route('main')->with('success', 'บันทึกข้อมูลเรียบร้อย');
    }

    public function edit($id)
    {
        $data = patient::find($id);

        return view('edit', ['data' => $data]);
    }

    public function update(Request $request)
    {
        // dd($request);
        $data = patient::find($request->id);
        $data->name = $request->name;
        $data->lastname = $request->lastname;
        $data->citizen_id = $request->citizen_id;
        $data->address = $request->address;
        $data->gender = $request->gender;
        $data->age=$request->age;
        $data->save();

        return redirect()->route('main')->with('success', 'อัพเดตข้อมูลเรียบร้อย');
    }

    public function destroy($id)
    {
        patient::destroy($id);

        return redirect()->route('main')->with('success', 'ลบข้อมูลเรียบร้อย');
    }
}
