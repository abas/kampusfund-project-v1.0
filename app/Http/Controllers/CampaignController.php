<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User,App\Investor,App\Student,App\Campaign;

class CampaignController extends Controller
{
    public $user;

    public function __construct()
    {
        $this->user = new User;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }
    
    /**
     * show all campaign on dashboard
     * 
     * @return Campaign::all()
     */
    public function dashboardCampaign()
    {
        $id = Auth::user()->id;
        $user = User::find($id)->first();
        $campaigns = Campaign::all()->where('user_id','=',$id)->first();

        // return $campaigns;
        return view('dashboard.dashboard-campaign');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return $user;
        // return view('dashboard.create-campaign');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        // $user = Auth::user();
        $data = new Campaign;
        $data->cover                = "/";
        $data->judul                = $r->judul;
        $data->diskripsi            = $r->diskripsi;
        $data->link_youtube         = $r->link_youtube; 
        $data->kebutuhan_dana       = $r->kebutuhan_dana;
        $data->pengembalian_dana    = $r->pengembalian_dana;
        $data->bagi_hasil           = $r->bagi_hasil;
        $data->t_judul              = $r->t_judul;
        $data->t_deskripsi          = $r->t_deskripsi;
        $data->category_campaign_id = $r->category_campaign_id;
        $data->user_id              = $r->user_id;
        $data->save();
        // if($data->save()){
        //     return redirect(route('dashboard-campaign'));
        // }else{
        //     return redirect()->back()->with('msg','failed to create campaign');
        // }

        return $data; 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $this->user = Auth::user();
        // $campaign = Campaign::where('user_id',$this->user->id)->first();
        // return view('single-campaign');
        $campaign = Campaign::where('user_id',18)->first();
        return $campaign;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $this->user = Auth::user();
        // $campaign = Campaign::find($id);
        // if(Campaign::isMine($this->user->id,$campaign->user_id)){
            // return view('dashboard.edit');
        // }return redirect()->back()->with('msg','you have not access that campaign');
        $campaign = Campaign::find($id);
        return $campaign;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
        // $user = Auth::user();
        $data = Campaign::find($id);
        $data->cover                = $r->cover;
        $data->judul                = $r->judul;
        $data->diskripsi            = $r->diskripsi;
        $data->link_youtube         = $r->link_youtube; 
        $data->kebutuhan_dana       = $r->kebutuhan_dana;
        $data->pengembalian_dana    = $r->pengembalian_dana;
        $data->bagi_hasil           = $r->bagi_hasil;
        $data->t_judul              = $r->t_judul;
        $data->t_deskripsi          = $r->t_deskripsi;
        $data->category_campaign_id = $r->category_campaign_id;
        // $data->user_id              = $r->user_id;
        $data->update();
        return $data; 
        // if(Campaign::isMine($this->user->id,$campaign->user_id)){
        //     if($data->update()){
        //         return redirect(route('dashboard-campaign'));
        //     }else{
        //         return redirect()->back()->with('msg','failed to create campaign');
        //     }
        // }return redirect()->back()->with('msg','you have not access that campaign');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $this->user = Auth::user();
        $campaign = Campaign::find($id);
        if($campaign->delete()){
            return "success deleted!";
        }return "fail to delete!";
        
        // if(Campaign::isMine($this->user->id,$campaign->user_id)){
            // if($campaign->delete()){
                //     return redirect(route('dashboard-campaign'))->with('msg','successfully deleted!');
            // }return redirect()->back()->with('msg','failed to delete the campaign');                
        // }return redirect()->back()->with('msg','you have not access to that campaign');
    }

}
