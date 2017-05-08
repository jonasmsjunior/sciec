<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\activity_userRepository;
use App\Entities\ActivityUser;
use App\Validators\ActivityUserValidator;

/**
 * Class ActivityUserRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ActivityUserRepositoryEloquent extends BaseRepository implements ActivityUserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ActivityUser::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return ActivityUserValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
