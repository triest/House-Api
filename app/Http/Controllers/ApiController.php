<?php

    namespace App\Http\Controllers;

    use App\House;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use PhpParser\Node\Expr\Array_;

    class ApiController extends Controller
    {
        //
        public function seach(Request $request)
        {
            $house = DB::table('houses');
            if (isset($request->name) && $request->name != "") {
                $house->where('name', 'like', "%" . $request->get("name") . "%");
            }


            if (isset($request->bedrooms)) {
                $house->where('bedrooms', '=', intval($request->get("bedrooms")));
            }

            if (isset($request->bathrooms)) {
                $house->where('bathrooms', '=', intval($request->get("bathrooms")));
            }


            if (isset($request->garages)) {
                $house->where('garages', '=', intval($request->get("garages")));
            }

            if (isset($request->storeys)) {
                $house->where('storeys', '=', intval($request->get("storeys")));
            }

            if (isset($request->price_from)) {
                $house->where('price', '>=', intval($request->get("price_from")));
            }

            if (isset($request->price_to)) {
                $house->where('price', '<=', intval($request->get("price_to")));
            }

            $house = $house->get();


            return response()->json($house);
        }
    }
