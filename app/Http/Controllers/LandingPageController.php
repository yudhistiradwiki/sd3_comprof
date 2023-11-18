<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Berita;
use App\Models\Carousel;
use App\Models\Client;
use App\Models\Facility;
use App\Models\Ppdb;
use App\Models\PpdbDetail;
use App\Models\Project;
use App\Models\Sambutan;
use App\Models\Services;
use App\Models\Struktur;
use App\Models\Testimoni;
use App\Models\VisiMisi;
use App\Models\Whychoose;
use App\Models\whychooseDetail;

class LandingPageController extends Controller
{

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        // get 3 data terbaru service
        $services = Services::latest()->take('4')->get();

        // get 1 data about
        $about = About::latest()->first();

        // get 1 data project
        $facility = Facility::latest()->take('10')->get();

        // get 4 carousel
        $carousels = Carousel::latest()->take('4')->get();

        // testimonial 4 aja
        $testimonials = Testimoni::latest()->take('4')->get();

        // get whychoose
        $whychoose = Whychoose::latest()->first();

        // get detail whychoose
        $whychooseDetail = whychooseDetail::where('whychoose_id', $whychoose->id)->take('6')->get();

        // client
        $clients = Client::latest()->take('20')->get();

        // get 1 data sambutan
        $sambutan = Sambutan::latest()->first();

        return view('pages.landingPage.index', compact('sambutan','services', 'about', 'facility', 'carousels', 'testimonials', 'whychoose', 'whychooseDetail', 'clients'));
    }

    /**
     * service
     *
     * @return void
     */
    public function service()
    {
        // get 3 data terbaru service
        $services = Services::latest()->paginate('6');

        return view('pages.landingPage.service', compact('services'));
    }

    /**
     * struktur
     *
     * @return void
     */
    public function struktur()
    {
        // get 1
        $struktur = Struktur::first();
        return view('pages.landingPage.struktur', compact('struktur'));
    }

    /**
     * visiMisi
     *
     * @return void
     */
    public function visiMisi()
    {
        // get 1
        $visiMisi = VisiMisi::first();
        return view('pages.landingPage.visiMisi', compact('visiMisi'));
    }

    public function berita()
    {
        // get  data terbaru
        $berita = Berita::latest()->paginate('6');

        return view('pages.landingPage.berita', compact('berita'));
    }

    public function sambutan()
    {
        // get  data terbaru
        $sambutan = Sambutan::latest()->first();

        return view('pages.landingPage.sambutan', compact('sambutan'));
    }

    public function beritaDetail($id)
    {
        // get  data terbaru
        $berita = Berita::findOrFail($id);

        // get 3 data terbaru
        $terbaru = Berita::latest()->limit('3')->get();

        return view('pages.landingPage.berita-detail', compact('berita', 'terbaru'));
    }

    public function ppdb()
    {
         // get whychoose
         $ppdb = Ppdb::latest()->first();

         // get detail whychoose
         $ppdbdetail = PpdbDetail::where('ppdbs_id', $ppdb->id)->take('6')->get();

        return view('pages.landingPage.ppdb', compact('ppdb', 'ppdbdetail'));
    }

}
