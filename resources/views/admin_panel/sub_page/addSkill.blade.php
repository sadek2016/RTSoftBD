
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
                                <label>Skill Description</label>
                            </td>
                            <td>
                                <input type="text" value=""  name="skill_slogan" class="medium" />
                            </td>
                        </tr>	
                        <tr>
                            <td>
                                <label>Skill Category</label>
                            </td>
                            <td>
                                <input type="text" value=""  name="category" class="medium" />
                            </td>
                        </tr>				
                        <tr>
                            <td>
                                <label>Skill Pertancag</label>
                            </td>
                            <td>
                                <input type="text"  value=""  name="pertancag" class="medium" />
                            </td>
                        </tr>
						 <tr>
                            <td>
                                <label>Skill Color</label>
                            </td>
                            <td>
                                <select name="color">
                                	<option value="color1">Select pogragebar color</option>
                                	<option value="color1">Blue </option>
                                	<option value="color2">Green </option>
                                	<option value="color3">Yellow </option>
                                	<option value="color4">Red </option>
                                </select>
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





