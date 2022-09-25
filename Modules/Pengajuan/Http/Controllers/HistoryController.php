<?php

namespace Modules\Pengajuan\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Pengajuan\Entities\Role;
use Illuminate\Contracts\Support\Renderable;
use Modules\Pengajuan\Entities\PengajuanBiasa;
use Modules\Pengajuan\Entities\HistoriPengajuanBiasa;
use Modules\Pengajuan\Entities\HistoriPengajuanProjek;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
       

    }



    

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
     
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
      
       
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('pengajuan::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
