<?php

namespace App\Repositories;

use App\Presenters\CoursePresenter;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\course_eventsRepository;
use App\Entities\CourseEvents;
use App\Validators\CourseEventsValidator;

/**
 * Class CourseEventsRepositoryEloquent
 * @package namespace App\Repositories;
 */
class CourseEventsRepositoryEloquent extends BaseRepository implements CourseEventsRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CourseEvents::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return CourseEventsValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }


}
