
@extends('admin_layouts.default')
@section('contern1')
        

 <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Company Link Update</h2>
                <div class="block sloginblock">   
                <p style="color: green; margin-left: 300px;">{{Session::get('message')}}</p>   


                <form action="/partnerEdite" method="post" enctype="multipart/form-data">

                    <table class="form">

                    <tr>
                            <td>
                                <label> Partner Name</label>
                            </td>
                            <td>
                                <input type="text" value="{{$partnerDataById->name}}"  name="name" class="medium" />
                            </td>
                        </tr>	
                      
                      <tr>
                            <td>
                                <label> Partner Like</label>
                            </td>
                            <td>
                                <input type="text" value="{{$partnerDataById->link}}"  name="link" class="medium" />
                            </td>
                        </tr>   
						 <tr>
                         <td></td>
                            <td>
                            	{{csrf_field()}}
                            	<input type="hidden" value="{{$partnerDataById->id}}" name="id">
                                <input type="submit" name="submit" Value="Update" />
                            	
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
        
@stop





