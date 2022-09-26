<?php

namespace Modules\Pengajuan\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Project\Entities\Biaya;
use Illuminate\Support\Facades\Auth;
use Modules\Pengajuan\Entities\Cair;
use Modules\Pengajuan\Entities\Role;
use Modules\Project\Entities\Project;
use Modules\Project\Entities\Pendapatan;
use Illuminate\Contracts\Support\Renderable;
use Modules\Pengajuan\Entities\PencairanProject;
use Modules\Pengajuan\Entities\LampiranProject;
use Modules\Pengajuan\Entities\HistoriPengajuanProjek;

class DetailProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('pengajuan::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('pengajuan::create');
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
        
            $role=Role::select()->where('user_id', Auth::user()->id)->get()->first();
            $biaya = Biaya::select()->where('project_id',  $id)->get();
            $pendapatan = Pendapatan::select()->where('project_id',  $id)->get();
            $project = Project::where('id',  $id)->get(); 
            $jumlah_biaya = Biaya::select()->where('project_id',  $id)->sum('total_biaya'); 
            $jumlah_pendapatan = Pendapatan::select()->where('project_id',  $id)->sum('total_pendapatan'); 
            $laba = $jumlah_pendapatan - $jumlah_biaya; 
            $persentase = ($laba / $jumlah_biaya)*(100);
            $cair_project = Cair::select()->where('project_id',  $id)->get();
            // $detailp= Project::find($id);
            // $projectlampiran = Lampiranroject::select()->where('project_id',  $detailp->id)->get();
            // $project_cair = Cair::select()->where('project_id',  $detailp->id)->get();
           
            

      
        
          
        if ($role->divisi_id==3 && $role->jabatan_id==4) {
             
            // return $lampiran;
    
            return view('pengajuan::pengajuanprojek.detail_pengajuan.manager', [
                // 'projects' =>  Project::all(),
                'role' => $role->role_id,
                'projects' =>  $project,
                'biayas' =>  $biaya,
                'pendapatans' =>  $pendapatan,
                'jumlah_biaya' =>  $jumlah_biaya,
                'jumlah_pendapatan' =>  $jumlah_pendapatan,
                'laba' => $laba,
                'persentase' => $persentase,
                'cair_projects' =>  $cair_project,
                
            ]);
        }
        if ($role->divisi_id==3 && $role->jabatan_id==3) {
             
            // return $lampiran;
    
            return view('pengajuan::pengajuanprojek.detail_pengajuan.dirop', [
                // 'projects' =>  Project::all(),
                'role' => $role->role_id,
                'projects' =>  $project,
                'biayas' =>  $biaya,
                'pendapatans' =>  $pendapatan,
                'jumlah_biaya' =>  $jumlah_biaya,
                'jumlah_pendapatan' =>  $jumlah_pendapatan,
                'laba' => $laba,
                'persentase' => $persentase,
                'cair_projects' =>  $cair_project,
                
            ]);
        }
        if ($role->divisi_id==1 && $role->jabatan_id==4) {
             
            // return $lampiran;
    
            return view('pengajuan::pengajuanprojek.detail_pengajuan.mankeu', [
                // 'projects' =>  Project::all(),
                'role' => $role->role_id,
                'projects' =>  $project,
                'biayas' =>  $biaya,
                'pendapatans' =>  $pendapatan,
                'jumlah_biaya' =>  $jumlah_biaya,
                'jumlah_pendapatan' =>  $jumlah_pendapatan,
                'laba' => $laba,
                'persentase' => $persentase,
                'cair_projects' =>  $cair_project,
                
            ]);
        }
        if ($role->divisi_id==4 && $role->jabatan_id==2) {
             
            // return $lampiran;
    
            return view('pengajuan::pengajuanprojek.detail_pengajuan.dirkeu', [
                // 'projects' =>  Project::all(),
                'role' => $role->role_id,
                'projects' =>  $project,
                'biayas' =>  $biaya,
                'pendapatans' =>  $pendapatan,
                'jumlah_biaya' =>  $jumlah_biaya,
                'jumlah_pendapatan' =>  $jumlah_pendapatan,
                'laba' => $laba,
                'persentase' => $persentase,
                'cair_projects' =>  $cair_project,
                
            ]);
        }
        if ($role->divisi_id==4 && $role->jabatan_id==1) {
             
            // return $lampiran;
    
            return view('pengajuan::pengajuanprojek.detail_pengajuan.dirut', [
                // 'projects' =>  Project::all(),
                'role' => $role->role_id,
                'projects' =>  $project,
                'biayas' =>  $biaya,
                'pendapatans' =>  $pendapatan,
                'jumlah_biaya' =>  $jumlah_biaya,
                'jumlah_pendapatan' =>  $jumlah_pendapatan,
                'laba' => $laba,
                'persentase' => $persentase,
                'cair_projects' =>  $cair_project,
                
            ]);
        }
        if ($role->divisi_id==1 && $role->jabatan_id==7) {

        return view('pengajuan::pengajuanprojek.pencairan.detailcair', [
            // 'projects' =>  Project::all(),
            'role' => $role->role_id,
            'projects' =>  $project,
            'biayas' =>  $biaya,
            'pendapatans' =>  $pendapatan,
            'jumlah_biaya' =>  $jumlah_biaya,
            'jumlah_pendapatan' =>  $jumlah_pendapatan,
            'laba' => $laba,
            'persentase' => $persentase,
            'cair_projects' =>  $cair_project,
            // 'detailps' => Project::select()->where('id',$detailp->project_id)->get(),
            // 'project_lampirans' =>  $projectlampiran,
            // 'project_cairs' =>  $project_cair,
            
        ]);
    }
    
}

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */




    // public function proses($id)
    // {
    //     // $role=Role::select()->where('user_id', Auth::user()->id)->get()->first();
    //         $biaya = Biaya::select()->where('project_id',  $id)->get();
    //         $pendapatan = Pendapatan::select()->where('project_id',  $id)->get();
    //         $project = Project::where('id',  $id)->get(); 
    //         $jumlah_biaya = Biaya::select()->where('project_id',  $id)->sum('total_biaya'); 
    //         $jumlah_pendapatan = Pendapatan::select()->where('project_id',  $id)->sum('total_pendapatan'); 
    //         $laba = $jumlah_pendapatan - $jumlah_biaya; 
    //         $persentase = ($laba / $jumlah_biaya)*(100);
            

             
    //         // return $lampiran;
    
    //         return view('pengajuan::pengajuanprojek.detailproses.detailmanager', [
    //             // 'projects' =>  Project::all(),
    //             // 'role' => $role->role_id,
    //             'projects' =>  $project,
    //             'biayas' =>  $biaya,
    //             'pendapatans' =>  $pendapatan,
    //             'jumlah_biaya' =>  $jumlah_biaya,
    //             'jumlah_pendapatan' =>  $jumlah_pendapatan,
    //             'laba' => $laba,
    //             'persentase' => $persentase,
                
    //         ]);
    //     }
    



    public function cair($id)
    {
        $role=Role::select()->where('user_id', Auth::user()->id)->get()->first();
        $biaya = Biaya::select()->where('project_id',  $id)->get();
        $pendapatan = Pendapatan::select()->where('project_id',  $id)->get();
        $project = Project::where('id',  $id)->get(); 
        $jumlah_biaya = Biaya::select()->where('project_id',  $id)->sum('total_biaya'); 
        $jumlah_pendapatan = Pendapatan::select()->where('project_id',  $id)->sum('total_pendapatan'); 
        $laba = $jumlah_pendapatan - $jumlah_biaya; 
        $persentase = ($laba / $jumlah_biaya)*(100);
        $cair_project = Cair::select()->where('project_id',  $project->id)->get();
        // $detailp= Project::find($id);
        // $projectlampiran = Lampiranroject::select()->where('project_id',  $detailp->id)->get();
        // $project_cair = Cair::select()->where('project_id',  $detailp->id)->get();
       
        

  
    
      
    if ($role->divisi_id==1 && $role->jabatan_id==7) {
         
        // return $lampiran;

        return view('pengajuan::pengajuanprojek.pencairan.detailcair', [
            // 'projects' =>  Project::all(),
            'role' => $role->role_id,
            'projects' =>  $project,
            'biayas' =>  $biaya,
            'pendapatans' =>  $pendapatan,
            'jumlah_biaya' =>  $jumlah_biaya,
            'jumlah_pendapatan' =>  $jumlah_pendapatan,
            'laba' => $laba,
            'persentase' => $persentase,
            'cair_projects' => $cair_project,
            
        ]);
    }


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
                'divisi' => $request->divisi,
                'status' => $request->status,
            ]);
            if ($role->divisi_id==1 && $role->jabatan_id==7 ) {

                $cair= $request->file ('cair_project')->store('lampiran-pencairan-project');
                if ($request->file ('cair_project')) {
                    $cair;
                    }
                Cair::create([
                'project_id' => $id,
                'cair_project' => $cair,
            ]); 
        }
            return redirect('/pengajuan/pengajuanprojek/pencairan/selesai');
            

    
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
