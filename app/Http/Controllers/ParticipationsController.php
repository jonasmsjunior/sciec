<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\ParticipationCreateRequest;
use App\Http\Requests\ParticipationUpdateRequest;
use App\Repositories\ParticipationRepository;
use App\Validators\ParticipationValidator;


class ParticipationsController extends Controller
{

    /**
     * @var ParticipationRepository
     */
    protected $repository;

    /**
     * @var ParticipationValidator
     */
    protected $validator;

    public function __construct(ParticipationRepository $repository, ParticipationValidator $validator)
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
        $participations = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $participations,
            ]);
        }

        //return view('participations.index', compact('participations'));
        return $participations;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ParticipationCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ParticipationCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $participation = $this->repository->create($request->all());

            $response = [
                'message' => 'Participation created.',
                'data'    => $participation->toArray(),
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
            return $participation;
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
        $participation = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $participation,
            ]);
        }

        //return view('participations.show', compact('participation'));
        return $participation;
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

        $participation = $this->repository->find($id);

        //return view('participations.edit', compact('participation'));
        return $participation;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  ParticipationUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(ParticipationUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $participation = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Participation updated.',
                'data'    => $participation->toArray(),
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
            return $participation;
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
                'message' => 'Participation deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Participation deleted.');
    }
}
