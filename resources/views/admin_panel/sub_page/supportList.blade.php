
@extends('admin_layouts.default')
@section('contern1')
        

 
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Slider List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th width=""> Name</th>
                            <th width=""> Link</th>

                            <th width="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                  @foreach($supprtAllLink as $supprLink)
                        <tr class="odd gradeX">
                            
                            <td>{{$supprLink->name}}</td>
                            <td>{{$supprLink->link}}</td>
                            <td>
                            <a href="supportEdit/{{$supprLink->id}}">Edit</a> 
                            || 
                            <a href="supportDelete/{{$supprLink->id}}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                            </td>
                        </tr>
                  @endforeach
                        
                    </tbody>
                </table>
    
               </div>
            </div>
        </div>
@stop





