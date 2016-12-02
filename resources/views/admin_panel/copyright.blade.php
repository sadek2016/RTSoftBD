




@extends('admin_layouts.default')
@section('contern1')
        
<div class="grid_10">

    <div class="box round first grid">
        <h2>Update Copyright Text</h2>
        <div class="block copyblock"> 
         <form action="copyright" method="post">
            <table class="form">					
                <tr>
                	<td>CopyRight Name:</td>
                	<td> : </td>
                    <td>
                        <input type="text" value="{{$copyrightData->copyright}}" name="copyright" class="large" />
                    </td>
                </tr>
                <tr>
                	<td>Web link: </td>
                	<td> : </td>
                    <td>
                        <input type="text" value="{{$copyrightData->link}}" name="link" class="large" />
                    </td>
                </tr>

                <tr>
                	<td>Other text : </td>
                	<td> : </td>
                    <td>
                        <input type="text" value="{{$copyrightData->others}}" name="others" class="large" />
                    </td>
                </tr>
				
				 <tr> 
				 <td></td>
                    <td colspan="2">
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
