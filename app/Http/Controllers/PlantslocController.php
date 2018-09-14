<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Plantsloc;
class PlantslocController extends Controller
{
    /**
     * Create a new auth instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth');
    }
    /**
     * Get all data from plantsloc
     */
    public function index(Request $request)
    {
      $plantsloc = Plantsloc::select('id','code_plant', 'nama_plant', 'code_storage_location', 'nama_storage_location', 'code_shipping_point', 'nama_shipping_point', 'code_propinsi')->get();
      if (count($plantsloc) !== 0) {
          $res['success'] = true;
          $res['result'] = $plantsloc;
          return response($res);
      }else{
          $res['success'] = true;
          $res['result'] = 'Data Tidak Ditemukan!';
          return response($res);
      }
    }
    /**
     * Insert database for ItemAds
     * Url : /item_ads
     */
    public function create(Request $request)
    {
      $plantsloc = new Plantsloc;
      $material->fill([
        'code_plant' => $request->input('code_plant'),
        'nama_plant' => $request->input('nama_plant'),
        'code_storage_location' => $request->input('code_storage_location'),
        'nama_storage_location' => $request->input('nama_storage_location'),
        'code_shipping_point' => $request->input('code_shipping_point'),
        'nama_shipping_point' => $request->input('nama_shipping_point'),
        'code_propinsi' => $request->input('code_propinsi'),
      ]);
      if($plantsloc->save()){
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
      $plantsloc = Plantsloc::where('id',$id)->first();
      if ($plantsloc !== null) {
        $res['success'] = true;
        $res['result'] = $plantsloc;
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
      if ($request->has('code_plant')) {
          $material = Material::find($id);
          $material->code_plant = $request->input('code_plant');
          if ($plantsloc->save()) {
              $res['success'] = true;
              $res['result'] = 'Success update '.$request->input('code_plant');
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
      $plantsloc = Plantsloc::find($id);
      if ($plantsloc->delete($id)) {
          $res['success'] = true;
          $res['result'] = 'Success delete Data!';
          return response($res);
      }
    }
}
