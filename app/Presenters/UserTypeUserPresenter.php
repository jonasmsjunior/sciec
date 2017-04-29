<?php

namespace App\Presenters;

use App\Transformers\UserTypeUserTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class UserTypeUserPresenter
 *
 * @package namespace App\Presenters;
 */
class UserTypeUserPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new UserTypeUserTransformer();
    }
}
