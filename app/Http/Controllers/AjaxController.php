<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\User;
class AjaxController extends Controller
{

    // public function ajaxRequest()
    // {
    //     return view('ajaxRequest');
    // }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function ajaxRequestPost(Request $request)
    {
        $shop = Auth::user();
        $input = $request->all();
        if($input){
            \Log::info($input);

            $input = DB::table('query')->updateOrInsert(
                ['product_title'=>$input['product_title'],'url'=>$input['product_url'],'name'=>$input['name'], 'contact'=>$input['contact'], 'query'=>$input['query'],'updated_at'=> now(), 'created_at'=>Carbon::now() ]
        );

   }

    return response()->json(['success'=>'Form is successfully submitted!']);

}
}
