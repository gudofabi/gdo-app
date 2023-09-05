<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BillGroup;
use App\Services\BillGroup\BillGroupService;
use App\Http\Resources\BillGroup\BillGroupResource;
use App\Http\Resources\BillGroup\ShowBillGroupResource;
use App\Traits\ResponseFormatterTrait;

class BillGroupController extends Controller
{
    use ResponseFormatterTrait;
    protected BillGroupService $billGroupService;

    public function __construct(BillGroupService $billGroupService)
    {
        $this->billGroupService = $billGroupService;
    }

    public function index(Request $request)
    {
        return $this->responseWithPagination(
            data: BillGroupResource::collection($this->billGroupService->getAll($request))->additional([
                'message' => 'Bill Groups successfully retrieved.',
            ])
        );
    }

    public function show($id)
    {
        return $this->responseSuccess(
            message: 'Bill Group successfully retreived!',
            data: new ShowBillGroupResource($this->billGroupService->getBillGroup($id))
        );
    }

    public function store(Request $request)
    {
        return $this->responseSuccess(
            message: "Bill Group successfully created!",
            data: new BillGroupResource($this->billGroupService->create($request))
        );
    }

    public function update(Request $request, BillGroup $billGroup)
    {

    }

    public function destroy($billGroup)
    {

    }
}
