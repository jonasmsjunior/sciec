<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\TypeUserCreateRequest;
use App\Http\Requests\TypeUserUpdateRequest;
use App\Repositories\TypeUserRepository;
use App\Validators\TypeUserValidator;


class TypeUsersController extends Controller
{

    /**
     * @var TypeUserRepository
     */
    protected $repository;

    /**
     * @var TypeUserValidator
     */
    protected $validator;

    public function __construct(TypeUserRepository $repository, TypeUserValidator $validator)
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
        $typeUsers = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $typeUsers,
            ]);
        }

        return view('typeUsers.index', compact('typeUsers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  TypeUserCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(TypeUserCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $typeUser = $this->repository->create($request->all());

            $response = [
                'message' => 'TypeUser created.',
                'data'    => $typeUser->toArray(),
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
        $typeUser = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $typeUser,
            ]);
        }

        return view('typeUsers.show', compact('typeUser'));
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

        $typeUser = $this->repository->find($id);

        return view('typeUsers.edit', compact('typeUser'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  TypeUserUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(TypeUserUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $typeUser = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'TypeUser updated.',
                'data'    => $typeUser->toArray(),
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
                'message' => 'TypeUser deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'TypeUser deleted.');
    }
}
