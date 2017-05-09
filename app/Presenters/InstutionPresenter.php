<?php

namespace App\Presenters;

use App\Transformers\InstutionTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class InstutionPresenter
 *
 * @package namespace App\Presenters;
 */
class InstutionPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new InstutionTransformer();
    }
}
