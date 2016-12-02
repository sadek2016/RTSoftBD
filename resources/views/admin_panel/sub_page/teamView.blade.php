
@extends('admin_layouts.default')
@section('contern1')
        

 <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Slider Update</h2>
                <div class="block sloginblock">   
                <p style="color: green; margin-left: 300px;">{{Session::get('message')}}</p>   

              

                

                    <table class="form">
                    <tr>
                            <td>
                                <label>Name:</label>
                            </td>
                            <td>
                                <input type="text" value="{{$teamData->name}}"  name="name" class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Title:</label>
                            </td>
                            <td>
                                <input type="text" value="{{$teamData->title}}"  name="title" class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Description:</label>
                            </td>
                            <td>
                                <input type="text" value="{{$teamData->description}}"  name="description" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Facebook:</label>
                            </td>
                            <td>
                                <input type="text" value="{{$teamData->facebook}}"  name="facebook" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Twitter:</label>
                            </td>
                            <td>
                                <input type="text" value="{{$teamData->twitter}}"  name="twitter" class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Google Plus:</label>
                            </td>
                            <td>
                                <input type="text" value="{{$teamData->googleplus}}"  name="googleplus" class="medium" />
                            </td>
                        </tr>

						 <tr>
                            <td>
                                <label>Image</label>
                            </td>
                            <td>
                                 <img src='{{ asset("$teamData->image")}}'  height="70px" width="70px"><br>
                            </td>
                        </tr>

						 <tr>
                         <td></td>
                            <td>
                            	{{csrf_field()}}
                            	
                               <a href="/teamList"><button class="">Back</button></a>
                            	
                            </td>
                        </tr>
                    </table>
                    
                </div>
            </div>
        </div>
@stop





