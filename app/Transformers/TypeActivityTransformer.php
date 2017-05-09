<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\TypeActivity;

/**
 * Class TypeActivityTransformer
 * @package namespace App\Transformers;
 */
class TypeActivityTransformer extends TransformerAbstract
{

    /**
     * Transform the \TypeActivity entity
     * @param \TypeActivity $model
     *
     * @return array
     */
    public function transform(TypeActivity $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
