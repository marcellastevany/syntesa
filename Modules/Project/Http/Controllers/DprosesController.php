<?php

namespace Modules\Project\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Project\Entities\Pengajuan;
use Modules\Project\Entities\Project;
use Modules\Project\Entities\Pendapatan;
use Modules\Project\Entities\Biaya;
use Illuminate\Contracts\Support\Renderable;

class DprosesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('project::carddash.proses', [
            'diproses' => Pengajuan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('project::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $biaya = Biaya::select()->where('project_id',  $id)->get();
        $pendapatan = Pendapatan::select()->where('project_id',  $id)->get();
        $project = Project::select()->where('id',  $id)->get(); 
        $jumlah_biaya = Biaya::select()->where('project_id',  $id)->sum('total_biaya'); 
        $jumlah_pendapatan = Pendapatan::select()->where('project_id',  $id)->sum('total_pendapatan'); 
        $laba = $jumlah_pendapatan - $jumlah_biaya; 
        $persentase = ($laba / $jumlah_biaya)*(100);
        
     
       
         
        // return $lampiran;

        return view('project::pengajuan.print', [
            // 'projects' =>  Project::all(),
            'projects' =>  $project,
            'biayas' =>  $biaya,
            'pendapatans' =>  $pendapatan,
            'jumlah_biaya' =>  $jumlah_biaya,
            'jumlah_pendapatan' =>  $jumlah_pendapatan,
            'laba' => $laba,
            'persentase' => $persentase,
            
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('project::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
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
