<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 20.12.2016
 * Time: 16:33
 */

namespace App\Http\Controllers;

use App\Http\Middleware\VerifiedDomain;

class SitesPublicController extends Controller {

    public function __construct(){
        $this->middleware('domain.verify');
    }

    public function index(VerifiedDomain $verified_domain){
        $Site = $verified_domain->getSite();
        $Page = $Site->getPageByRequest();//This method gets the url segments then selects the proper page

        if(!$Page){ throw new NotFoundHttpException; }

        return $Page->content;
    }

}