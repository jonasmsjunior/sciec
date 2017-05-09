<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\TypeUser;

/**
 * Class TypeUserTransformer
 * @package namespace App\Transformers;
 */
class TypeUserTransformer extends TransformerAbstract
{

    /**
     * Transform the \TypeUser entity
     * @param \TypeUser $model
     *
     * @return array
     */
    public function transform(TypeUser $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
