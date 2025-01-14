<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return $this->collection->map(function ($item) {
            return [

                        'social_id' => $item->social_id,
                        'username' => $item->username,
                        'first_name' => $item->first_name,
                        'last_name' => $item->last_name,
                        'name' => $item->name,
                        'age' => $item->age,
                        'social_photo' => $item->social_photo,
                        'child_number' => $item->child_number,
                        'login_type' => $item->login_type,
                        'user_type' => $item->user_type,
                        'edd_date' => $item->edd_date,
                        'edd_calculation_type' => $item->edd_calculation_type,
                        'email' => $item->email,
                        'language' => $item->language,
                        'pregnancy_loss' => $item->pregnancy_loss,
                        'pregnancy_loss_date' => $item->pregnancy_loss_date,
                        'baby_already_born' => $item->baby_already_born,
                        'bio_data' => $item->bio_data,
                        'subscription' => $item->subscription,
                        'lmp_date' => $item->lmp_date,
                        'deleted' => $item->deleted,
                        'deleted_date' => $item->deleted_date,
                        'password' => $item->password,
                        'status' => $item->status,
            ];
        })->all();
    }
}
