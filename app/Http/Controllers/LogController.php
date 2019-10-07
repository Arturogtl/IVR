<?php
namespace App\Http\Controllers;
use App\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

           $registers=Log::paginate(10);
         
           $count61 = Log::where('codigo_transaccion','=', '610000')->count();
           $count62 = Log::where('codigo_transaccion','=', '620000')->count();



        return view('index',['registers' => $registers,'count61' => $count61,'count62' => $count62]);        
    }

     public function graphs()
    {

        $registers=Log::paginate(10);
          $count62 = Log::where('codigo_transaccion','=', '620000')->count() + Log::where('codigo_transaccion','=', '620000')->count();
           $count61 = Log::where('codigo_transaccion','=','610000')->count();

        return view('graphs',['registers' => $registers,'count61' => $count61,'count62' => $count62]);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Tabla1  $tabla1
     * @return \Illuminate\Http\Response
     */
    public function show(Log $log)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tabla1  $tabla1
     * @return \Illuminate\Http\Response
     */
    public function edit(Log $log)
    {
   
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tabla1  $tabla1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Log $log)
    {
  
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function destroy(Log $log)
    {
    
    }
}