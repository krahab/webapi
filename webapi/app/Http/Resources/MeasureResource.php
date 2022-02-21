<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema(schema="Measure")
 * {
    * @OA\Property(
        * property="id",
        * type="number",
        * description="The measure unique id"
    * ),
    * @OA\Property(
        * property="type",
        * type="string",
        * description="The measure type"
    * ),
    * @OA\Property(
        * property="value",
        * type="number",
        * format="float",
        * description="The measure value"
    * )
 * }
 */
class MeasureResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'type' => $this->type,
            'value' => $this->value,
            'created_at' => $this->created_at
        ];
    }
}
