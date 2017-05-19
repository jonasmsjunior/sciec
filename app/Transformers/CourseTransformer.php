<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Course;

/**
 * Class CourseTransformer
 * @package namespace App\Transformers;
 */
class CourseTransformer extends TransformerAbstract
{

    /**
     * Transform the \Course entity
     * @param \Course $model
     *
     * @return array
     */
    public function transform(Course $model)
    {
        return [
            'id'         => (int) $model->id,



            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
