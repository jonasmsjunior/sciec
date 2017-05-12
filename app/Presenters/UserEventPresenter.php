<?php

namespace App\Presenters;

use App\Transformers\UserEventTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class UserEventPresenter
 *
 * @package namespace App\Presenters;
 */
class UserEventPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new UserEventTransformer();
    }
}
