<?php

namespace App\Presenters;

use App\Transformers\InstutionsTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class InstutionsPresenter
 *
 * @package namespace App\Presenters;
 */
class InstutionsPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new InstutionsTransformer();
    }
}
