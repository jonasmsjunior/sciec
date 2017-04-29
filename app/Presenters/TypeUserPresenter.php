<?php

namespace App\Presenters;

use App\Transformers\TypeUserTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class TypeUserPresenter
 *
 * @package namespace App\Presenters;
 */
class TypeUserPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new TypeUserTransformer();
    }
}
