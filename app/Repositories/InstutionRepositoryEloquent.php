<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\instutionRepository;
use App\Entities\Instution;
use App\Validators\InstutionValidator;

/**
 * Class InstutionRepositoryEloquent
 * @package namespace App\Repositories;
 */
class InstutionRepositoryEloquent extends BaseRepository implements InstutionRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Instution::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return InstutionValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
