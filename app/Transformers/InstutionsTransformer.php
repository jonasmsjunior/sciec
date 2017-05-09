<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Instutions;

/**
 * Class InstutionsTransformer
 * @package namespace App\Transformers;
 */
class InstutionsTransformer extends TransformerAbstract
{

    /**
     * Transform the \Instutions entity
     * @param \Instutions $model
     *
     * @return array
     */
    public function transform(Instutions $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
