<?php

namespace Modules\Project\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Project\Entities\Biaya;
use Illuminate\Support\Facades\Auth;
use Modules\Pengajuan\Entities\Role;
use Modules\Project\Entities\Project;
use Illuminate\Support\Facades\Storage;
use Modules\Project\Entities\Pendapatan;
use Illuminate\Contracts\Support\Renderable;
use Modules\Pengajuan\Entities\HistoriPengajuanProjek;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()

    {

        // $projects = project::all();
       
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
    // $validateData = $request->validate([
    //     'no_project' => 'required',
    //     'pemegang_project' => 'required',
    //     'tgl_project' => 'required',
    //     'nama_project' => 'required',
    //     'sales_order' => '',
    //     'deskripsi' => 'required',
    // ]);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        // $role=Role::select()->where('user_id', Auth::user()->id)->get()->first();
        $biaya = Biaya::select()->where('project_id',  $id)->get();
        $pendapatan = Pendapatan::select()->where('project_id',  $id)->get();
        $project = Project::where('id',  $id)->get(); 
        $jumlah_biaya = Biaya::select()->where('project_id',  $id)->sum('total_biaya'); 
        $jumlah_pendapatan = Pendapatan::select()->where('project_id',  $id)->sum('total_pendapatan'); 
        $laba = $jumlah_pendapatan - $jumlah_biaya; 
        $persentase = ($laba / $jumlah_biaya)*(100);
        
     
        // if ($role->divisi_id==3 && $role->jabatan_id==7) {
         
        // return $lampiran;

        return view('project::pengajuan.lihat', [
            // 'projects' =>  Project::all(),
            // 'role' => $role->role_id,
            'projects' =>  $project,
            'biayas' =>  $biaya,
            'pendapatans' =>  $pendapatan,
            'jumlah_biaya' =>  $jumlah_biaya,
            'jumlah_pendapatan' =>  $jumlah_pendapatan,
            'laba' => $laba,
            'persentase' => $persentase,
            
        ]);
    // }
   
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {

        $project = Project::find($id);
        $project->load(['lampiran','biaya','pendapatan']);
        // return $project;
        
        // $biaya = Biaya::select()->where('project_id',  $id)->get();
        // $pendapatan = Pendapatan::select()->where('project_id',  $id)->get();
        return view('project::pengajuan.edit', compact('project'));
      
           
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {

        $role=Role::select()->where('user_id', Auth::user()->id)->get()->first();
        


        HistoriPengajuanProjek::create([
            'project_id' => $id,
            'jabatan' => $request->jabatan,
            'status' => $request->status,
        ]);
        return redirect('/pengajuan/projek_masuk');
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
