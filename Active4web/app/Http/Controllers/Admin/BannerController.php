<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banners;
use Illuminate\Http\Request;
use App\Http\Traits\ImageTrait;
use PhpParser\Node\Expr\FuncCall;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Banners\CreateBannerRequest;
use RealRashid\SweetAlert\Facades\Alert;

class BannerController extends Controller
{
    use ImageTrait;
    protected $bannerModel;
 
    public function __construct(Banners $bannerModel)
    {
      $this->bannerModel=$bannerModel;
    }


    public function index(){
        $banners= $this->bannerModel::get();
        return view('admin.banners.index',compact('banners'));

    }

    public function create(){
        return view('admin.banners.create');
    }


    public function store(CreateBannerRequest $request){
        
        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $image =  $this->uploadImage($request->image, $filename, 'banner');
            
        }
    $this->bannerModel::create([
              'title' =>$request->title,
               'image' =>$image
    ]);
    Alert::success('success', 'Banner added  Successfully');
    return redirect(route('Admin.banner.index'));
    }
}
