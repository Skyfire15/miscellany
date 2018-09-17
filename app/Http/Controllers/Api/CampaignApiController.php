<?php

namespace App\Http\Controllers\Api;

use App\Models\Campaign;
use App\Http\Requests\StoreCampaign as Request;
use App\Http\Resources\Campaign as Resource;
use App\Http\Resources\CampaignCollection as Collection;

class CampaignApiController extends ApiController
{
    public function index()
    {
        return new Collection(auth()->user()->campaigns()->paginate());
    }

    public function show(Campaign $campaign)
    {
        return new Resource($campaign);
    }

    public function store(Request $request)
    {
        $model = Campaign::create($request->all());
        return new Resource($model);
    }

    public function update(Request $request, Campaign $campaign)
    {
        $campaign->update($request->all());

        return new Resource($campaign);
    }

    public function delete(Request $request, Campaign $campaign)
    {
        $campaign->delete();

        return response()->json(null, 204);
    }
}