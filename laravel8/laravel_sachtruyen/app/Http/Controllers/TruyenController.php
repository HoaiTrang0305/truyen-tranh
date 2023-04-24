<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhmucTruyen;
use App\Models\Truyen;
use Carbon\Carbon;
class TruyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danhsachtruyen = Truyen::with('danhmuctruyen')->orderBy('id','DESC')->get();
        
        return view('admincp.truyen.index')->with(compact('danhsachtruyen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
        return view('admincp.truyen.create')->with(compact('danhmuc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate  (
            [
                'tentruyen'=>'required|unique:truyen|max:255',
                'slug_truyen'=>'required|unique:truyen|max:255',
                'truyen_noibat'=>'required',
                'hinhanh'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_heght=100,max_with=1000,max_height=1000',

                'tomtat'=>'required',
                'tacgia'=>'required',
                'kichhoat'=>'required',
                'danhmuc'=>'required',
            ],
            [
                'tentruyen.unique'=>'Tên truyện đã tồn tại, vui lòng điền tên khác',
                'slug_truyen.unique'=>'Slug truyện đã tồn tại, vui lòng điền slug khác',
                'slug_truyen.required'=>'Thiếu slug truyện, vui lòng nhập slug truyện',
                'tentruyen.required'=>'Thiếu tên truyện, vui lòng nhập tên truyện',
                'tomtat.required'=>'Thiếu tóm tắt truyện, vui lòng nhập tóm tắt truyện',
                'tacgia.required'=>'Thiếu tác giả, vui lòng nhập tác giả',
                'hinhanh.required'=>'Thiếu hình ảnh truyện, vui lòng chọn hình ảnh truyện',
            ]
         );
         
         $truyen = new Truyen();
         $truyen->tentruyen = $data['tentruyen'];
         $truyen->slug_truyen = $data['slug_truyen'];
         $truyen->tomtat = $data['tomtat'];
         $truyen->tacgia = $data['tacgia'];
         $truyen->kichhoat = $data['kichhoat'];
         $truyen->danhmuc_id = $data['danhmuc'];
         $truyen->created_at= Carbon::now('Asia/Ho_Chi_Minh');
         $truyen->truyen_noibat = $data['truyen_noibat'];
         $get_image=$request->hinhanh;
         
         $path ='public/uploads/truyen/';
         $get_name_image=$get_image->getClientOriginalName();
         $name_image = current(explode('.',$get_name_image));
         $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
         $get_image->move($path,$new_image);

         $truyen->hinhanh = $new_image;

         $truyen->save();
         return redirect()->back()->with('status','Thêm truyện thành công');
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
        $truyen = Truyen::find($id);
        $danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
        return view('admincp.truyen.edit')->with(compact('truyen','danhmuc'));
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
        $data = $request->validate  (
            [
                'tentruyen'=>'required|max:255',
                'slug_truyen'=>'required|max:255',
                'truyen_noibat'=>'required',
                'tomtat'=>'required',
                'tacgia'=>'required',
                'kichhoat'=>'required',
                'danhmuc'=>'required',
            ],
            [
              
                'slug_truyen.required'=>'Thiếu slug truyện, vui lòng nhập slug truyện',
                'tentruyen.required'=>'Thiếu tên truyện, vui lòng nhập tên truyện',
                'tomtat.required'=>'Thiếu mô tả truyện, vui lòng nhập mô tả truyện',
                'tacgia.required'=>'Thiếu tác giả, vui lòng nhập tác giả',
                'hinhanh.required'=>'Thiếu hình ảnh truyện, vui lòng chọn hình ảnh truyện',
            ]
         );
         
         $truyen = Truyen::find($id);
         $truyen->tentruyen = $data['tentruyen'];
         $truyen->slug_truyen = $data['slug_truyen'];
         $truyen->tomtat = $data['tomtat'];
         $truyen->kichhoat = $data['kichhoat'];
         $truyen->tacgia = $data['tacgia'];
         $truyen->danhmuc_id = $data['danhmuc'];
        
         $truyen->updated_at= Carbon::now('Asia/Ho_Chi_Minh');
         $get_image=$request->hinhanh;
         if($get_image){
            if(file_exists($path)){
                unlink($path);
            }
            $path ='public/uploads/truyen/';
            $get_name_image=$get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_image);
   
            $truyen->hinhanh = $new_image;
         }
         $truyen->truyen_noibat = $data['truyen_noibat'];

         $truyen->save();
         return redirect()->back()->with('status','Cập nhật truyện thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $truyen = Truyen::find($id);
        $path = 'public/uploads/truyen/'.$truyen->hinhanh;
        if(file_exists($path)){
            unlink($path);
        }
        Truyen::find($id)->delete();
        return redirect()->back()->with('status','Xóa truyện thành công');
    }
}
