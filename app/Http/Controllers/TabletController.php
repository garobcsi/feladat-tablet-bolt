<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostTabletRequest;
use App\Http\Resources\ShowTabletResource;
use App\Models\Tablet;
use Illuminate\Http\Request;
use Symfony\Component\Console\Helper\Table;

class TabletController extends Controller
{
    public function index() {
        return response()->json(["data" =>Tablet::all()],200);
    }
    public function show($tablet) {
        $data = Tablet::findOrFail($tablet);
        return response()->json(new ShowTabletResource($data),200);
    }
    public function create() {

    }
    public function store(PostTabletRequest $request) {
        $data = $request->validated();
        $this->authorize('create',Tablet::class );
        Tablet::create($data);
        return response()->json(["data" => $data],200);
    }
    public function destroy($tablet) {
        $data = Tablet::findOrFail($tablet);
        $this->authorize('forceDelete',Tablet::class );
        $data->delete($tablet);
        return response()->json(["message" => "Success"],200);

    }
}
