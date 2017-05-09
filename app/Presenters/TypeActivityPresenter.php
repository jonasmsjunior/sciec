<?php

namespace App\Presenters;

use App\Transformers\TypeActivityTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class TypeActivityPresenter
 *
 * @package namespace App\Presenters;
 */
class TypeActivityPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new TypeActivityTransformer();
    }
}
