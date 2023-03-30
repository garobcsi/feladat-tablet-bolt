<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostManufacturertRequest;
use App\Models\Manufacturer;
use App\Models\Tablet;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    public function index() {
        return response()->json(["data" =>Manufacturer::all()],200);
    }
    public function show($man) {
        $data = Manufacturer::findOrFail($man);
        return response()->json(["data" => $data],200);
    }
    public function create() {

    }
    public function store(PostManufacturertRequest $request) {
        $data = $request->validated();
        $this->authorize('create',Manufacturer::class );
        Manufacturer::create($data);
        return response()->json(["data" => $data],200);
    }
    public function destroy($man) {
        $data = Manufacturer::findOrFail($man );
        $this->authorize('forceDelete',Manufacturer::class );

        $data->delete($man);
        return response()->json(["message" => "Success"],200);
    }
}
