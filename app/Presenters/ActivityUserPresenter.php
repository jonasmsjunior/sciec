<?php

namespace App\Presenters;

use App\Transformers\ActivityUserTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ActivityUserPresenter
 *
 * @package namespace App\Presenters;
 */
class ActivityUserPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ActivityUserTransformer();
    }
}
