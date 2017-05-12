<?php

namespace App\Presenters;

use App\Transformers\ParticipationTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ParticipationPresenter
 *
 * @package namespace App\Presenters;
 */
class ParticipationPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ParticipationTransformer();
    }
}
