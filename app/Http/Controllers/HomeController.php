<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('landing.index');
    }

    public function product_category(Request $request, $category)
    {
        $category = Category::where('type', $category)->first();
        if (!$category) {
            abort(404);
        }

        return view('landing.product_category', compact('category'));
    }

    public function config_page()
    {
        $config_page = [
            'logo' => config('config_page.logo'),
            'whatsapp' => config('config_page.whatsapp'),
            'maps' => config('config_page.maps'),
            'visi' => config('config_page.visi'),
            'misi' => config('config_page.misi'),
        ];
        return view('config_page', compact('config_page'));
    }

    public function store_config_page(Request $request)
    {
        request()->validate([
            'logo' => ['image', 'mimes:jpg,png,jpeg,gif,svg,webp', 'max:10240'],
        ], []);

        $logo = config('config_page.logo');
        if ($request->has('logo')) :

            $image = $request->file('logo');

            $imageName = 'logo';
            $imageFullName = $imageName . '.' . 'webp';
            $logo = $imageFullName;

            Storage::putFileAs('public/logo', $image, $imageFullName);
        endif;
        config([
            'config_page.logo' => $logo,
            'config_page.maps' => $logo,
            'config_page.whatsapp' => $logo,
            'config_page.visi' => $logo,
            'config_page.misi' => $logo,
        ]);
        $text = '<?php return ' . var_export(config('config_page'), true) . ';';
        file_put_contents(config_path('config_page.php'), $text);
        // return redirect()->route('config_page');

        return ResponseFormatter::success(null, 'Config page sucessfully updated');
    }
}
