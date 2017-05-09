<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\CourseEvents;

/**
 * Class CourseEventsTransformer
 * @package namespace App\Transformers;
 */
class CourseEventsTransformer extends TransformerAbstract
{

    /**
     * Transform the \CourseEvents entity
     * @param \CourseEvents $model
     *
     * @return array
     */
    public function transform(CourseEvents $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
