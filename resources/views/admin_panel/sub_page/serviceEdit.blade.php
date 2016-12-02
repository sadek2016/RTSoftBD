
@extends('admin_layouts.default')
@section('contern1')
        

 <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Workin Information Update</h2>
                <div class="block sloginblock">   
                <p style="color: green; margin-left: 300px;">{{Session::get('message')}}</p>   

                 <table style="float: right;">                   
                        
                         <tr>
                            <td>
                            <b> background Image</b>
                               <img src='{{ asset("$serviceDataById->icon")}}'  height="70px" width="100px"><br>
                            </td>
                        </tr>
                    </table>

                <form action="/serviceEdit" method="post" enctype="multipart/form-data">

                    <table class="form">
                    	
                        				
                        

						 <tr>
                            <td>
                                <label>Service Site Description </label>
                            </td>
                            <td>
                                <input type="text" value="{{$serviceDataById->service_slogan}}"  name="service_slogan" class="medium" />
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <label>Service Title</label>
                            </td>
                            <td>
                                <input type="text" value="{{$serviceDataById->title}}"  name="title" class="medium" />
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <label>Service Description</label>
                            </td>
                            <td>
                                <input type="text" value="{{$serviceDataById->slogan}}"  name="slogan" class="medium" />
                            </td>

                        </tr>

                        <tr>
                            <td>
                                <label>Service Icon Image</label>
                            </td>
                            <td>
                                <input type="file" value="{{$serviceDataById->icon}}"  name="icon" class="medium" />
                            </td>
                        </tr>
						 <tr>
                         <td></td>
                            <td>
                            	{{csrf_field()}}
                            	<input type="hidden" name="id" value="{{$serviceDataById->id}}">
                                <input type="submit" name="submit" Value="Update" />
                            	
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
@stop





