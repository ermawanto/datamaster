<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Material;
class MaterialController extends Controller
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
     * Get all data from material
     */
    public function index(Request $request)
    {
      return view('material.index');
    }

    public function form(Request $request)
    {
      return view('material.form');
    }
    /**
     * Insert database for ItemAds
     * Url : /item_ads
     */
     public function show(Request $request){
      return $material = Material::orderBy('id','desc')->paginate(50);
    }
    public function create(Request $request)
    {
      $material = new Material;
      $material->fill([
        'produk_desc' => $request->input('produk_desc'),
        'material_code' => $request->input('material_code'),
        'code_jenis_produk' => $request->input('code_jenis_produk'),
        'nama_jenis_produk' => $request->input('nama_jenis_produk'),
        'group_produk' => $request->input('group_produk'),
        'group_produk_desc' => $request->input('group_produk_desc'),
        'active' => $request->input('active'),
      ]);
      if($material->save()){
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
      $material = Material::where('id',$id)->first();
      if ($material !== null) {
        $res['success'] = true;
        $res['result'] = $material;
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
      if ($request->has('material_code')) {
          $material = Material::find($id);
          $material->material_code = $request->input('material_code');
          if ($material->save()) {
              $res['success'] = true;
              $res['result'] = 'Success update '.$request->input('material_code');
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
      $material = Material::find($id);
      if ($material->delete($id)) {
          $res['success'] = true;
          $res['result'] = 'Success delete Data!';
          return response($res);
      }
    }
}
