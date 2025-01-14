<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'social_id' => $this->social_id,
            'username' => $this->username,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'name' => $this->name,
            'age' => $this->age,
            'social_photo' => $this->social_photo,
            'child_number' => $this->child_number,
            'login_type' => $this->login_type,
            'user_type' => $this->user_type,
            'edd_date' => $this->edd_date,
            'edd_calculation_type' => $this->edd_calculation_type,
            'email' => $this->email,
            'language' => $this->language,
            'pregnancy_loss' => $this->pregnancy_loss,
            'pregnancy_loss_date' => $this->pregnancy_loss_date,
            'baby_already_born' => $this->baby_already_born,
            'bio_data' => $this->bio_data,
            'subscription' => $this->subscription,
            'lmp_date' => $this->lmp_date,
            'deleted' => $this->deleted,
            'deleted_date' => $this->deleted_date,
            'password' => $this->password,
            'status' => $this->status,
        ];
    }
}
