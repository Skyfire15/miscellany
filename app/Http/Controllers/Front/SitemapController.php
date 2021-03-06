<?php
/**
 * Description of
 *
 * @author Jeremy Payne it@watson.ch
 * 21/10/2019
 */

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\SitemapService;

class SitemapController extends Controller
{
    /**
     * @var SitemapService
     */
    public $sitemapService;

    /**
     * SitemapController constructor.
     * @param SitemapService $sitemapService
     */
    public function __construct(SitemapService $sitemapService)
    {
        $this->sitemapService = $sitemapService;
    }

    /**
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function index()
    {
        $this->sitemapService
            ->locale(request()->get('locale', ''))
            ->page(request()->get('page', ''));

        $sitemaps = $this->sitemapService->sitemaps();
        $urls = $this->sitemapService->urls();

        $contents = view('front.sitemap', compact('urls', 'sitemaps'));
        return response($contents)->withHeaders([
            'Content-Type' => 'text/xml'
        ]);
    }
}
