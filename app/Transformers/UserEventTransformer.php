<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\UserEvent;

/**
 * Class UserEventTransformer
 * @package namespace App\Transformers;
 */
class UserEventTransformer extends TransformerAbstract
{

    /**
     * Transform the \UserEvent entity
     * @param \UserEvent $model
     *
     * @return array
     */
    public function transform(UserEvent $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
