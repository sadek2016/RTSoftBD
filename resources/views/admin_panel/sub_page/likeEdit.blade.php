
@extends('admin_layouts.default')
@section('contern1')
        

 <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Slider Update</h2>
                <div class="block sloginblock">   
                <p style="color: green; margin-left: 300px;">{{Session::get('message')}}</p>   

                

                <form action="/likeEdit" method="post" enctype="multipart/form-data">

                    <table class="form">
                    <tr>
                            <td>
                                <label>Like Title</label>
                            </td>
                            <td>
                                <input type="text" value="{{$likeDataById->title}}"  name="title" class="medium" />
                            </td>
                        </tr>	
                        <tr>
                            <td>
                                <label>Like Description</label>
                            </td>
                            <td>
                                <input type="text" value="{{$likeDataById->slogan}}"  name="slogan" class="medium" />
                            </td>
                        </tr>

						 <tr>
                         <td></td>
                            <td>
                            	{{csrf_field()}}
                            	<input type="hidden" name="id" value="{{$likeDataById->id}}">
                                <input type="submit" name="submit" Value="Update" />
                            	
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
@stop





