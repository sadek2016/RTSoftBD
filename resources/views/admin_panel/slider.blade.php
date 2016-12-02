
@extends('admin_layouts.default')
@section('contern1')
        

 <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Slider Update</h2>
                <div class="block sloginblock">   
                <p style="color: green; margin-left: 300px;">{{Session::get('message')}}</p>   

                

                <form action="" method="post" enctype="multipart/form-data">

                    <table class="form">
                    <tr>
                            <td>
                                <label>Backgroudn Image</label>
                            </td>
                            <td>
                                <input type="file" value=""  name="bg_image" class="medium" />
                            </td>
                        </tr>	
                        <tr>
                            <td>
                                <label>font Image</label>
                            </td>
                            <td>
                                <input type="file" value=""  name="font_image" class="medium" />
                            </td>
                        </tr>				
                        <tr>
                            <td>
                                <label>Your Title</label>
                            </td>
                            <td>
                                <input type="text"  value=""  name="title" class="medium" />
                            </td>
                        </tr>
						 <tr>
                            <td>
                                <label>Your Slogan</label>
                            </td>
                            <td>
                                <input type="text"  name="slogan" class="medium" />
                            </td>

                        </tr>

						 <tr>
                         <td></td>
                            <td>
                            	{{csrf_field()}}
                                <input type="submit" name="submit" Value="Insert" />
                            	
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
@stop





