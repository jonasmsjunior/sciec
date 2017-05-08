<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\ActivityUser;

/**
 * Class ActivityUserTransformer
 * @package namespace App\Transformers;
 */
class ActivityUserTransformer extends TransformerAbstract
{

    /**
     * Transform the \ActivityUser entity
     * @param \ActivityUser $model
     *
     * @return array
     */
    public function transform(ActivityUser $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
