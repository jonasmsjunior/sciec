<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\type_userRepository;
use App\Entities\TypeUser;
use App\Validators\TypeUserValidator;

/**
 * Class TypeUserRepositoryEloquent
 * @package namespace App\Repositories;
 */
class TypeUserRepositoryEloquent extends BaseRepository implements TypeUserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return TypeUser::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return TypeUserValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
