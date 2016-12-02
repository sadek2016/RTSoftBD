
@extends('admin_layouts.default')
@section('contern1')
        

 
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Slider List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th width="15%">Site Description</th>
                            <th width="15%">Work Title </th>
                            <th width="15%">Work Description</th>
                            <th width="15%">Image</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($workall as $workdata)
                        <tr class="odd gradeX">
                            <td>{{$workdata->siteDescription}}</td>
                            <td>{{$workdata->workTitle}}</td>
                            <td>{{$workdata->workDescription}}</td>
                            <td><img src='{{ asset("$workdata->bgImage")}}' height="50px" width="70px"></td>
                            <td>
                            <a href="/workEdit/{{$workdata->id}}">Edit</a> 
                            || 
                            <a href="/workDelete/{{$workdata->id}}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                            </td>
                        </tr>
                      
                    @endforeach
                        
                    </tbody>
                </table>
    
               </div>
            </div>
        </div>
@stop





