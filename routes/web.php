<?php



//User Panel.....

Route::get('/','userController@index');
Route::get('/about-us','userController@aboutus');
Route::get('/services','userController@services');
Route::get('/portfolio','userController@portfolio');
Route::get('/contact-us','userController@contactus');



//Admin Panel.....

Route::get('/home','adminController@index');
Route::get('/social','adminController@social');
Route::post('/socialUpdate','adminController@socialUpdate');
Route::get('/titleslogan','adminController@titleslogan');
Route::post('/titleslogan','adminController@titleSloganUpdate');
Route::get('/copyright','adminController@copyright');
Route::post('/copyright','adminController@copyrightUpdate');
Route::get('/slider','adminController@slider');
Route::post('/slider','adminController@sliderInsert');
Route::get('/sliderlist','adminController@sliderlist');
Route::get('/sliderEdit/{id}','adminController@sliderpage');
Route::post('/sliderEdit','adminController@sliderEdit');
Route::get('/sliderDelete/{id}','adminController@sliderDelete');
Route::get('/addWork','adminController@addWorkPage');
Route::post('/addWork','adminController@addWork');
Route::get('/worklist','adminController@worklist');
Route::get('/workEdit/{id}','adminController@workEditPage');
Route::post('/workEdit/','adminController@workEdit');
Route::get('/workDelete/{id}','adminController@workDelete');
Route::get('/addService','adminController@addServicePage');
Route::post('/addService','adminController@addService');
Route::get('/serviceList','adminController@serviceList');
Route::get('/serviceEdit/{id}','adminController@serviceEditPage');
Route::post('/serviceEdit','adminController@serviceEdit');
Route::get('/serviceDelete/{id}','adminController@serviceDelete');
Route::get('/addSkill','adminController@addSkillPage');
Route::post('/addSkill','adminController@addSkill');
Route::get('/SkillList','adminController@SkillList');
Route::get('/skillEdit/{id}','adminController@skillEditPage');
Route::post('/skillEdit','adminController@skillEdit');
Route::get('/skillDelete/{id}','adminController@skillDelete');
Route::get('/addlike','adminController@addlikePage');
Route::post('/addlike','adminController@addlike');
Route::get('/likeList','adminController@likeList');
Route::get('/likeEdit/{id}','adminController@likeEditPage');
Route::post('/likeEdit','adminController@likeEdit');
Route::get('/addCompanyLink','adminController@addCompanyLinkPage');
Route::post('/addCompanyLink','adminController@addCompanyLink');
Route::get('/companyList','adminController@companyList');
Route::get('/companyLinkEdit/{id}','adminController@companyLinkEditPage');
Route::post('/companyLinkEdit','adminController@companyLinkEdit');
Route::get('/addSupportLink','adminController@addSupportLinkPage');
Route::post('/addSupportLink','adminController@addSupportLink');
Route::get('/supportList','adminController@supportList');
Route::get('/supportEdit/{id}','adminController@supportEditPage');
Route::post('/supportLinkEdit','adminController@supportLinkEdit');
Route::get('/supportDelete/{id}','adminController@supportDelete');
Route::get('/addDeveloper','adminController@addDeveloperPage');
Route::post('/addDeveloper','adminController@addDeveloper');
Route::get('/developertList','adminController@developertList');
Route::get('/developerDelete/{id}','adminController@developerDelete');
Route::get('/addPartner','adminController@addPartnerPage');
Route::post('/addPartner','adminController@addPartner');
Route::get('/partnerList','adminController@partnerList');
Route::get('/partnerEdite/{id}','adminController@partnerEditePage');
Route::post('/partnerEdite','adminController@partnerEdite');
Route::get('/partnerDelete/{id}','adminController@partnerDelete');
Route::get('/websiteName','adminController@websiteNamePage');
Route::post('/companyEdit','adminController@companyEdit');
//Route::get('/websiteName','adminController@websiteName');
//pages Information

Route::get('/addAbout','adminController@addAboutPage');
Route::post('/addAbout','adminController@addAbout');
Route::get('/aboutList','adminController@aboutList');
Route::get('/addFeature','adminController@addFeaturePage');
Route::post('/addFeature','adminController@addFeature');
Route::get('/featureList','adminController@featureList');
Route::get('/featureEdit/{id}','adminController@featureEditPage');
Route::post('/featureEdit','adminController@featureEdit');
Route::get('/featureDelete/{id}','adminController@featureDelete');
Route::get('/addTeam','adminController@addTeamPage');
Route::post('/addTeam','adminController@addTeam');
Route::get('/teamList','adminController@teamList');
Route::get('/teamEdit/{id}','adminController@teamEditPage');
Route::post('/teamEdit','adminController@teamEdit');
Route::get('/teamView/{id}','adminController@teamView');
Route::get('/inbox','adminController@inbox');

Route::post('/inbox','adminController@inboxinsert');


Route::get('/websiteDescription','adminController@websiteDescription');
Route::post('/websiteDescription','adminController@websiteDescriptionEdit');
Route::get('/developerEdit/{id}','adminController@developerEdit');
Route::post('/developerEdit','adminController@developerEditPage');


