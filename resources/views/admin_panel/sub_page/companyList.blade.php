
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
                  	@foreach($companyAllLink as $companyLink)
                        <tr class="odd gradeX">
                            
                            <td>{{$companyLink->name}}</td>
                            <td>{{$companyLink->link}}</td>
                            <td>
                            <a href="/companyLinkEdit/{{$companyLink->id}}">Edit</a> 
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





