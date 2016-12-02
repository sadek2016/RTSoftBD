
@extends('admin_layouts.default')
@section('contern1')
        

 
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Service List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th width="15%">Service Site Description</th>
                            <th width="15%">Service Title </th>
                            <th width="15%">Service Description</th>
                            <th width="15%">Icon</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($serviceAllData as $serviceData)
                   	 	<tr class="odd gradeX">
                            <td>{{$serviceData->service_slogan}}</td>
                            <td>{{$serviceData->title}}</td>
                            <td>{{$serviceData->slogan}}</td>
                            <td><img src='{{ asset("$serviceData->icon")}}' height="50px" width="70px"></td>
                            <td>
                            <a href="serviceEdit/{{$serviceData->id}}">Edit</a> 
                            || 
                            <a href="serviceDelete/{{$serviceData->id}}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                        
                    </tbody>
                </table>
    
               </div>
            </div>
        </div>
@stop





