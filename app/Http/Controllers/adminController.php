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


class adminController extends Controller
{
    public function index(){
    	return view('admin_panel.index');
    }

    public function social(){
    	$socialData= socialModel::find(1);
    	
    	return view('admin_panel.social',['socialData'=>$socialData]);
    }

    public function socialUpdate(Request $request){
    	$update=socialModel::find(1);
    	$update->facebook=$request->facebook;
    	$update->twitter=$request->twitter;
    	$update->linkedin=$request->linkedin;
    	$update->googleplus=$request->googleplus;
    	$update->skype=$request->skype;
    	$update->save();
    	return redirect('social');
    }


    public function titleslogan(){
    	$titleSloganData=titleSloganModel::find(1);
    	return view('admin_panel.titleslogan',['titleSloganData'=>$titleSloganData]);

    }


    public function titleSloganUpdate(Request $request){
    	$file_Extension=$request->logo->getClientOriginalExtension();
        $file_name="1".".".$file_Extension;
        $file_path='admin/img/logo/';
        $request->logo->move($file_path,$file_name);
        $update= titleSloganModel::find(1);
        $update->mobile=$request->mobile;
        $update->logo=$file_path.$file_name;
      	$update->save();
        return redirect('titleslogan')->with('message','Data Update Successfully..');
       // return back()->withInput()->with('message','Category Updated successfully.');
      
    }



    public function copyright(){
    	$copyrightData=copyrightModel::find(1);
    	return view('admin_panel.copyright',['copyrightData'=>$copyrightData]);
    }


    public function copyrightUpdate(Request $request){
    	$update=copyrightModel::find(1);
    	$update->copyright=$request->copyright;
    	$update->link=$request->link;
    	$update->others=$request->others;
    	$update->save();
    	return redirect('copyright');
    }



    public function slider(){
        return view('admin_panel.slider');
    }



    public function sliderInsert(Request $request){
        $bg_image_extension=$request->bg_image->getClientOriginalExtension();
        $bg_image_name=time().".".$bg_image_extension;
        $bg_image_path='admin/img/slider/bg/';

        $font_image=$request->font_image->getClientOriginalExtension();
        $font_image_name=time().".".$font_image;
        $font_image_path='admin/img/slider/font/';

        $request->bg_image->move($bg_image_path,$bg_image_name);
        $request->font_image->move($font_image_path,$font_image_name);
        
        $insert=new  sliderModel();
        $insert->bg_image=$bg_image_path.$bg_image_name;
        $insert->font_image=$font_image_path.$font_image_name;
        $insert->title=$request->title;
        $insert->slogan=$request->slogan;
        $insert->save();
         return redirect('slider')->with('message','Data Insert Successfully..');
    }

    public function sliderlist(){
        $slideralldata=sliderModel::all();

        return view('admin_panel.sliderlist',['slideralldata'=>$slideralldata]);
    }


    public function sliderpage($id){
        $sliderdata=sliderModel::find($id);
        return view('admin_panel.sub_page.sliderEdit',['sliderdata'=>$sliderdata]);
    }

    public function sliderEdit(Request $request){
        
        $bg_image_extension=$request->bg_image->getClientOriginalExtension();
        $bg_image_name=time().".".$bg_image_extension;
        $bg_image_path='admin/img/slider/bg/';

        $font_image=$request->font_image->getClientOriginalExtension();
        $font_image_name=time().".".$font_image;
        $font_image_path='admin/img/slider/font/';

        $request->bg_image->move($bg_image_path,$bg_image_name);
        $request->font_image->move($font_image_path,$font_image_name);

        $id=$request->id;
        $update=sliderModel::find($id);
        $update->bg_image=$bg_image_path.$bg_image_name;
        $update->font_image=$font_image_path.$font_image_name;
        $update->title=$request->title;
        $update->slogan=$request->slogan;
        $update->save();
        return back()->withInput()->with('message','Data Updated successfully.');

    }

    public function sliderDelete($id){
        $delete=sliderModel::find($id);
        $delete->delete();
        return back()->withInput();


    }

    public function addWorkPage(){
        return view('admin_panel.sub_page.addWork');
    }

    public function addWork(Request $request){
        $file_extention=$request->bgImage->getClientOriginalExtension();
        $image_name=time().".".$file_extention;
        $font_image_path='admin/img/work/';
        $request->bgImage->move($font_image_path,$image_name);

        $insert=new  recentWorkModel();
        $insert->siteDescription=$request->siteDescription;
        $insert->workTitle=$request->workTitle;
        $insert->workDescription=$request->workDescription;
        $insert->bgImage=$font_image_path.$image_name;
        $insert->save();
        return back()->withInput();
    }

