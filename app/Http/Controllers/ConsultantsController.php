<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConsultantRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ConsultantResource;

class ConsultantsController extends Controller
{
    public function index() {
        $consultants = User::all();
        return view('admin.consultants')->with('consultants', ConsultantResource::collection($consultants));
    }

    public function store(StoreConsultantRequest $request) {
        $imageName = time().'.'.$request->avatar->extension();

        $request->avatar->move(public_path('consultantAvatars'), $imageName);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'avatar' => $imageName,
        ]);
        return redirect()->route('admin.consultants');
    }

    public function destroy($id) {
        $consultant = User::findOrFail($id);
        $consultant->delete();
        return redirect()->route('admin.consultants');
    }
}
