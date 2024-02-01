<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Category;
use App\Models\Counter;
use App\Models\Image;
use App\Models\Item;
use App\Models\Policy;
use App\Models\Social;
use App\Models\Testmonial;
use App\Models\Video;
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
        return view('welcome2', [
            "Branches" => Branch::get(),
            "Categories" => Category::get(),
            "FeateredItems" => Item::where('is_featured', 1)->get(),
            "Socials" => Social::get(),
            "Testmonials" => Testmonial::get(),
            "BranchesImage" => Image::where('id', 1)->first(),
            "FeaturedCategoriesImage" => Image::where('id', 2)->first(),
            "AboutImage" => Image::where('id', 3)->first(),
            "MainImage10" => Image::where('id', 4)->first(),
            "MainImage9" => Image::where('id', 5)->first(),
            "MainImage8" => Image::where('id', 6)->first(),
            "MainImage7" => Image::where('id', 7)->first(),
            "MainImage6" => Image::where('id', 8)->first(),
            "MainImage5" => Image::where('id', 9)->first(),
            "MainImage4" => Image::where('id', 10)->first(),
            "MainImage3" => Image::where('id', 11)->first(),
            "MainImage2" => Image::where('id', 12)->first(),
            "MainImage1" => Image::where('id', 13)->first(),
            "Counters" => Counter::get(),
        ]);
    }
    public function videos(Request $request)
    {
        return view('videos', [
            "Videos" => Video::get(),
            "Branches" => Branch::get(),
            "Categories" => Category::get(),
            "FeateredItems" => Item::where('is_featured', 1)->get(),
            "Socials" => Social::get(),
            "Testmonials" => Testmonial::get(),
            "BranchesImage" => Image::where('id', 1)->first(),
            "FeaturedCategoriesImage" => Image::where('id', 2)->first(),
            "AboutImage" => Image::where('id', 3)->first(),
            "MainImage10" => Image::where('id', 4)->first(),
            "MainImage9" => Image::where('id', 5)->first(),
            "MainImage8" => Image::where('id', 6)->first(),
            "MainImage7" => Image::where('id', 7)->first(),
            "MainImage6" => Image::where('id', 8)->first(),
            "MainImage5" => Image::where('id', 9)->first(),
            "MainImage4" => Image::where('id', 10)->first(),
            "MainImage3" => Image::where('id', 11)->first(),
            "MainImage2" => Image::where('id', 12)->first(),
            "MainImage1" => Image::where('id', 13)->first(),
            "Policy" => Policy::where('id', 1)->first(),
            "Counters" => Counter::get(),
        ]);
    }
    public function privacy(Request $request)
    {
        return view('policy', [
            "Branches" => Branch::get(),
            "Categories" => Category::get(),
            "FeateredItems" => Item::where('is_featured', 1)->get(),
            "Socials" => Social::get(),
            "Testmonials" => Testmonial::get(),
            "BranchesImage" => Image::where('id', 1)->first(),
            "FeaturedCategoriesImage" => Image::where('id', 2)->first(),
            "AboutImage" => Image::where('id', 3)->first(),
            "MainImage10" => Image::where('id', 4)->first(),
            "MainImage9" => Image::where('id', 5)->first(),
            "MainImage8" => Image::where('id', 6)->first(),
            "MainImage7" => Image::where('id', 7)->first(),
            "MainImage6" => Image::where('id', 8)->first(),
            "MainImage5" => Image::where('id', 9)->first(),
            "MainImage4" => Image::where('id', 10)->first(),
            "MainImage3" => Image::where('id', 11)->first(),
            "MainImage2" => Image::where('id', 12)->first(),
            "MainImage1" => Image::where('id', 13)->first(),
            "Policy" => Policy::where('id', 1)->first(),
            "Counters" => Counter::get(),
        ]);
    }
    public function terms(Request $request)
    {
        return view('policy', [
            "Branches" => Branch::get(),
            "Categories" => Category::get(),
            "FeateredItems" => Item::where('is_featured', 1)->get(),
            "Socials" => Social::get(),
            "Testmonials" => Testmonial::get(),
            "BranchesImage" => Image::where('id', 1)->first(),
            "FeaturedCategoriesImage" => Image::where('id', 2)->first(),
            "AboutImage" => Image::where('id', 3)->first(),
            "MainImage10" => Image::where('id', 4)->first(),
            "MainImage9" => Image::where('id', 5)->first(),
            "MainImage8" => Image::where('id', 6)->first(),
            "MainImage7" => Image::where('id', 7)->first(),
            "MainImage6" => Image::where('id', 8)->first(),
            "MainImage5" => Image::where('id', 9)->first(),
            "MainImage4" => Image::where('id', 10)->first(),
            "MainImage3" => Image::where('id', 11)->first(),
            "MainImage2" => Image::where('id', 12)->first(),
            "MainImage1" => Image::where('id', 13)->first(),
            "Policy" => Policy::where('id', 2)->first(),
            "Counters" => Counter::get(),
        ]);
    }
    public function categories(Request $request, $id)
    {
        return view('categories', [
            "Category" => Category::where('id', $id)->first(),
            "Items" => Item::where('category_id', $id)->get(),
            "Socials" => Social::get(),
            "AboutImage" => Image::where('id', 3)->first(),
            "MainImage10" => Image::where('id', 4)->first(),
            "MainImage9" => Image::where('id', 5)->first(),
            "MainImage8" => Image::where('id', 6)->first(),
            "MainImage7" => Image::where('id', 7)->first(),
            "MainImage6" => Image::where('id', 8)->first(),
            "MainImage5" => Image::where('id', 9)->first(),
            "MainImage4" => Image::where('id', 10)->first(),
            "MainImage3" => Image::where('id', 11)->first(),
            "MainImage2" => Image::where('id', 12)->first(),
            "MainImage1" => Image::where('id', 13)->first(),
            "Counters" => Counter::get(),
        ]);
    }
    public function product(Request $request, $id)
    {
        return view('product', [
            "Product" => Item::where('id', $id)->first(),
            "Socials" => Social::get(),
            "AboutImage" => Image::where('id', 3)->first(),
            "MainImage10" => Image::where('id', 4)->first(),
            "MainImage9" => Image::where('id', 5)->first(),
            "MainImage8" => Image::where('id', 6)->first(),
            "MainImage7" => Image::where('id', 7)->first(),
            "MainImage6" => Image::where('id', 8)->first(),
            "MainImage5" => Image::where('id', 9)->first(),
            "MainImage4" => Image::where('id', 10)->first(),
            "MainImage3" => Image::where('id', 11)->first(),
            "MainImage2" => Image::where('id', 12)->first(),
            "MainImage1" => Image::where('id', 13)->first(),
            "Counters" => Counter::get(),
        ]);
    }

    public function search(Request $request)
    {
        return view('search', [
            "Categories" => Category::where('name->ar', $request->search)->orWhere('description->ar', $request->search)->get(),
            "Items" => Item::where('name->ar', $request->search)->orWhere('description->ar', $request->search)->get(),
            "AboutImage" => Image::where('id', 3)->first(),
            "MainImage10" => Image::where('id', 4)->first(),
            "MainImage9" => Image::where('id', 5)->first(),
            "MainImage8" => Image::where('id', 6)->first(),
            "MainImage7" => Image::where('id', 7)->first(),
            "MainImage6" => Image::where('id', 8)->first(),
            "MainImage5" => Image::where('id', 9)->first(),
            "MainImage4" => Image::where('id', 10)->first(),
            "MainImage3" => Image::where('id', 11)->first(),
            "MainImage2" => Image::where('id', 12)->first(),
            "MainImage1" => Image::where('id', 13)->first(),
            "Socials" => Social::get(),
            "Counters" => Counter::get(),
        ]);
    }
}
