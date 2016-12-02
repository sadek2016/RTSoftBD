
@extends('admin_layouts.default')
@section('contern1')
        

 <div class="grid_10">
		
            <div class="box round first grid">
                <h2>New Service Add</h2>
                <div class="block sloginblock">   
                <p style="color: green; margin-left: 300px;">{{Session::get('message')}}</p>   

                

                <form action="" method="post" enctype="multipart/form-data">

                    <table class="form">
                    <tr>
                            <td>
                                <label>Service Description</label>
                            </td>
                            <td>
                                <input type="text" value=""  name="service_slogan" class="medium" />
                            </td>
                        </tr>	
                        <tr>
                            <td>
                                <label>Service Title</label>
                            </td>
                            <td>
                                <input type="text" value=""  name="title" class="medium" />
                            </td>
                        </tr>				
                        <tr>
                            <td>
                                <label>Service Description</label>
                            </td>
                            <td>
                                <input type="text"  value=""  name="slogan" class="medium" />
                            </td>
                        </tr>
						 <tr>
                            <td>
                                <label>Service Icon Image</label>
                            </td>
                            <td>
                                <input type="file"  name="icon" class="medium" />
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





