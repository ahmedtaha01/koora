<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateReviewRequest;
use App\Models\Comment;
use App\Models\Rate;
use App\Models\Stadium;
use App\Policies\Admin\ReviewPolicy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_of_stadiums = Auth::user()->stadiums->pluck('id')->toArray();
        $reviews = DB::table('comments')
        ->join('stadiums','stadiums.id','=','comments.stadium_id')
        ->join('users','users.id','=','comments.user_id')
        ->whereIn('comments.stadium_id',$list_of_stadiums)
        ->get(['users.name as user_name',
        'stadiums.name as stadium_name','stadiums.image as stadium_image',
        'comments.stadium_id','comments.id','comments.comment','comments.created_at']);

        return view('admin.reviews',compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateReviewRequest $request)
    {
        
        DB::transaction(function() use ($request){
            Comment::create([
                'comment'       => $request->review,
                'user_id'       => Auth::user()->id,
                'stadium_id'    => $request->stadium_id,
            ]);
    
            Rate::create([
                'rate'              => $request->rating,
                'user_id'           => Auth::user()->id,
                'stadium_id'        => $request->stadium_id,
            ]);
        });
        
        return redirect()->route('admin.stadiums.show',$request->stadium_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $review)
    {
        Comment::destroy($review->id);
    }
}
