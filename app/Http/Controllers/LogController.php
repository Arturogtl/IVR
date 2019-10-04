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
        dd($registers);
        return view('index',['registers' => $registers]);        
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
    public function show(Log $tabla1)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tabla1  $tabla1
     * @return \Illuminate\Http\Response
     */
    public function edit(Log $tabla1)
    {
   
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tabla1  $tabla1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Log $tabla1)
    {
  
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tabla1  $tabla1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Log $tabla1)
    {
    
    }
}