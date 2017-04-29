<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\user_type_userRepository;
use App\Entities\UserTypeUser;
use App\Validators\UserTypeUserValidator;

/**
 * Class UserTypeUserRepositoryEloquent
 * @package namespace App\Repositories;
 */
class UserTypeUserRepositoryEloquent extends BaseRepository implements UserTypeUserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return UserTypeUser::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return UserTypeUserValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
