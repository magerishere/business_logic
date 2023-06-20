<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Facades\Log;

class ActivityLogCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'count' => $this->collection->count(),
            'data' => $this->collection->groupBy(function($item) {
                return $item['created_at']->format('Y-m-d');
            })->map(function($group) {
                return $group->values()->map(function($item) {
                    return [
                        'id' => $item->id,
                        'log_name' => $item->log_name,
                        'description' => $item->description,
                        'created_at' => $item->created_at->format('Y-m-d H:i:s'),
                        'user' => new UserResource($item->causer),
                        'subscription' => new SubscriptionResource($item->subject),
                        'properties' => $item->properties,
                    ];
                });
            }),
        ];
    }
}
