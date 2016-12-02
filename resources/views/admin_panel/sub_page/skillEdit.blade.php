
@extends('admin_layouts.default')
@section('contern1')
        

 <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Workin Information Update</h2>
                <div class="block sloginblock">   
                <p style="color: green; margin-left: 300px;">{{Session::get('message')}}</p>   

                

                <form action="/skillEdit" method="post" enctype="multipart/form-data">

                    <table class="form">
                    	
                        				
                        

						 <tr>
                            <td>
                                <label>Skill Description</label>
                            </td>
                            <td>
                                <input type="text" value="{{$skillDataById->skill_slogan}}"  name="skill_slogan" class="medium" />
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <label>Skill Category</label>
                            </td>
                            <td>
                                <select name="category">
                                	<option>Select pogragebar color</option>
                                	@foreach($allCagegory as $category)
                                	<option value="{{$category->category}}">{{$category->category}} </option>
                                	@endforeach
                                </select>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <label>Skill Pertancag</label>
                            </td>
                            <td>
                                <input type="text" value="{{$skillDataById->pertancag}}"  name="pertancag" class="medium" />
                            </td>

                        </tr>

                        <tr>
                        <td>
                        	<label>Skill Color</label>
                        </td>
                        	<td>
                                <select name="color">
                                	<option>Select pogragebar color</option>
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
                            	<input type="hidden" name="id" value="{{$skillDataById->id}}">
                                <input type="submit" name="submit" Value="Update" />
                            	
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
@stop





