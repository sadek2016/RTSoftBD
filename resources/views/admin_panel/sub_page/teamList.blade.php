
@extends('admin_layouts.default')
@section('contern1')
        

 
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Service List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th width="">Name</th>
                            <th width="">Title</th>
                            <th width="">Description</th>
                            <th width="">Image</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                   @foreach($teamAllData as $teamData)
                   	 	<tr class="odd gradeX">
                            <td>{{$teamData->name}}</td>
                            <td>{{$teamData->title}}</td>
                            <td>{{$teamData->description}}</td>
                            <td><img src='{{ asset("$teamData->image")}}' height="50px" width="70px"></td>
                            <td>
                             <a href="/teamView/{{$teamData->id}}">View</a> 
                            || 
                            <a href="/teamEdit/{{$teamData->id}}">Edit</a> 
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





