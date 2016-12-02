
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
                               <img src='{{ asset("$workData->bgImage")}}'  height="100px" width="170px"><br>
                            </td>
                        </tr>
                    </table>

                <form action="/workEdit" method="post" enctype="multipart/form-data">

                    <table class="form">
                    	
                        				
                        <tr>
                            <td>
                                <label>Site Description</label>
                            </td>
                            <td>
                                <input type="text"  value="{{$workData->siteDescription}}" name="siteDescription" class="siteDescription"   class="medium" />
                            </td>
                        </tr>

						 <tr>
                            <td>
                                <label>Work Title</label>
                            </td>
                            <td>
                                <input type="text" value="{{$workData->workTitle}}"  name="workTitle" class="medium" />
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <label>Work Description</label>
                            </td>
                            <td>
                                <input type="text" value="{{$workData->workDescription}}"  name="workDescription" class="medium" />
                            </td>

                        </tr>

                        <tr>
                            <td>
                                <label>Background Image</label>
                            </td>
                            <td>
                                <input type="file" value=""  name="bgImage" class="medium" />
                            </td>
                        </tr>

						 <tr>
                         <td></td>
                            <td>
                            	{{csrf_field()}}
                            	<input type="hidden" name="id" value="{{$workData->id}}">
                                <input type="submit" name="submit" Value="Update" />
                            	
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
@stop





