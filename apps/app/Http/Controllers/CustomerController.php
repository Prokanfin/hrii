<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Customer;

class CustomerController extends Controller {

    //
    public function index() {

        return view('welcome');
        // return view('data/employee_list');
    }

    public function detail(Request $request) {

        if ($request->input('customer_id')) {
            $var_customer_id = $request->input('customer_id');
        } else {
            $var_customer_id = $request->session()->get('customer_id');
        }

        //$var_em_id = $request->session()->get('em_id');
        //return $var_em_id;

        $result = Customer::Sel_cus_id($var_customer_id);


        return view('data/customer_detail')->with('result', $result);
    }

    public function customer_list(Request $request) {
        if ($request->session()->has('em_id')) {

            $result = Customer::Sel_cus_list();

            //return $result;
            return view('data/customer_list')->with('result', $result);
        }
    }

    public function reg() {
        return view('data/customer_reg');
    }

    public function insert(Request $request) {
        if ($request->session()->has('em_id')) {

            $filename = "";
            if (!empty($request->hasFile('cFile'))) {

                $file = $request->file('cFile');
                $filename = $file->getClientOriginalName();
                $file->move(base_path().'/upload/', $filename);
                //return base_path().'/upload/
            }
            //return response()->json($request->all());
            $dataArray = array(
                "customer_name" => $request->input('txtcName'),
                "customer_status" => $request->input('txtcStatus'),
                "customer_tax_id" => $request->input('txtcTaxId'),
                "customer_band_id" => $request->input('txtcBandId'),
                "customer_addr_th" => $request->input('txtcAddrTh'),
                "customer_addr_en" => $request->input('txtcAddrEn'),
                "customer_tel" => $request->input('txtcTel'),
                "customer_fax" => $request->input('txtcFax'),
                "customer_web" => $request->input('txtcWeb'),
                "customer_mail" => $request->input('txtcMail'),
                "customer_condition" => $request->input('txtcCondition'),
                "customer_coor_name" => $request->input('txtcCoorName'),
                "customer_coor_tel" => $request->input('txtcCoorTel'),
                "customer_coor_mail" => $request->input('txtcCoorMail'),
                "customer_lat" => $request->input('txtcLat'),
                "customer_long" => $request->input('txtcLong'),
                "customer_note" => $request->input('txtcNote'),
                "customer_level" => $request->input('selcLevel'),
                "customer_file" => $filename
            );
            $result = Customer::Ins_cus($dataArray);
        }
    }

}
