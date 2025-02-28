<?php

namespace App\Http\Controllers\Api\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Client\CreateReviewRequest;
use App\Services\Client\ClientService;
use function App\Helpers\responseJson;

class MainClientController extends Controller
{

    public function __construct(private ClientService $service) {}

    public function addReview(CreateReviewRequest $request)
    {
        $data = $request->validated();
        $result =  $this->service->addReview($data);
        if ($result['status']) {
            return responseJson(1, 'Review added successfully', $result['data']);
        }

        return responseJson(0, $result['message']);
    }

}
