<?php

namespace App\Http\Resources;

use App\User;
use Illuminate\Http\Resources\Json\JsonResource;

class VideoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $user = User::select('id', 'username')->where('id', $this->user_id)->first();
        return [
            'video_id' => $this->id,
            'video_title' => $this->name,
            'video_url' => asset("storage/videos/$this->file_name"),
            'video_item_route' => route('file', ['id' => $this->id]),
            'video_filename' => $this->file_name,
            'video_uploader' => $user,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
