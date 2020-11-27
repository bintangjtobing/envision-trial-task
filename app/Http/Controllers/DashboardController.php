<?php

namespace App\Http\Controllers;

use App\chemicaldata;
use App\chemicallist;
use App\filename;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function users()
    {
        return User::all();
    }
    public function index()
    {
        return view('welcome');
    }

    public function checkFile()
    {
        request()->validate([
            'name' => 'sometimes|unique:filenames,filename',
        ]);
    }
    public function addChemical(Request $request)
    {
        // $chemical = new chemicallist;
        // $chemical->chemical_name = $request->name;
        // $chemical->formula = $request->formula;
        // $chemical->oralR = $request->oralR;
        // $chemical->oralS = $request->oralS;
        // $chemical->save();
        dd($request->all());
    }
    public function getChemicals()
    {
        $chemicals = chemicallist::all();
        return chemicallist::orderBy('chemical_name', 'ASC')->get();
        // $chemicals = chemicallist::all();
        // return response()->json($chemicals);
    }
    public function getChemicalDatas()
    {
        $chemicals = chemicaldata::get();
        return response()->json($chemicals);
    }
    public function addChemicalData()
    {
        $chemicaldata = chemicaldata::create([
            'chemicalid' => request()->chemicalid,
            'CiS' => request()->CiS,
            'CiG' => request()->CiG,
            'CiSW' => request()->CiSW,
            'userid' => Auth::id(),
        ]);
        return response()->json(chemicaldata::find($chemicaldata->id));
    }
}
