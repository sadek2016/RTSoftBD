
@extends('admin_layouts.default')
@section('contern1')
        

 
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Slider List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th width="15%">Skill Description</th>
                            <th width="15%">Skill Category </th>
                            <th width="15%">Skill Pertancag</th>
                            <th width="15%">Skill Color</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($skillAllData as $skillData)
                        <tr class="odd gradeX">
                            <td>{{$skillData->skill_slogan}}</td>
                            <td>{{$skillData->category}}</td>
                            <td>{{$skillData->pertancag}}</td>
                            <td>{{$skillData->color}}</td>
                            <td>
                            <a href="skillEdit/{{$skillData->id}}">Edit</a> 
                            || 
                            <a href="skillDelete/{{$skillData->id}}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                            </td>
                        </tr>
                     @endforeach
                        
                    </tbody>
                </table>
    
               </div>
            </div>
        </div>
@stop





