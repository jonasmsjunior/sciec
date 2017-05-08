<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\ActivityUserCreateRequest;
use App\Http\Requests\ActivityUserUpdateRequest;
use App\Repositories\ActivityUserRepository;
use App\Validators\ActivityUserValidator;


class ActivityUsersController extends Controller
{

    /**
     * @var ActivityUserRepository
     */
    protected $repository;

    /**
     * @var ActivityUserValidator
     */
    protected $validator;

    public function __construct(ActivityUserRepository $repository, ActivityUserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $activityUsers = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $activityUsers,
            ]);
        }

        return view('activityUsers.index', compact('activityUsers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ActivityUserCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ActivityUserCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $activityUser = $this->repository->create($request->all());

            $response = [
                'message' => 'ActivityUser created.',
                'data'    => $activityUser->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activityUser = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $activityUser,
            ]);
        }

        return view('activityUsers.show', compact('activityUser'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $activityUser = $this->repository->find($id);

        return view('activityUsers.edit', compact('activityUser'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  ActivityUserUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(ActivityUserUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $activityUser = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'ActivityUser updated.',
                'data'    => $activityUser->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'ActivityUser deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'ActivityUser deleted.');
    }
}
