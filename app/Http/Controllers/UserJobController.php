<?php

namespace App\Http\Controllers;

use App\Models\UserJob; // Your model is located inside the Models folder
use Illuminate\Http\Response; // Response components
use App\Traits\ApiResponser; // Standardized API response
use Illuminate\Http\Request; // Handling HTTP requests in Lumen
use DB; // If not using Lumen Eloquent, you can use DB component in Lumen

class UserJobController extends Controller
{
    // Use to add your Traits ApiResponser
    use ApiResponser;

    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Return the list of user jobs
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $usersjob = UserJob::all();
        return $this->successResponse($usersjob);
    }

    /**
     * Obtains and shows one user job
     * @param int $id
     * @return Illuminate\Http\Response
     */
    public function show($id)
    {
        $userjob = UserJob::findOrFail($id);
        return $this->successResponse($userjob);
    }
}