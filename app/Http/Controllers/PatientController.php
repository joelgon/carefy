<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //try {
        //    $Patients = DB::table('patients')->select(columns: ['*'])->get();
        //    return ["Patients" => $Patients];
        //    return view('Patient.index', compact('Patients', $Patients));
        //} catch (\Throwable $th) {
        //    return ["Error" => $th];
        //    return view('Patient.index', compact('Patients', []));
        //}

        return view('Patient.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $body = $request->request->all();

        try {

            $patient_id = DB::table('patients')->insertGetId([
                'name' => $body['Nome'],
            ]);

            foreach ($body as $b => $value) {
                switch ($b) {
                    case 'Telefone_preferencial':
                        if ($value !== null) {
                            $flag = str_split($value);
                            $areacode = (int)implode('', [$flag[0], $flag[1]]);
                            unset($flag[0], $flag[1]);
                            $number = (int)implode('', $flag);



                            $telephone_id = DB::table('telephone_patients')->insertGetId([
                                'areacode' => $areacode,
                                'number' => $number,
                                'description' => 'Telefone Preferencial',
                                'patient_id' => $patient_id
                            ]);

                            DB::table('patients')->where('id', $patient_id)->update(['preferredPhone' => $telephone_id]);
                        }
                        break;

                    case 'Telefone':
                        if ($value !== null) {
                            $flag = str_split($value);
                            $areacode = (int)implode('', [$flag[0], $flag[1]]);
                            unset($flag[0], $flag[1]);
                            $number = (int)implode('', $flag);

                            $telephone_id = DB::table('telephone_patients')->insertGetId([
                                'areacode' => $areacode,
                                'number' => $number,
                                'description' => 'Telefone paciente',
                                'patient_id' => $patient_id
                            ]);
                        }
                        break;

                    case 'Telefone_para_contato':
                        if ($value !== null) {
                            $flag = str_split($value);
                            $areacode = (int)implode('', [$flag[0], $flag[1]]);
                            unset($flag[0], $flag[1]);
                            $number = (int)implode('', $flag);

                            $telephone_id = DB::table('telephone_patients')->insertGetId([
                                'areacode' => $areacode,
                                'number' => $number,
                                'description' => 'Telefone para contato',
                                'patient_id' => $patient_id
                            ]);
                        }
                        break;

                    default:
                        # code...
                        break;
                }
            }

            return ["status" => 200, ];
        } catch (\Throwable $th) {
            return ["Error" => $th->getMessage()];
        }

        session()->flush('success', [
            'success' => 200,
        ]);

        $res = 200;


        return view('Patient.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
