<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Measure;
use App\Http\Resources\MeasureResource;

class MeasureController extends Controller
{
    /**
    * Affiche Hello World
    *
    * @return \Illuminate\Http\Response
    *
    * @OA\Get(
        * path="/api/hello",
        * @OA\Response(response="200", description="Returns     Hello World")
    * )
    */
    public function getHelloWorld() {
        return ['hello'=>'world'];
    }
    /**
     * Returns all the measures
     *
     * @return \Illuminate\Http\Response
     *
     * @OA\Get(
        * path="/api/measures",
        * @OA\Response(
            * response="200",
            * description="Returns all the measures",
            * @OA\JsonContent(
                * type="array",
                * @OA\Items(ref="#/components/schemas/Measure")
            * )
        * )
     * )
     */
    public function measures()
    {
        $m = Measure::All();
        //dd($m);
        return MeasureResource::collection($m);
    }
}
