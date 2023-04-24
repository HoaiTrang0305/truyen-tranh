<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Carbon\Carbon;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danhsachbaiviet = Blog::orderBy('id','DESC')->get();
        
        return view('admincp.blog.index')->with(compact('danhsachbaiviet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admincp.blog.create');
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
                'tenbaiviet'=>'required|unique:blog|max:255',
                'slug_baiviet'=>'required|unique:blog|max:255',
        
                'hinhanh'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_heght=100,max_with=1000,max_height=1000',

                'noidung'=>'required',
                'tacgia'=>'required',
                'kichhoat'=>'required',
               
            ],
            [
                'tenbaiviet.unique'=>'Tên bài viết đã tồn tại, vui lòng điền tên khác',
                'slug_baiviet.unique'=>'Slug bài viết đã tồn tại, vui lòng điền slug khác',
                'slug_baiviet.required'=>'Thiếu slug bài viết, vui lòng nhập slug bài viết',
                'tenbaiviet.required'=>'Thiếu tên bài viết, vui lòng nhập tên bài viết',
                'noidung.required'=>'Thiếu nội dung bài viết, vui lòng nhập nội dung bài viết',
                'tacgia.required'=>'Thiếu tác giả, vui lòng nhập tác giả',
                'hinhanh.required'=>'Thiếu hình ảnh bài viết, vui lòng chọn hình ảnh bài viết',
            ]
         );
         
         $blog = new Blog();
         $blog->tenbaiviet = $data['tenbaiviet'];
         $blog->slug_baiviet = $data['slug_baiviet'];
         $blog->noidung = $data['noidung'];
         $blog->tacgia = $data['tacgia'];
         $blog->kichhoat = $data['kichhoat'];
         $blog->created_at= Carbon::now('Asia/Ho_Chi_Minh');
         $get_image=$request->hinhanh;
         
         $path ='public/uploads/blog/';
         $get_name_image=$get_image->getClientOriginalName();
         $name_image = current(explode('.',$get_name_image));
         $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
         $get_image->move($path,$new_image);

         $blog->hinhanh = $new_image;

         $blog->save();
         return redirect()->back()->with('status','Thêm bài viết thành công');
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
        $blog = Blog::find($id);
        return view('admincp.blog.edit')->with(compact('blog'));
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
                'tenbaiviet'=>'required|max:255',
                'slug_baiviet'=>'required|max:255',
        
               
                'noidung'=>'required',
                'tacgia'=>'required',
                'kichhoat'=>'required',
               
            ],
            [
                
                'slug_baiviet.required'=>'Thiếu slug bài viết, vui lòng nhập slug bài viết',
                'tenbaiviet.required'=>'Thiếu tên bài viết, vui lòng nhập tên bài viết',
                'noidung.required'=>'Thiếu nội dung bài viết, vui lòng nhập nội dung bài viết',
                'tacgia.required'=>'Thiếu tác giả, vui lòng nhập tác giả',
                'hinhanh.required'=>'Thiếu hình ảnh bài viết, vui lòng chọn hình ảnh bài viết',
            ]
         );
         
         $blog = Blog::find($id);
         $blog->tenbaiviet = $data['tenbaiviet'];
         $blog->slug_baiviet = $data['slug_baiviet'];
         $blog->noidung = $data['noidung'];
         $blog->tacgia = $data['tacgia'];
         $blog->kichhoat = $data['kichhoat'];
         $blog->created_at= Carbon::now('Asia/Ho_Chi_Minh');
         $get_image=$request->hinhanh;
         
         $path ='public/uploads/blog/';
         $get_image=$request->hinhanh;
         if($get_image){
            if(file_exists($path)){
                unlink($path);
            }
            $path ='public/uploads/blog/';
            $get_name_image=$get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_image);
   
            $blog->hinhanh = $new_image;
         }

         $blog->save();
         return redirect()->back()->with('status','Thêm bài viết thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $path = 'public/uploads/blog/'.$blog->hinhanh;
        if(file_exists($path)){
            unlink($path);
        }
        Blog::find($id)->delete();
        return redirect()->back()->with('status','Xóa bài viết thành công');
    }
}
