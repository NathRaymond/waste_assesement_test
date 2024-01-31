<?php

namespace App\Http\Controllers;

use App\Models\Assesement;
use Illuminate\Http\Request;

class AssesementController extends Controller
{
    public function assesement_page(Request $request)
    {
        if ($request->ajax()) {
            $data['assesements'] = Assesement::all();
            return $data;
        }
        return view('assesement');
    }

    public function storeassesement(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'quantity' => 'required|numeric',
        ]);

        try {
            $checkassesementName = Assesement::where('name', $request->name)->first();
            if ($checkassesementName) {
                throw new \Exception('This assesement name is existing.');
            }
            $input = $request->all();
            $input = Assesement::create($input);
            return api_request_response(
                'ok',
                'Waste category saved successfully!',
                success_status_code(),
            );
        } catch (\Exception $exception) {
            return api_request_response(
                'error',
                $exception->getMessage(),
                bad_response_status_code()
            );
        }
    }

    public function getassesementInfor(Request $request)
    {
        $id = $request->id;
        $data['assesement'] = Assesement::where('id', $id)->first();
        return response()->json($data);
    }

    // public function updateassesment(Request $request)
    // {
    //     $input = $request->all();
    //     $assesement = Assesement::find($request->id);
    //     $update = $assesement->update($input);
    //     return redirect()->back()->with('message', ' Waste category updated successfully');
    // }
    public function updateassesement(Request $request)
    {

        $input = $request->all();
        $setting = Assesement::find($request->id);
        $update = $setting->update($input);
        return redirect()->back()->with('message', 'Record updated successfully');
    }

    public function deleteassesement(Request $request)
    {
        $id = $request->id;
        $assesement = Assesement::find($id);
        $assesement->delete();
        return redirect()->back()->with('deleted', 'Waste category deleted successfully!');
    }
}