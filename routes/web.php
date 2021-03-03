<?php

use App\Models\AboutArrow;
use App\Models\AboutDigitalSkill;
use App\Models\AboutNumber;
use App\Models\ContactCardsHead;
use App\Models\Education;
use App\Models\Email;
use App\Models\Experience;
use App\Models\Footer;
use App\Models\Form;
use App\Models\Navlink;
use App\Models\PageImage;
use App\Models\Phone;
use App\Models\PortfolioFilter;
use App\Models\PortfolioItem;
use App\Models\ResumeSubtitle;
use App\Models\ResumeSummary;
use App\Models\Social;
use App\Models\Title;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome', [
        'bo'=>false,
        'about_arrows'=>AboutArrow::all(),
        'about_digital_skills'=>AboutDigitalSkill::all(),
        'about_numbers'=>AboutNumber::all(),
        'contact_cards_heads'=>ContactCardsHead::all(),
        'education'=>Education::all(),
        'emails'=>Email::all(),
        'experiences'=>Experience::all(),
        'footers'=>Footer::first(),
        'forms'=>Form::first(),
        'navlinks'=>Navlink::all(),
        'page_images'=>PageImage::all(),
        'phones'=>Phone::all(),
        'portfolio_filters'=>PortfolioFilter::all(),
        'portfolio_items'=>PortfolioItem::all(),
        'resume_subtitles'=>ResumeSubtitle::all(),
        'resume_summaries'=>ResumeSummary::first(),
        'socials'=>Social::all(),
        'titles'=>Title::all(),
    ]);
});

// BO
Route::get('/bo',function(){
    return view('pages.bo',[
        'bo'=>true,
        'page_images'=>PageImage::all(),
        'titles'=>Title::all(),
    ]);
});
Route::get('/bo/about',function(){
    return view('pages.bo.about',[
        'bo'=>true,
        'about_arrows'=>AboutArrow::all(),
        'about_digital_skills'=>AboutDigitalSkill::all(),
        'about_numbers'=>AboutNumber::all(),
        'page_images'=>PageImage::all(),
        'titles'=>Title::all(),
    ]);
});
Route::get('/bo/contact',function(){
    return view('pages.bo.contact',[
        'bo'=>true,
        'titles'=>Title::all(),
        'emails'=>Email::all(),
        'phones'=>Phone::all(),
        'socials'=>Social::all(),
        'contact_cards_heads'=>ContactCardsHead::all(),
        'forms'=>Form::first(),
    ]);
});
Route::get('/bo/footer',function(){
    return view('pages.bo.footer',[
        'bo'=>true,
        'page_images'=>PageImage::all(),
        'footers'=>Footer::first(),
        'socials'=>Social::all(),
    ]);
});
Route::get('/bo/header',function(){
    return view('pages.bo.header',[
        'bo'=>true,
        'navlinks'=>Navlink::all(),
    ]);
});
Route::get('/bo/portfolio',function(){
    return view('pages.bo.portfolio',[
        'bo'=>true,
        'titles'=>Title::all(),
        'portfolio_filters'=>PortfolioFilter::all(),
        'portfolio_items'=>PortfolioItem::all(),
    ]);
});
Route::get('/bo/resume',function(){
    return view('pages.bo.resume',[
        'bo'=>true,
        'titles'=>Title::all(),
        'resume_subtitles'=>ResumeSubtitle::all(),
        'resume_summaries'=>ResumeSummary::first(),
        'education'=>Education::all(),
        'experiences'=>Experience::all(),
    ]);
});
