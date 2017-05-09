<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\type_activityRepository;
use App\Entities\TypeActivity;
use App\Validators\TypeActivityValidator;

/**
 * Class TypeActivityRepositoryEloquent
 * @package namespace App\Repositories;
 */
class TypeActivityRepositoryEloquent extends BaseRepository implements TypeActivityRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return TypeActivity::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return TypeActivityValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
