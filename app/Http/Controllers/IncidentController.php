<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incident;

class IncidentController extends Controller
{

    // GET all incidents
    public function index()
    {
        return response()->json(Incident::all());
    }

    // CREATE incident
    public function store(Request $request)
    {
        $incident = Incident::create($request->all());

        return response()->json([
            'message' => 'Incident reported successfully',
            'data' => $incident
        ]);
    }

    // GET single incident
    public function show($id)
    {
        $incident = Incident::find($id);

        if(!$incident){
            return response()->json(['message'=>'Incident not found'],404);
        }

        return response()->json($incident);
    }

    // UPDATE incident
    public function update(Request $request,$id)
    {
        $incident = Incident::find($id);

        if(!$incident){
            return response()->json(['message'=>'Incident not found'],404);
        }

        $incident->update($request->all());

        return response()->json([
            'message'=>'Incident updated',
            'data'=>$incident
        ]);
    }

    // DELETE incident
    public function destroy($id)
    {
        $incident = Incident::find($id);

        if(!$incident){
            return response()->json(['message'=>'Incident not found'],404);
        }

        $incident->delete();

        return response()->json([
            'message'=>'Incident deleted'
        ]);
    }
}
