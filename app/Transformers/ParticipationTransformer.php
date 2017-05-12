<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Participation;

/**
 * Class ParticipationTransformer
 * @package namespace App\Transformers;
 */
class ParticipationTransformer extends TransformerAbstract
{

    /**
     * Transform the \Participation entity
     * @param \Participation $model
     *
     * @return array
     */
    public function transform(Participation $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
