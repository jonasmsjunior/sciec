<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\type_activity_userRepository;
use App\Entities\TypeActivityUser;
use App\Validators\TypeActivityUserValidator;

/**
 * Class TypeActivityUserRepositoryEloquent
 * @package namespace App\Repositories;
 */
class TypeActivityUserRepositoryEloquent extends BaseRepository implements TypeActivityUserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return TypeActivityUser::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return TypeActivityUserValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
