<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\UserTypeUser;

/**
 * Class UserTypeUserTransformer
 * @package namespace App\Transformers;
 */
class UserTypeUserTransformer extends TransformerAbstract
{

    /**
     * Transform the \UserTypeUser entity
     * @param \UserTypeUser $model
     *
     * @return array
     */
    public function transform(UserTypeUser $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
