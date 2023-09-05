<?php

namespace App\Services\BillGroup;

use App\Models\BillGroup;
use App\Exceptions\BusinessRuleException;

class BillGroupService {

    protected $billGroup;

    public function __construct(BillGroup $billGroup) {
        $this->billGroup = $billGroup;
    }

    public function getAll($request)
    {
        $billGroupsData = $this->billGroup
                                ->orderBy('created_at', $request->input('sort_order') ?? 'desc' )
                                ->paginate(
                                    $request->input('per_page') ?? 20, 
                                    ['*'], 
                                    'page', 
                                    $request->input('current_page')
                                );

        return $billGroupsData;
    }

    public function getBillGroup($id)
    {
        $billGroupData = $this->billGroup->with('bills')->find($id);

        if(!$billGroupData){
            throw BusinessRuleException::invoke(message: 'Bill Group not found');
        }

        return $billGroupData;
    }

    public function create($request)
    {
        $response = $this->billGroup->create($request->all());
        return $response;
    }

    public function update($request, $billGroup)
    {

    }

    public function delete($id)
    {

    }
}