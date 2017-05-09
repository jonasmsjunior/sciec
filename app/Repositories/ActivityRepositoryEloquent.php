<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\activityRepository;
use App\Entities\Activity;
use App\Validators\ActivityValidator;

/**
 * Class ActivityRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ActivityRepositoryEloquent extends BaseRepository implements ActivityRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Activity::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return ActivityValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
