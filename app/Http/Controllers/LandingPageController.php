<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Category;
use App\Models\Image;
use App\Models\Item;
use App\Models\Social;
use App\Models\Testmonial;
use Backpack\LangFileManager\app\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LandingPageController extends Controller
{
    public function setLanguage(Request $request, $locale)
    {
        if (in_array($locale, Language::where('active', 1)->pluck('abbr')->toArray())) {
            Session::put('locale', $locale);
        }
        return redirect()->back();
    }
    public function home(Request $request)
    {
        return view('welcome',[
            "Branches" => Branch::get(),
            "Categories" => Category::get(),
            "FeateredCategories" => Category::where('is_featured', 1)->get(),
            "FeateredItems" => Item::where('is_featured', 1)->get(),
            "Socials" => Social::get(),
            "Testmonials" => Testmonial::get(),
            "BranchesImage" => Image::where('id', 1)->first(),
            "FeaturedCategoriesImage" => Image::where('id', 2)->first(),
            "AboutImage" => Image::where('id', 3)->first(),
            "MainImage3" => Image::where('id', 4)->first(),
            "MainImage2" => Image::where('id', 5)->first(),
            "MainImage1" => Image::where('id', 6)->first(),
        ]);
    }
    public function menu(Request $request)
    {
        return view('menu',[
            "Categories" => Category::get(),
            "Socials" => Social::get(),
            "MainImage3" => Image::where('id', 4)->first(),
            "MainImage2" => Image::where('id', 5)->first(),
            "MainImage1" => Image::where('id', 6)->first(),
        ]);
    }
    public function item(Request $request, $id)
    {
        return view('item',[
            "Item" => Item::where('id', $id)->first(),
            "Socials" => Social::get(),
            "MainImage3" => Image::where('id', 4)->first(),
            "MainImage2" => Image::where('id', 5)->first(),
            "MainImage1" => Image::where('id', 6)->first(),
        ]);
    }
}
