<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Customer;
class CustomerController extends Controller
{
    /**
     * Create a new auth instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }
    /**
     * Get all data from customer
     */
    public function index(Request $request)
    {
      return view('customer.index');
    }
    /**
     * Insert database for ItemAds
     * Url : /item_ads
     */
    public function show(Request $request){
      return $customer = Customer::paginate(150);
      // if (count($customer) !== 0) {
      //     $res['success'] = true;
      //     $res['result'] = $customer;
      //     return response($res);
      // }else{
      //     $res['success'] = true;
      //     $res['result'] = 'Data Tidak Ditemukan!';
      //     return response($res);
      // }
    }
    public function create(Request $request)
    {
      $customer = new Customer;
      $customer->fill([
        'kode_customer' => $request->input('kode_customer'),
        'nama_customer' => $request->input('nama_customer'),
        'nama_pimpinan' => $request->input('nama_pimpinan'),
        'alamat' => $request->input('alamat'),
        'kode_propinsi' => $request->input('kode_propinsi'),
        'kode_kabupaten' => $request->input('kode_kabupaten'),
        'sales_group' => $request->input('sales_group'),
        'no_telepon' => $request->input('no_telepon'),
        'npwp' => $request->input('npwp'),
        'email' => $request->input('email'),
        'active' => $request->input('active'),
      ]);
      if($customer->save()){
        $res['success'] = true;
        $res['result'] = 'Success add new Customer!';
        return response($res);
      }
    }
    /**
     * Get one data ItemAds by id
     * Url : /item_ads/{id}
     */
    public function read(Request $request, $id)
    {
      $customer = Customer::where('id',$id)->first();
      if ($customer !== null) {
        $res['success'] = true;
        $res['result'] = $customer;
        return response($res);
      }else{
        $res['success'] = false;
        $res['result'] = 'Data not found!';
        return response($res);
      }
    }
    /**
     * Update data ItemAds by ud
     * Url : /item_ads/udpate/{id}
     */
    public function update(Request $request, $id)
    {
      if ($request->input('kode_customer')) {
          $customer = Customer::find($id);
          $customer->kode_customer = $request->input('kode_customer');
          if ($customer->save()) {
              $res['success'] = true;
              $res['result'] = 'Success update '.$request->input('kode_customer');
              return response($res);
          }
      }else{
        $res['success'] = false;
        $res['result'] = 'Please fill name!';
        return response($res);
      }
    }
    /**
     * Delete data ItemAds by id
     */
    public function delete(Request $request, $id)
    {
      $customer = Customer::find($id);
      if ($customer->delete($id)) {
          $res['success'] = true;
          $res['result'] = 'Success delete Data!';
          return response($res);
      }
    }
}