    public function worklist(){
         $workall=recentWorkModel::all();
        return view('admin_panel.sub_page.worklist',['workall'=>$workall]);
    }

    public function workEditPage($id){
        $workData=recentWorkModel::find($id);
        return view('admin_panel.sub_page.workEdit',['workData'=>$workData]);
    }

    public function workEdit(Request $request){
       $id=$request->id;

        $file_extention=$request->bgImage->getClientOriginalExtension();
        $image_name=time().".".$file_extention;
        $font_image_path='admin/img/work/';
        $request->bgImage->move($font_image_path,$image_name);

        $update= recentWorkModel::find($id);
        $update->siteDescription=$request->siteDescription;
        $update->workTitle=$request->workTitle;
        $update->workDescription=$request->workDescription;
        $update->bgImage=$font_image_path.$image_name;
        $update->save();
        return back()->withInput();

    }

    public function workDelete($id){
         $delete= recentWorkModel::find($id);
         $delete->delete();
         return back()->withInput();
    }

    public function addServicePage(){
        return view('admin_panel.sub_page.addService');
    }

    public function addService(Request $request){

         $file_extention=$request->icon->getClientOriginalExtension();
        $image_name=time().".".$file_extention;
        $font_image_path='admin/img/service/';
        $request->icon->move($font_image_path,$image_name);

        $insert=new  serviceModel();
        $insert->service_slogan=$request->service_slogan;
        $insert->title=$request->title;
        $insert->slogan=$request->slogan;
        $insert->icon=$font_image_path.$image_name;
        $insert->save();
        return back()->withInput();

    }   

    public function serviceList(){
         $serviceAllData=serviceModel::all();
        return view('admin_panel.sub_page.serviceList',['serviceAllData'=>$serviceAllData]);
    }

    public function serviceEditPage($id){
        $serviceDataById=serviceModel::find($id);
        return view('admin_panel.sub_page.serviceEdit',['serviceDataById'=>$serviceDataById]);
    }

    public function serviceEdit(Request $request){
        $id=$request->id;
        echo $id;
        $file_extention=$request->icon->getClientOriginalExtension();
        $image_name=time().".".$file_extention;
        $font_image_path='admin/img/service/';
        $request->icon->move($font_image_path,$image_name);

        
        $update=serviceModel::find($id);
        $update->service_slogan=$request->service_slogan;
        $update->title=$request->title;
        $update->slogan=$request->slogan;
        $update->icon=$font_image_path.$image_name;
        $update->save();
        return back()->withInput();
        
       
    }

    public function serviceDelete($id){
         $delete=serviceModel::find($id);
         $delete->delete();
         return back()->withInput();
    }

    public function addSkillPage(){
        return view('admin_panel.sub_page.addSkill');
    }

    public function addSkill(Request $request){

        $insert=new  skillModel();
        $insert->skill_slogan=$request->skill_slogan;
        $insert->category=$request->category;
        $insert->pertancag=$request->pertancag;
        $insert->color=$request->color;
        $insert->save();
        return back()->withInput();
    }

    public function SkillList(){
         $skillAllData=  skillModel::all();
        return view('admin_panel.sub_page.SkillList',['skillAllData'=>$skillAllData]);
    }

    public function skillEditPage($id){
        $allCagegory=  skillModel::all();
        $skillDataById=  skillModel::find($id);
        return view('admin_panel.sub_page.skillEdit',[
            'allCagegory'=>$allCagegory,
            'skillDataById'=>$skillDataById
            ]);
    }

    public function skillEdit(Request $request){
        $id=$request->id;
        $update=skillModel::find($id);
        $update->skill_slogan=$request->skill_slogan;
        $update->category=$request->category;
        $update->pertancag=$request->pertancag;
        $update->color=$request->color;
        $update->save();
        return back()->withInput();
    }

    public function skillDelete($id){
         $delete=skillModel::find($id);
         $delete->delete();
          return back()->withInput();
    }

    public function addlikePage(){
        return view('admin_panel.sub_page.addlike');
    }

    public function addlike(Request $request){
        $insert=new  likeModel();
        $insert->title=$request->title;
        $insert->slogan=$request->slogan;
        $insert->save();
        return back()->withInput();
    }


    public function likeList(){
         $likeAllData=  likeModel::all();
        return view('admin_panel.sub_page.likeList',['likeAllData'=>$likeAllData]);
    }

    public function likeEditPage($id){
         $likeDataById=  likeModel::find($id);
        return view('admin_panel.sub_page.likeEdit',['likeDataById'=>$likeDataById]);
    }

    public function likeEdit(Request $request){
        $id=$request->id;
        $update=  likeModel::find($id);
        $update->title=$request->title;
        $update->slogan=$request->slogan;
        $update->save();
        return back()->withInput();
    }

