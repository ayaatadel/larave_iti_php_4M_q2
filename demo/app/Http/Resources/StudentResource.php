<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return[
          'id'=>$this->id,
          'studentName'=>$this->name,
          'studentEmail'=>$this->email,
          'studentImage'=>$this->image,
          'studentGender'=>$this->gender,
        //   'trakName'=>$this->track_id ?$this->track->name:null,
          'trakName'=>$this->track_id ?new TrackResource($this->track):null,
        ];
    }
}
