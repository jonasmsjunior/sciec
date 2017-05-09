<?php

namespace App\Presenters;

use App\Transformers\CourseEventsTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class CourseEventsPresenter
 *
 * @package namespace App\Presenters;
 */
class CourseEventsPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CourseEventsTransformer();
    }
}