    public function addCompanyLinkPage(){
        return view('admin_panel.sub_page.addCompanyLink');
    }

    public function addCompanyLink(Request $request){
        $insert=new  companyModel();
        $insert->name=$request->name;
        $insert->link=$request->link;
        $insert->save();
        return back()->withInput();
    }


    public function companyList(){
        $companyAllLink=companyModel::all();
        return view('admin_panel.sub_page.companyList',['companyAllLink'=>$companyAllLink]);
    }

    public function companyLinkEditPage($id){

        //return view('admin_panel.sub_page.companyLinkEdit');

         $companyLinkById=companyModel::find($id);
        return view('admin_panel.sub_page.companyLinkEdit',['companyLinkById'=>$companyLinkById]);
    }

    public function companyLinkEdit(Request $request){
        $id=$request->id;
        $update=  companyModel::find($id);
        $update->name=$request->name;
        $update->link=$request->link;
        $update->save();
        return back()->withInput();
    }


    public function addSupportLinkPage(){
       return view('admin_panel.sub_page.addSupportLink');
    }

    public function addSupportLink(Request $request){
        $insert=new supportModel();
        $insert->name=$request->name;
        $insert->link=$request->link;
        $insert->save();
        return back()->withInput();
    }

    public function supportList(){
         $supprtAllLink= supportModel::all();
        return view('admin_panel.sub_page.supportList',['supprtAllLink'=>$supprtAllLink]);
    }

    public function supportEditPage($id){
         $supportLinkById=supportModel::find($id);
        return view('admin_panel.sub_page.supportEdit',['supportLinkById'=>$supportLinkById]);
    }



    public function supportLinkEdit(Request $request){
        $id=$request->id;
        $update=  supportModel::find($id);
        $update->name=$request->name;
        $update->link=$request->link;
        $update->save();
        return back()->withInput();
    }


    public function supportDelete($id){
        $delete=  supportModel::find($id);
        $delete->delete();
        return back()->withInput();
    }
    public function addDeveloperPage(){
        return view('admin_panel.sub_page.addDeveloper');
    }

    public function addDeveloper(Request $request){
        $insert=new developerModel();
        $insert->name=$request->name;
        $insert->link=$request->link;
        $insert->save();
        return back()->withInput();
    }

    public function developertList(){
         $DeveloperAllLink= developerModel::all();
        return view('admin_panel.sub_page.developertList',['DeveloperAllLink'=>$DeveloperAllLink]);
    }
    public function developerEdit($id){
         $developerById= developerModel::find($id);
        return view('admin_panel.sub_page.developerEdit',['developerById'=>$developerById]);
    }

    public function developerEditPage(Request $request){
        $id=$request->id;
        $update= developerModel::find($id);
        $update->name=$request->name;
        $update->link=$request->link;
        $update->save();
         return back()->withInput();
    }

    public function developerDelete($id){
        $delete=  developerModel::find($id);
        $delete->delete();
        return back()->withInput();
    }

    public function addPartnerPage(){
        return view('admin_panel.sub_page.addPartner');
    }

    public function addPartner(Request $request){
        $insert=new partnerModel();
        $insert->name=$request->name;
        $insert->link=$request->link;
        $insert->save();
        return back()->withInput();
    }

    public function partnerList(){
         $partnerAllLink= partnerModel::all();
        return view('admin_panel.sub_page.partnerList',['partnerAllLink'=>$partnerAllLink]);
    }

    public function partnerEditePage($id){
       
        $partnerDataById= partnerModel::find($id);
        return view('admin_panel.sub_page.partnerEdite',['partnerDataById'=>$partnerDataById]);
    }

    public function partnerEdite(Request $request){
         $id=$request->id;
        $update=  partnerModel::find($id);
        $update->name=$request->name;
        $update->link=$request->link;
        $update->save();
        return back()->withInput();
    }
    public function partnerDelete($id){
        $delete=  partnerModel::find($id);
        $delete->delete();
        return back()->withInput();
    }
    public function websiteNamePage(){
        $websiteName= websiteModel::find(1);
       return view('admin_panel.sub_page.websiteName',['websiteName'=>$websiteName]);
    }
    public function companyEdit(Request $request){
        $update= websiteModel::find(1);
        $update->name=$request->name;
        $update->save();
        return back()->withInput();
    }

    //Page Information
    public function addAboutPage(){
        return view('admin_panel.sub_page.addAbout');
    }

