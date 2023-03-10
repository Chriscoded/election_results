<?php

namespace App\Http\Controllers;

use App\Models\Polling_Unit;
use App\Models\Lga;
use App\Models\Announced_pu_Result;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Home.index');
    }


 public function pu_results()
    {
        //$results = Polling_Unit::with('pu_results', 'Ward')->paginate(6);

        $results = \DB::table('polling_unit')->get();
        $results =  \DB::table('polling_unit')
        ->join('announced_pu_results', function($join){
          $join->on('polling_unit.uniqueid','=','announced_pu_results.polling_unit_uniqueid');

        })
        ->join('ward', function($join){
            $join->on('polling_unit.ward_id','=','ward.uniqueid');

          })->paginate(6);
        // $data = compact('results');
        // dd($results);
        return view('Home.pu_results', compact(['results']));
    }

    public function lga_results()
    {
        // $results =  \DB::table('polling_unit')
        // ->join('announced_pu_results', function($join){
        //   $join->on('polling_unit.uniqueid','=','announced_pu_results.polling_unit_uniqueid');

        // }) ->join('ward', function($join){
        //     $join->on('polling_unit.ward_id','=','ward.uniqueid');

        //   })
        //   ->join('lga', function($join){
        //     $join->on('polling_unit.lga_id','=','lga.uniqueid');

        //   }) ->sum('polling_unit.party_score')
        //   -> where([
        //     ['announced_pu_results.polling_unit_uniqueid', '=', 'announced_pu_results.polling_unit_uniqueid'],
        //     ['lga_id', '==', 'lga_id'],
        //     ['lga_id', '==', '$id']
        //   ]);

        //   dd($results);
        // return view('Home.lga_results');

    }

    public function lga_result($id)
    {
      //lets get result for a particular polling unit
        $results =  \DB::table('polling_unit')
        ->join('announced_pu_results', function($join){
          $join->on('polling_unit.uniqueid','=','announced_pu_results.polling_unit_uniqueid');

        })
        //lets link it to appropriate ward
          ->join('ward', function($join){
            $join->on('polling_unit.uniquewardid','=','ward.uniqueid');

          })
          //lets link appropriate lga
          ->join('lga', function($join){
            $join->on('ward.lga_id','=','lga.lga_id');

          })->where('ward.lga_id', '=', $id)->get();

        $PDP = ['score' => $results ->where('party_abbreviation', '=', "PDP")->sum('party_score'), 'party' => 'PDP'];
        $DPP = ['score' => $results ->where('party_abbreviation', '=', "DPP")->sum('party_score'), 'party' => 'DPP'];
        $ACN = ['score' => $results ->where('party_abbreviation', '=', "ACN")->sum('party_score'), 'party' => 'ACN'];

        $PPA = ['score' => $results ->where('party_abbreviation', '=', "PPA")->sum('party_score'), 'party' => 'PPA'];
        $CDC = ['score' => $results ->where('party_abbreviation', '=', "CDC")->sum('party_score'), 'party' => 'CDC'];
        $JP =  ['score' => $results ->where('party_abbreviation', '=', "JP")->sum('party_score'), 'party' => 'JP'];
        $ANPP =['score' => $results ->where('party_abbreviation', '=', "ANPP")->sum('party_score'), 'party' => 'ANPP'];
        $LABO =['score' => $results ->where('party_abbreviation', '=', "LABO")->sum('party_score'), 'party' => 'LABO'];
        $CPP = ['score' => $results ->where('party_abbreviation', '=', "CPP")->sum('party_score'), 'party' => 'CPP'];

        $lga = \DB::table('lga')->where('lga_id', '=', $id)->get();

        // dd($results);

          //dd($pdp,$results);
        //   $balance = DB::table('data')->where('user_id' '=' $id)->sum('balance');
        return view('Home.lga_result', compact(['PDP','DPP','ACN','PPA','CDC','JP','ANPP', 'lga', 'LABO', 'CPP', 'results']));


    }
    public function record_pu_results(){
        return view('Home.record_pu_results');

    }

    public function store_pu_result(Request $request)
    {
        // for max:100000 The value is in kilobytes. I.e. max:10000 = max 10 MB.

        $request->validate([
            'polling_unit_uniqueid'        => 'required',
            'party_abbreviation'     => 'required',
            'party_score'      => 'required',
            'entered_by_user'         => 'required',

        ]);

        $pp = Announced_pu_Result::create([

            'polling_unit_uniqueid'        => $request->input('polling_unit_uniqueid'),
            'party_abbreviation'     => $request->input('party_abbreviation'),
            'party_score'    => $request->input('party_score'),
            'entered_by_user'      => $request->input('entered_by_user'),
            'date_entered'     => date("Y/m/d"),
            'user_ip_address' => request()->ip()
        ]);

        session()->flash('success','You have submitted '. $request->input('party_abbreviation').' polling unit result successfully');
        return redirect('/record_pu_results');

    }
}
