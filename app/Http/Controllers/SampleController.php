<?php

namespace App\Http\Controllers;

use App\Service\SampleService;
use Illuminate\Routing\Controller;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller
{
    /**
     * @param int $id
     * @return Collection
     */
    public function index(int $id)
    {
        $collection = DB::table('test')->where('id', $id)->get();;
        return $collection;
    }
}
