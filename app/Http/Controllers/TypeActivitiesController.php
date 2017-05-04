<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\TypeActivityCreateRequest;
use App\Http\Requests\TypeActivityUpdateRequest;
use App\Repositories\TypeActivityRepository;
use App\Validators\TypeActivityValidator;


class TypeActivitiesController extends Controller
{

    /**
     * @var TypeActivityRepository
     */
    protected $repository;

    /**
     * @var TypeActivityValidator
     */
    protected $validator;

    public function __construct(TypeActivityRepository $repository, TypeActivityValidator $validator)
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
        $typeActivities = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $typeActivities,
            ]);
        }

        return view('typeActivities.index', compact('typeActivities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  TypeActivityCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(TypeActivityCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $typeActivity = $this->repository->create($request->all());

            $response = [
                'message' => 'TypeActivity created.',
                'data'    => $typeActivity->toArray(),
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
        $typeActivity = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $typeActivity,
            ]);
        }

        return view('typeActivities.show', compact('typeActivity'));
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

        $typeActivity = $this->repository->find($id);

        return view('typeActivities.edit', compact('typeActivity'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  TypeActivityUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(TypeActivityUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $typeActivity = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'TypeActivity updated.',
                'data'    => $typeActivity->toArray(),
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
                'message' => 'TypeActivity deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'TypeActivity deleted.');
    }
}
