<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Wilayah;
class WilayahController extends Controller
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
     * Get all data from wilayah
     */
    public function index(Request $request)
    {
      return view('wilayah.index');
    }

    public function form(Request $request)
    {
      return view('wilayah.form');
    }
    /**
     * Insert database for ItemAds
     * Url : /item_ads
     */
    public function show(Request $request){
      return $wilayah = Wilayah::orderBy('id','desc')->paginate(150);
    }
    public function create(Request $request)
    {
      $wilayah = new Wilayah;
      $wilayah->fill([
        'sales_office' => $request->input('sales_office'),
        'sales_office_desc' => $request->input('sales_office_desc'),
        'code_kabupaten' => $request->input('code_kabupaten'),
        'kabupaten' => $request->input('kabupaten'),
        'sales_group' => $request->input('sales_group'),
        'code_kecamatan' => $request->input('code_kecamatan'),
        'kecamatan' => $request->input('kecamatan'),
      ]);
      if($wilayah->save()){
        $res['success'] = true;
        $res['result'] = 'Success add new Daftar!';
        return response($res);
      }
    }
    /**
     * Get one data ItemAds by id
     * Url : /item_ads/{id}
     */
    public function read(Request $request, $id)
    {
      $wilayah = Wilayah::where('id',$id)->first();
      if ($wilayah !== null) {
        $res['success'] = true;
        $res['result'] = $wilayah;
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
      if ($request->has('sales_office')) {
          $wilayah = Wilayah::find($id);
          $wilayah->sales_office = $request->input('sales_office');
          if ($wilayah->save()) {
              $res['success'] = true;
              $res['result'] = 'Success update '.$request->input('sales_office');
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
      $wilayah = Wilayah::find($id);
      if ($wilayah->delete($id)) {
          $res['success'] = true;
          $res['result'] = 'Success delete Data!';
          return response($res);
      }
    }
}
