<?php

use App\Http\Controllers\AboutArrowController;
use App\Http\Controllers\AboutDigitalSkillController;
use App\Http\Controllers\AboutNumberController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\NavlinkController;
use App\Http\Controllers\PageImageController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\PortfolioFilterController;
use App\Http\Controllers\PortfolioItemController;
use App\Http\Controllers\ResumeSubtitleController;
use App\Http\Controllers\ResumeSummaryController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\TitleController;
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
        'navlinks'=>Navlink::all(),
        'page_images'=>PageImage::all(),
        'titles'=>Title::all(),
    ]);
})->name('boHero');
Route::get('/bo/about',function(){
    return view('pages.bo.about',[
        'navlinks'=>Navlink::all(),
        'about_arrows'=>AboutArrow::all(),
        'about_digital_skills'=>AboutDigitalSkill::all(),
        'about_numbers'=>AboutNumber::all(),
        'page_images'=>PageImage::all(),
        'titles'=>Title::all(),
    ]);
})->name('boAbout');
Route::get('/bo/contact',function(){
    return view('pages.bo.contact',[
        'navlinks'=>Navlink::all(),
        'titles'=>Title::all(),
        'emails'=>Email::all(),
        'phones'=>Phone::all(),
        'socials'=>Social::all(),
        'contact_cards_heads'=>ContactCardsHead::all(),
        'forms'=>Form::first(),
    ]);
})->name('boContact');
Route::get('/bo/footer',function(){
    return view('pages.bo.footer',[
        'navlinks'=>Navlink::all(),
        'page_images'=>PageImage::all(),
        'footers'=>Footer::first(),
        'socials'=>Social::all(),
    ]);
})->name('boFooter');
Route::get('/bo/header',function(){
    return view('pages.bo.header',[
        'navlinks'=>Navlink::all(),
    ]);
})->name('boHeader');
Route::get('/bo/portfolio',function(){
    return view('pages.bo.portfolio',[
        'navlinks'=>Navlink::all(),
        'titles'=>Title::all(),
        'portfolio_filters'=>PortfolioFilter::all(),
        'portfolio_items'=>PortfolioItem::all(),
    ]);
})->name('boPortfolio');
Route::get('/bo/resume',function(){
    return view('pages.bo.resume',[
        'navlinks'=>Navlink::all(),
        'titles'=>Title::all(),
        'resume_subtitles'=>ResumeSubtitle::all(),
        'resume_summaries'=>ResumeSummary::first(),
        'education'=>Education::all(),
        'experiences'=>Experience::all(),
    ]);
})->name('boResume');


// ressources
Route::resource('about_arrows', AboutArrowController::class);
Route::resource('about_digital_skills', AboutDigitalSkillController::class);
Route::resource('about_numbers', AboutNumberController::class);
Route::resource('education', EducationController::class);
Route::resource('emails',EmailController::class);
Route::resource('experiences',ExperienceController::class);
Route::resource('footers',FooterController::class);
Route::resource('navlinks',NavlinkController::class);
Route::resource('page_images',PageImageController::class);
Route::resource('phones',PhoneController::class);
Route::resource('portfolio_filters',PortfolioFilterController::class);
Route::resource('portfolio_items',PortfolioItemController::class);
Route::resource('resume_subtitles',ResumeSubtitleController::class);
Route::resource('resume_summaries',ResumeSummaryController::class);
Route::resource('socials',SocialController::class);
Route::resource('titles',TitleController::class);