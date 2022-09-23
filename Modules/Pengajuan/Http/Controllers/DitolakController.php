<?php

namespace Modules\Pengajuan\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Pengajuan\Entities\HistoriPengajuanBiasa;
use Modules\Pengajuan\Entities\PengajuanBiasa;
use Modules\Pengajuan\Entities\Role;


class DitolakController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $role=Role::select()->where('user_id',Auth::user()->id)->get()->first();
             return view('pengajuan::PengajuanBiasa.pengajuan_ditolak.index', [
                    'role' => $role->role_id,
                    'pengajuanbiasas' => PengajuanBiasa::select()->where('divisi',1)->get(),
                ]); 
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
        $role = Role::select()->where('user_id', Auth::user()->id)->get()->first();
        
        //keuangan
        if($role->divisi_id==1 && $role->jabatan_id==7) { 
            return view('pengajuan::PengajuanBiasa.pengajuan_ditolak.staff', [
            'role' => $role->role_id,
            'pengajuanbiasas'=> PengajuanBiasa::select()->where('divisi',1)->get(),
            ]); }
        if($role->divisi_id==1 && $role->jabatan_id==4) { 
            return view('pengajuan::PengajuanBiasa.pengajuan_ditolak.manager', [
            'role' => $role->role_id,
            'pengajuanbiasas'=> PengajuanBiasa::select()->where('divisi',1)->get(),
            ]); }
        
        
        //sdm umum
        if($role->divisi_id==2 && $role->jabatan_id==7 ) {
                return view('pengajuan::PengajuanBiasa.pengajuan_ditolak.staff', [
                'role' => $role->role_id,
                'pengajuanbiasas' => PengajuanBiasa::select()->where('divisi',2)->get(),
                ]); }
        if($role->divisi_id==2 && $role->jabatan_id==4  ) {
                return view('pengajuan::PengajuanBiasa.pengajuan_ditolak.manager', [
                'role' => $role->role_id,
                'pengajuanbiasas' => PengajuanBiasa::select()->where('divisi',2)->get(),
                ]); }
       

        //operasional
        if($role->divisi_id==3 && $role->jabatan_id==7 ) {
                return view('pengajuan::PengajuanBiasa.pengajuan_ditolak.staff', [
                'role' => $role->role_id,
                'pengajuanbiasas' => PengajuanBiasa::select()->where('divisi',3)->get(),
                ]); }
        if($role->divisi_id==3 && $role->jabatan_id==4  ) {
                return view('pengajuan::PengajuanBiasa.pengajuan_ditolak.manager', [
                'role' => $role->role_id,
                'pengajuanbiasas' => PengajuanBiasa::select()->where('divisi',3)->get(),
                ]); }
        if($role->divisi_id==3 && $role->jabatan_id==3  ) {
                return view('pengajuan::PengajuanBiasa.pengajuan_ditolak.direktur_operasional', [
                'role' => $role->role_id,
                'pengajuanbiasas' => PengajuanBiasa::select()->where('divisi',3)->get(),
                ]); }
        
        // umum keuangan
        if($role->divisi_id==4 && $role->jabatan_id==2  ) {
            return view('pengajuan::PengajuanBiasa.pengajuan_ditolak.direktur_u&k', [
            'role' => $role->role_id,
            'pengajuanbiasas' => PengajuanBiasa::all(),
            ]); }


        // dirut
        if($role->divisi_id==4 && $role->jabatan_id==1  ) {
            return view('pengajuan::PengajuanBiasa.pengajuan_ditolak.dirut', [
            'role' => $role->role_id,
            'pengajuanbiasas' => PengajuanBiasa::all(),
            ]); }


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
