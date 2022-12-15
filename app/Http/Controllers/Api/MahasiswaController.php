<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Helpers\ApiFormater;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mahasiswa::all();

        if ($data) {
            return ApiFormater::createApi(200, 'Succes Show Data', $data);
        }else{
            return ApiFormater::createApi(400, 'Failed');
        }
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Mahasiswa::create([
            'name' =>$request->name,
            'nis' =>$request->nis,
            'fakultas' =>$request->fakultas,
            'jurusan' =>$request->jurusan,
        ]);
        if ($data) {
            return ApiFormater::createApi(200, 'Succes Add Data', $data);
        }else{
            return ApiFormater::createApi(400, 'Failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Mahasiswa::find($id);

        if ($data) {
            return ApiFormater::createApi(200, 'Succes Show One Data', $data);
        }else{
            return ApiFormater::createApi(400, 'Failed');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Mahasiswa::find($id);
        $data->update($request->all());
        if ($data) {
            return ApiFormater::createApi(200, 'Succes Update', $data);
        }else{
            return ApiFormater::createApi(400, 'Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Mahasiswa::find($id);
        $data->delete();
        if ($data) {
            return ApiFormater::createApi(200, 'Succes Delete', $data);
        }else{
            return ApiFormater::createApi(400, 'Failed');
        }
    }
}