    public function addAbout(Request $request){
        $file_extention=$request->image->getClientOriginalExtension();
        $image_name=time().".".$file_extention;
        $font_image_path='admin/img/about/';
        
        $request->image->move($font_image_path,$image_name);
        $insert=new  aboutModel();
        $insert->slogan=$request->slogan;
        $insert->image=$font_image_path.$image_name;
        $insert->save();
        return back()->withInput();
    }

    public function aboutList(){
        $aboutAllData= aboutModel::all();
        return view('admin_panel.sub_page.aboutList',['aboutAllData'=>$aboutAllData]);
    }

    public function addFeaturePage(){
       return view('admin_panel.sub_page.addFeature');
    }
    public function addFeature(Request $request){
        $insert=new featureModel();
        $insert->site_slogan=$request->site_slogan;
        $insert->feature_title=$request->feature_title;
        $insert->feature_slogan=$request->feature_slogan;
        $insert->feature_icon=$request->feature_icon;
        $insert->save();
        return back()->withInput();
    }
    public function featureList(){
        $featureAllData=featureModel::all();
        return view('admin_panel.sub_page.featureList',['featureAllData'=>$featureAllData]);
    }

    public function featureEditPage($id){
        $featureDataById=featureModel::find($id);
        return view('admin_panel.sub_page.featureEdit',['featureDataById'=>$featureDataById]);
    }
   
   public function featureEdit(Request $request){
        $id=$request->id;

        $update= featureModel::find($id);
        $update->site_slogan=$request->site_slogan;
        $update->feature_title=$request->feature_title;
        $update->feature_slogan=$request->feature_slogan;
        $update->feature_icon=$request->feature_icon;
        $update->save();
        return back()->withInput();
   }

   public function featureDelete($id){
    $delete=featureModel::find($id);
    $delete->delete();
    return back()->withInput();
   }

   public function addTeamPage(){
    return view('admin_panel.sub_page.addTeam');
   }
   public function addTeam(Request $request){
        $file_extention=$request->image->getClientOriginalExtension();
        $image_name=time().".".$file_extention;
        $font_image_path='admin/img/team/';
        
        $request->image->move($font_image_path,$image_name);

        $insert=new  teamModel();
        $insert->name=$request->name;
        $insert->title=$request->title;
        $insert->description=$request->description;
        $insert->facebook=$request->facebook;
        $insert->twitter=$request->twitter;
        $insert->googleplus=$request->googleplus;
        $insert->image=$font_image_path.$image_name;
        $insert->save();
        return back()->withInput();
   }


   public function teamList(){
    $teamAllData=  teamModel::all();
    return view('admin_panel.sub_page.teamList',['teamAllData'=>$teamAllData]);
   }

   public function teamEditPage($id){
    $teamData=  teamModel::find($id);
    return view('admin_panel.sub_page.teamEdit',['teamData'=>$teamData]);
   }

   public function teamEdit(Request $request){
         $file_extention=$request->image->getClientOriginalExtension();
        $image_name=time().".".$file_extention;
        $font_image_path='admin/img/team/';
        
        $request->image->move($font_image_path,$image_name);
        $id=$request->id;
        $update=  teamModel::find($id);
        $update->name=$request->name;
        $update->title=$request->title;
        $update->description=$request->description;
        $update->facebook=$request->facebook;
        $update->twitter=$request->twitter;
        $update->googleplus=$request->googleplus;
        $update->image=$font_image_path.$image_name;
        $update->save();
        return back()->withInput();
   }

   public function teamView($id){
    $teamData=  teamModel::find($id);
    return view('admin_panel.sub_page.teamView',['teamData'=>$teamData]);
   }


   public function inboxinsert(Request $request){
    $insert=new contactModel();
    $insert->name=$request->name;
    $insert->email=$request->email;
    $insert->address=$request->address;
    $insert->message=$request->message;
    $insert->save();
    return back()->withInput();

   }

   public function inbox(){

        $messageAll=contactModel::where('status', 0)
               ->orderBy('id', 'desc')
               ->get();
       
        return view('admin_panel.inbox',['messageAll'=>$messageAll]);
   }

   public function websiteDescription(){
        $siteData=siteDescriptionModel::find(1);
        return  view('admin_panel.sub_page.websiteDescription',['siteData'=>$siteData]);
   }

   public function websiteDescriptionEdit(Request $request){
        $update=siteDescriptionModel::find(1);
        $update->feature=$request->feature;
        $update->work=$request->work;
        $update->service=$request->service;
        $update->like=$request->like;
        $update->about=$request->about;
        $update->skill=$request->skill;
        $update->team=$request->team;
        $update->client_say=$request->client_say;
        $update->portfolio=$request->portfolio;
        $update->reach_us=$request->reach_us;
        $update->message=$request->message;
        $update->save();
        return back()->withInput();
   }























}
