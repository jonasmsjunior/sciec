<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\TypeActivityUserCreateRequest;
use App\Http\Requests\TypeActivityUserUpdateRequest;
use App\Repositories\TypeActivityUserRepository;
use App\Validators\TypeActivityUserValidator;


class TypeActivityUsersController extends Controller
{

    /**
     * @var TypeActivityUserRepository
     */
    protected $repository;

    /**
     * @var TypeActivityUserValidator
     */
    protected $validator;

    public function __construct(TypeActivityUserRepository $repository, TypeActivityUserValidator $validator)
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
        $typeActivityUsers = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $typeActivityUsers,
            ]);
        }

        //return view('typeActivityUsers.index', compact('typeActivityUsers'));
        return $typeActivityUsers;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  TypeActivityUserCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(TypeActivityUserCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $typeActivityUser = $this->repository->create($request->all());

            $response = [
                'message' => 'TypeActivityUser created.',
                'data'    => $typeActivityUser->toArray(),
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

            //return redirect()->back()->withErrors($e->getMessageBag())->withInput();
            return $typeActivityUser;
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
        $typeActivityUser = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $typeActivityUser,
            ]);
        }

        //return view('typeActivityUsers.show', compact('typeActivityUser'));
        return $typeActivityUser;
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

        $typeActivityUser = $this->repository->find($id);

        //return view('typeActivityUsers.edit', compact('typeActivityUser'));
        return $typeActivityUser;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  TypeActivityUserUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(TypeActivityUserUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $typeActivityUser = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'TypeActivityUser updated.',
                'data'    => $typeActivityUser->toArray(),
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

            //return redirect()->back()->withErrors($e->getMessageBag())->withInput();
            return $typeActivityUser;
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
                'message' => 'TypeActivityUser deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'TypeActivityUser deleted.');
    }
}
