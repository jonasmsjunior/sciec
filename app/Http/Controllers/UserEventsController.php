<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\UserEventCreateRequest;
use App\Http\Requests\UserEventUpdateRequest;
use App\Repositories\UserEventRepository;
use App\Validators\UserEventValidator;


class UserEventsController extends Controller
{

    /**
     * @var UserEventRepository
     */
    protected $repository;

    /**
     * @var UserEventValidator
     */
    protected $validator;

    public function __construct(UserEventRepository $repository, UserEventValidator $validator)
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
        $userEvents = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $userEvents,
            ]);
        }

        return view('userEvents.index', compact('userEvents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  UserEventCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(UserEventCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $userEvent = $this->repository->create($request->all());

            $response = [
                'message' => 'UserEvent created.',
                'data'    => $userEvent->toArray(),
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
        $userEvent = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $userEvent,
            ]);
        }

        return view('userEvents.show', compact('userEvent'));
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

        $userEvent = $this->repository->find($id);

        return view('userEvents.edit', compact('userEvent'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  UserEventUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(UserEventUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $userEvent = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'UserEvent updated.',
                'data'    => $userEvent->toArray(),
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
                'message' => 'UserEvent deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'UserEvent deleted.');
    }
}
