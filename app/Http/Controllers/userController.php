<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\socialModel;
use App\titleSloganModel;
use App\copyrightModel;
use App\sliderModel;
use App\recentWorkModel;
use App\serviceModel;
use App\skillModel;
use App\likeModel;
use App\companyModel;
use App\supportModel;
use App\developerModel;
use App\partnerModel;
use App\websiteModel;
use App\aboutModel;
use App\featureModel;
use App\teamModel;
use App\contactModel;
use App\siteDescriptionModel;

class userController extends Controller
{
    public function index(){
        $socialData=socialModel::find(1);
        $Title_logo=titleSloganModel::find(1);
        $slitebarAllData=sliderModel::all();
        $siteDescription=siteDescriptionModel::find(1);
        $featureAllData=featureModel::all();
        $reacentWork=recentWorkModel::all();
        $serviceAllData=serviceModel::all();
        $skillAllData=skillModel::all();
        $likeAllData=likeModel::all();
        $companyLinkData=companyModel::all();
        $supportLinkData=supportModel::all();
        $developerLinkData=developerModel::all();
        $partnerLinkData=partnerModel::all();
        $copyrightData=copyrightModel::find(1);
    	 return view('index',[
            'socialData'=>$socialData,
            'Title_logo'=>$Title_logo,
            'slitebarAllData'=>$slitebarAllData,
            'siteDescription'=>$siteDescription,
            'featureAllData'=>$featureAllData,
            'reacentWork'=>$reacentWork,
            'serviceAllData'=>$serviceAllData,
            'skillAllData'=>$skillAllData,
            'likeAllData'=>$likeAllData,
            'companyLinkData'=>$companyLinkData,
            'supportLinkData'=>$supportLinkData,
            'developerLinkData'=>$developerLinkData,
            'partnerLinkData'=>$partnerLinkData,
            'copyrightData'=>$copyrightData,
            ]);
    }

    public function services(){
        $socialData=socialModel::find(1);
        $Title_logo=titleSloganModel::find(1);
        $companyLinkData=companyModel::all();
        $supportLinkData=supportModel::all();
        $developerLinkData=developerModel::all();
        $partnerLinkData=partnerModel::all();
        $copyrightData=copyrightModel::find(1);
    	return view('services',[
            'socialData'=>$socialData,
            'Title_logo'=>$Title_logo,
            'companyLinkData'=>$companyLinkData,
            'supportLinkData'=>$supportLinkData,
            'developerLinkData'=>$developerLinkData,
            'partnerLinkData'=>$partnerLinkData,
            'copyrightData'=>$copyrightData,
            ]);
    }

    public function aboutus(){
        $socialData=socialModel::find(1);
        $Title_logo=titleSloganModel::find(1);
        $companyLinkData=companyModel::all();
        $supportLinkData=supportModel::all();
        $developerLinkData=developerModel::all();
        $partnerLinkData=partnerModel::all();
        $copyrightData=copyrightModel::find(1);

    	return view('about-us',[
            'socialData'=>$socialData,
            'Title_logo'=>$Title_logo,
            'companyLinkData'=>$companyLinkData,
            'supportLinkData'=>$supportLinkData,
            'developerLinkData'=>$developerLinkData,
            'partnerLinkData'=>$partnerLinkData,
            'copyrightData'=>$copyrightData,
            ]);
    }
    public function contactus(){
         $socialData=socialModel::find(1);
        $Title_logo=titleSloganModel::find(1);
        $companyLinkData=companyModel::all();
        $supportLinkData=supportModel::all();
        $developerLinkData=developerModel::all();
        $partnerLinkData=partnerModel::all();
        $copyrightData=copyrightModel::find(1);
    	return view('contact-us',[
            'socialData'=>$socialData,
            'Title_logo'=>$Title_logo,
            'companyLinkData'=>$companyLinkData,
            'supportLinkData'=>$supportLinkData,
            'developerLinkData'=>$developerLinkData,
            'partnerLinkData'=>$partnerLinkData,
            'copyrightData'=>$copyrightData,
            ]);
    }
    public function portfolio(){
        $socialData=socialModel::find(1);
        $Title_logo=titleSloganModel::find(1);
        $companyLinkData=companyModel::all();
        $supportLinkData=supportModel::all();
        $developerLinkData=developerModel::all();
        $partnerLinkData=partnerModel::all();
        $copyrightData=copyrightModel::find(1);
    	return view('portfolio',[
            'socialData'=>$socialData,
            'Title_logo'=>$Title_logo,
            'companyLinkData'=>$companyLinkData,
            'supportLinkData'=>$supportLinkData,
            'developerLinkData'=>$developerLinkData,
            'partnerLinkData'=>$partnerLinkData,
            'copyrightData'=>$copyrightData,
            ]);
    }

















}
