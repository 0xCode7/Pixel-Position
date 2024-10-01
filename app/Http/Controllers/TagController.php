<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller {
    public function __invoke(Tag $tag) //For One Action
    {

        return view('jobs.result', ['jobs'=>$tag->jobs]);
    }
}
