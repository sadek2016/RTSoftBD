
@extends('admin_layouts.default')
@section('contern1')
        

 <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Slider Update</h2>
                <div class="block sloginblock">   
                <p style="color: green; margin-left: 300px;">{{Session::get('message')}}</p>   

                

                <form action="/featureEdit" method="post" enctype="multipart/form-data">

                    <table class="form">
                    <tr>
                            <td>
                                <label> Website Slogan</label>
                            </td>
                            <td>
                                <input type="text" value="{{$featureDataById->site_slogan}}"  name="site_slogan" class="medium" />
                            </td>
                        </tr>	

                         <tr>
                            <td>
                                <label> Features Title</label>
                            </td>
                            <td>
                                <input type="text" value="{{$featureDataById->feature_title}}"  name="feature_title" class="medium" />
                            </td>
                        </tr>

                         <tr>
                            <td>
                                <label> Features Slogan</label>
                            </td>
                            <td>
                                <input type="text" value="{{$featureDataById->feature_slogan}}"  name="feature_slogan" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Feature Icon</label>
                            </td>
                            <td>
                                <select name="feature_icon">
                                	<option>{{$featureDataById->feature_icon}}</option>
                                	<option value="fa-bullhorn">fa-bullhorn</option>
                                	<option value="fa-comments">fa-comments</option>
                                	<option value="fa-cloud-download">fa-cloud-download</option>
                                	<option value="fa-leaf">fa-leaf</option>
                                	<option value="fa-cogs">fa-cogs</option>
                                	<option value="fa-heart">fa-heart</option>
                                	<option value="fa-film">fa-film</option>
                                </select>
                            </td>
                        </tr>
                      
						 <tr>
                         <td></td>
                            <td>
                            	{{csrf_field()}}
                            	<input type="hidden" name="id" value="{{$featureDataById->id}}">
                                <input type="submit" name="submit" Value="Update" />
                            	
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
        
@stop





