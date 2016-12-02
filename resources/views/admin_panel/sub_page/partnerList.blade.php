
@extends('admin_layouts.default')
@section('contern1')
        

 
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Partner Link List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th width="">Partner Name </th>
                            <th width="">Partner Link </th>

                            <th width="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($partnerAllLink as $partnerLink)
                  
                        <tr class="odd gradeX">
                            
                            <td>{{$partnerLink->name}}</td>
                            <td>{{$partnerLink->link}}</td>
                            <td>
                            <a href="/partnerEdite/{{$partnerLink->id}}">Edit</a> 
                            || 
                            <a href="/partnerDelete/{{$partnerLink->id}}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                   
                        
                    </tbody>
                </table>
    
               </div>
            </div>
        </div>
@stop





