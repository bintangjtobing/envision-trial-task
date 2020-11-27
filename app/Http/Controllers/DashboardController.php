<?php

namespace App\Http\Controllers;

use App\chemicaldata;
use App\chemicallist;
use App\filename;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
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
    public function addChemical()
    {
        $chemical = chemicallist::create([
            'chemical_name' => request()->name,
            'formula' => request()->formula,
            'oralS' => request()->oralS,
            'oralR' => request()->oralR,
        ]);
        return response()->json($chemical);
    }
    public function getChemicals()
    {
        $chemicals = chemicallist::all();
        return response()->json($chemicals);
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
