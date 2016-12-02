@extends('admin_layouts.default')
@section('contern1')
       <div class="grid_10">
        
            <div class="box round first grid">
                <h2>Update Social Media</h2>
                <div class="block">              
                 <form action="socialUpdate" method="post">
                    <table class="form">                    
                        <tr>
                            <td>
                                <label>Facebook</label>
                            </td>
                            <td>
                                <input type="text"  name="facebook" value="{{$socialData->facebook}}" class="medium" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Twitter</label>
                            </td>
                            <td>
                                <input type="text" name="twitter" value="{{$socialData->twitter}}" class="medium" />
                            </td>
                        </tr>
                        
                         <tr>
                            <td>
                                <label>LinkedIn</label>
                            </td>
                            <td>
                                <input type="text" name="linkedin" value="{{$socialData->linkedin}}" class="medium" />
                            </td>
                        </tr>
                        
                         <tr>
                            <td>
                                <label>Google Plus</label>
                            </td>
                            <td>
                                <input type="text" name="googleplus" value="{{$socialData->googleplus}}" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Skype</label>
                            </td>
                            <td>
                                <input type="text" name="skype" value="{{$socialData->skype}}" class="medium" />
                            </td>
                        </tr>
                        
                         <tr>
                            <td></td>
                            <td>
                                {{csrf_field()}}
                                <input type="submit" name="submit" Value="Update" />
                                
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>

@stop