
@extends('admin_layouts.default')
@section('contern1')
        

 
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Service List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th width="">About slogan</th>
                            <th width="">image</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                   	@foreach($aboutAllData as $aboutData)
                   	 	<tr class="odd gradeX">
                            <td>{{$aboutData->slogan}}</td>
                            <td><img src='{{ asset("$aboutData->image")}}' height="50px" width="70px"></td>
                            <td>
                            <a href="">Edit</a> 
                            || 
                            <a href="" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                            </td>
                        </tr>
                     @endforeach
                  
                        
                    </tbody>
                </table>
    
               </div>
            </div>
        </div>
@stop





