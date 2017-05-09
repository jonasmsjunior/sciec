<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Instution;

/**
 * Class InstutionTransformer
 * @package namespace App\Transformers;
 */
class InstutionTransformer extends TransformerAbstract
{

    /**
     * Transform the \Instution entity
     * @param \Instution $model
     *
     * @return array
     */
    public function transform(Instution $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
