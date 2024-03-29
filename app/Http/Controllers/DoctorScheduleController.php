<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\DoctorSchedule;
use Database\Factories\DoctorFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorScheduleController extends Controller
{
    //index
    public function index(Request $request)
    {
        $doctorSchedules = DoctorSchedule::with('doctor')
            ->when($request->input('doctor_id'), function ($query, $doctor_id) {
                return $query->where('doctor_id', $doctor_id);
            })
            //order by id
            ->orderBy('doctor_id', 'asc')
            // ->load('doctor')
            ->paginate(10);

        return view('pages.doctor_schedules.index', compact('doctorSchedules'));
    }

    //create
    public function create()
    {
        $doctorSchedules = Doctor::all();
        return view('pages.doctor_schedules.create', compact('doctors'));
    }

    //store
    public function store(Request $request)
    {
        $request->validate([
            'doctor_id' => 'required',
            'day' => 'required',
            'time' => 'required',
        ]);

        $doctorSchedules = new DoctorSchedule();
        $doctorSchedules->doctor_id = $request->doctor_id;
        $doctorSchedules->day = $request->day;
        $doctorSchedules->time = $request->time;
        $doctorSchedules->status = $request->status;
        $doctorSchedules->note = $request->note;
        $doctorSchedules->save();

        return redirect()->route('doctor_schedules.index');
    }

    //edit
    public function edit($id)
    {
        $doctorSchedules = DoctorSchedule::find($id);
        $doctor = Doctor::all();
        return view('pages.doctor_schedules.edit', compact('doctors'));
    }

    //update
    public function update(Request $request, $id)
    {
        $request->validate([
            'doctor_id' => 'required',
            'day' => 'required',
            'time' => 'required',
        ]);

        $doctorSchedules = DoctorSchedule::find($id);
        $doctorSchedules->doctor_id = $request->doctor_id;
        $doctorSchedules->day = $request->day;
        $doctorSchedules->time = $request->time;
        $doctorSchedules->status = $request->status;
        $doctorSchedules->note = $request->note;
        $doctorSchedules->save();

        return redirect()->route('doctor_schedule.index');

    }

    //destroy
    public function destroy($id)
    {
        DoctorSchedule::find($id)->delete();
        return redirect()->route('doctor_schedule.index');
    }

}
