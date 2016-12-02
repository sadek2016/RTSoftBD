
@extends('admin_layouts.default')
@section('contern1')
        

 
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Features List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th width="">Site Description</th>
                            <th width="">Feature Title</th>
                            <th width="">Feature Description</th>
                            <th width="">Feature Icon</th>
                            <th width="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                  	@foreach($featureAllData as $featureData)
                        <tr class="odd gradeX">
                            
                            <td>{{$featureData->site_slogan}}</td>
                            <td>{{$featureData->feature_title}}</td>
                            <td>{{$featureData->feature_slogan}}</td>
                            <td>{{$featureData->feature_icon}}</td>
                            <td>
                            <a href="/featureEdit/{{$featureData->id}}">Edit</a> 
                            || 
                            <a href="featureDelete/{{$featureData->id}}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                            </td>
                        </tr>
                  
                   @endforeach
                        
                    </tbody>
                </table>
    
               </div>
            </div>
        </div>
@stop





