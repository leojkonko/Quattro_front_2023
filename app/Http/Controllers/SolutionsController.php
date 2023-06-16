<?php

namespace App\Http\Controllers;

use App\Services\SiteService;
use Ellite\PageCompany\Services\PageCompanyService;

class SolutionsController extends Controller
{
    public function index(SiteService $site, PageCompanyService $page)
    {
        $site->setAlternates('solutions')
            ->setTitle('Comparar')
            ->setBreadTitle('Comparar')
            ->pushBreadCrumb('Comparar')
            ->setDescriptionIfNotEmpty($page->getPage()->description)
            ->setKeywordsIfNotEmpty($page->getPage()->keywords);

        return view('front.pages.solutions', [
            'page' => $page->getPage(),
        ]);
    }
}
