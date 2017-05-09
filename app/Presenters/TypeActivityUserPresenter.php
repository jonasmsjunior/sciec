<?php

namespace App\Presenters;

use App\Transformers\TypeActivityUserTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class TypeActivityUserPresenter
 *
 * @package namespace App\Presenters;
 */
class TypeActivityUserPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new TypeActivityUserTransformer();
    }
}
