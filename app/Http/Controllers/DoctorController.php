<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    public function index(Request $request)
    {
        // get data doctor
        $doctors =DB::table('doctors')
        ->when($request->input('name'), function ($query, $doctor_name){
            return $query->where('doctor_name','like','%'.$doctor_name. '%');
        })
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        return view('pages.doctors.index', compact('doctors'));
    }

    public function create()
    {
        return view('pages.doctors.create');
    }


    public function store(Request $request)
{
    $request->validate([
        'doctor_name' => 'required|min:3|unique:doctors',
        'description' => 'required|min:3',
        'doctor_category' => 'required|in:spesialis,umum,gigi',
        'doctor_email' => 'required|email',
        'doctor_phone' => 'required|numeric',
        'photo' => 'image|mimes:png,jpg,jpeg',
        'sip' => 'required',
    ]);

    $data = $request->all();

    // Check if photo is present in the request
    if ($request->hasFile('photo')) {
        $filename = time() . '.' . $request->photo->extension();

        // Store the new image
        $request->photo->storeAs('public/doctor', $filename);

        $data['photo'] = $filename;
    }

    $doctor = new \App\Models\Doctor;
    $doctor->fill($data);
    $doctor->doctor_phone = (int)$request->doctor_phone;
    $doctor->save();

    return redirect()->route('doctors.index')->with('success', 'Doctor Successfully Created');
}


    public function edit($id)
    {
        $doctor = \App\Models\Doctor::findOrFail($id);
        return view('pages.doctors.edit', compact('doctor'));
    }

public function update(Request $request, $id)
{
    $request->validate([
        'doctor_name' => 'required|min:3|unique:doctors,doctor_name,' . $id,
        'description' => 'required|min:3',
        'doctor_category' => 'required|in:spesialis,umum,gigi',
        'doctor_email' => 'required|email',
        'doctor_phone' => 'required|numeric',
        'photo' => 'nullable|image|mimes:png,jpg,jpeg',
        'sip' => 'required',
    ]);

    $doctor = \App\Models\Doctor::findOrFail($id);

    // Handle the new image upload or remove current image
    if ($request->hasFile('photo')) {
        // Delete the old image (if it exists)
        if ($doctor->photo) {
            Storage::delete('public/doctor/' . $doctor->photo);
        }

        // Store the new image
        $filename = time() . '.' . $request->photo->extension();
        $request->photo->storeAs('public/doctor', $filename);

        // Update the 'photo' column in the database
        $doctor->photo = $filename;
    } elseif ($request->has('remove_photo')) {
        // Remove the current image
        if ($doctor->photo) {
            Storage::delete('public/doctor/' . $doctor->photo);
            $doctor->photo = null;
        }
    }

    // Update other fields
    $doctor->doctor_name = $request->doctor_name;
    $doctor->description = $request->description;
    $doctor->doctor_phone = (int) $request->doctor_phone;
    $doctor->doctor_email = $request->doctor_email;
    $doctor->doctor_category = $request->doctor_category;
    $doctor->sip = $request->sip;

    $doctor->save();

    return redirect()->route('doctors.index')->with('success', 'Dokter Berhasil Diperbarui');
}



    // public function update(Request $request, $id)
    // {
    //     // $data = $request->all();
    //     // $product = \App\Models\Product::findOrFail($id);
    //     // $product->update($data);
    //     // return redirect()->route('product.index')->with('success','Product Successfully Update');
    // }

    public function destroy($id)
    {
        $doctor = \App\Models\Doctor::findOrFail($id);
        $doctor->delete();
        return redirect()->route('doctors.index')->with('success','Doctor Successfully Delete');
    }

}
