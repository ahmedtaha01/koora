<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateStadiumRequest;
use App\Models\Service;
use App\Models\Stadium;
use App\Models\StadiumImage;
use App\Models\StadiumService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StadiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stadiums = Stadium::where('user_id',auth()->user()->id)->get();
        return view('admin.pitches-list',compact('stadiums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        return view('admin.create-stadium',compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateStadiumRequest $request)
    {
        
        DB::transaction(function () use ($request){
            $image_name = time().'-'.$request->file('main_image')->getClientOriginalName();

            $stadium = Stadium::create([
                'name'          => $request->stadium_name,
                'address'       => $request->address,
                'hour_price'    => $request->hour_price,
                'size'          => $request->stadium_size,
                'image'         => $image_name,
                'user_id'       => auth()->user()->id,
                'google_link'   => $request->google_link,
                'iframe'        => $request->iframe,
                'join_date'     => now(),
            ]);

            foreach($request->service as $service){
                $service_id = Service::where('type',$service)->first()->id;
                if($service_id){
                    StadiumService::create([
                        'stadium_id'    => $stadium->id,
                        'service_id'    => $service_id,
                    ]);
                }
            }

            $request->file('main_image')->storeAs('public/images/stadiums',$image_name);
            foreach ($request->file('images') as $image) {
                $images_name = time().'-'.$image->getClientOriginalName();
                StadiumImage::create([
                    'stadium_id'    => $stadium->id,
                    'image'         => time().'-'.$image->getClientOriginalName()
                ]);
                $image->storeAs('public/images/stadiums',$images_name);
            }
            
        });
        
        
        return redirect()->route('admin.stadiums.create')->with('success','stadium has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stadium  $stadium
     * @return \Illuminate\Http\Response
     */
    public function show(Stadium $stadium)
    {
        $this->authorize('view',$stadium);
        
        return view('admin.pitch-profile',compact('stadium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stadium  $stadium
     * @return \Illuminate\Http\Response
     */
    public function edit(Stadium $stadium)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stadium  $stadium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stadium $stadium)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stadium  $stadium
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stadium $stadium)
    {
        //
    }
}
