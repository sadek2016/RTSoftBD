
@extends('admin_layouts.default')
@section('contern1')
        
 
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Like List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th width="15%">Like Title</th>
                            <th width="15%">Like Description </th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($likeAllData as $likeData)
                        <tr class="odd gradeX">
                            <td>{{$likeData->title}}</td>
                            <td>{{$likeData->slogan}}</td>
                            <td>
                            <a href="likeEdit/{{$likeData->id}}">Edit</a> 
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





