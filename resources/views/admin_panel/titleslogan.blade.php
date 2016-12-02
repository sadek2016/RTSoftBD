
@extends('admin_layouts.default')
@section('contern1')
        

 <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Site Mobile Number and Logo</h2>
                <div class="block sloginblock">   
                <p style="color: green; margin-left: 300px;">{{Session::get('message')}}</p>            
                <form action="" method="post" enctype="multipart/form-data">

                    <table class="form">					
                        <tr>
                            <td>
                                <label>Website Mobile</label>
                            </td>
                            <td>
                                <input type="text" name="mobile" value="{{$titleSloganData->mobile}}"  name="title" class="medium" />
                            </td>
                            <td rowspan="2" style="float: left;">
                                <img src='{{ asset("$titleSloganData->logo")}}' height="100px" width="100px">
                            </td>
                        </tr>
						 <tr>
                            <td>
                                <label>Website Logo</label>
                            </td>
                            <td>
                                <input type="file"  name="logo" class="medium" />
                            </td>
                        </tr>

						 <tr>
                            <td>
                            </td>
                            <td>
                            	{{csrf_field()}}
                                <input type="submit" name="submit" Value="Update" />
                            	
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
@stop





