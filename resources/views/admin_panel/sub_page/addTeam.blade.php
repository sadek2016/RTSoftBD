
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
                                <label>Name:</label>
                            </td>
                            <td>
                                <input type="text" value=""  name="name" class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Title:</label>
                            </td>
                            <td>
                                <input type="text" value=""  name="title" class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Description:</label>
                            </td>
                            <td>
                                <input type="text" value=""  name="description" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Facebook:</label>
                            </td>
                            <td>
                                <input type="text" value=""  name="facebook" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Twitter:</label>
                            </td>
                            <td>
                                <input type="text" value=""  name="twitter" class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Google Plus:</label>
                            </td>
                            <td>
                                <input type="text" value=""  name="googleplus" class="medium" />
                            </td>
                        </tr>

						 <tr>
                            <td>
                                <label>Image</label>
                            </td>
                            <td>
                                <input type="file"  name="image" class="medium" />
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





