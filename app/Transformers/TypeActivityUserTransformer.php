<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\TypeActivityUser;

/**
 * Class TypeActivityUserTransformer
 * @package namespace App\Transformers;
 */
class TypeActivityUserTransformer extends TransformerAbstract
{

    /**
     * Transform the \TypeActivityUser entity
     * @param \TypeActivityUser $model
     *
     * @return array
     */
    public function transform(TypeActivityUser $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
