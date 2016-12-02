
@extends('admin_layouts.default')
@section('contern1')
        

 
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Slider List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th width="">Developer Name </th>
                            <th width="">Developer Link </th>

                            <th width="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($DeveloperAllLink as $developerLink)
                  
                        <tr class="odd gradeX">
                            
                            <td>{{$developerLink->name}}</td>
                            <td>{{$developerLink->link}}</td>
                            <td>
                            <a href="/developerEdit/{{$developerLink->id}}">Edit</a> 
                            || 
                            <a href="developerDelete/{{$developerLink->id}}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                   
                        
                    </tbody>
                </table>
    
               </div>
            </div>
        </div>
@stop





