
@extends('admin_layouts.default')
@section('contern1')
        

 <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Slider Update</h2>
                <div class="block sloginblock">   
                <p style="color: green; margin-left: 300px;">{{Session::get('message')}}</p>   

                

                <form action="" method="post" enctype="multipart/form-data">

                    <table class="form">
                    <tr>
                            <td>
                                <label>Features</label>
                            </td>
                            <td>
                                <input type="text" value="{{$siteData->feature}}"  name="feature" class="medium" />
                            </td>
                        </tr>	
                        <tr>
                            <td>
                                <label>Recent Works</label>
                            </td>
                            <td>
                                <input type="text" value="{{$siteData->work}}"  name="work" class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Our Service</label>
                            </td>
                            <td>
                                <input type="text" value="{{$siteData->service}}"  name="service" class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Our Like</label>
                            </td>
                            <td>
                                <input type="text" value="{{$siteData->like}}"  name="like" class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>About</label>
                            </td>
                            <td>
                                <input type="text" value="{{$siteData->about}}"  name="about" class="medium" />
                            </td>
                        </tr>

                         <tr>
                            <td>
                                <label>Like Us</label>
                            </td>
                            <td>
                                <input type="text" value="{{$siteData->skill}}"  name="skill" class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Our Team</label>
                            </td>
                            <td>
                                <input type="text" value="{{$siteData->team}}"  name="team" class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>What our client says</label>
                            </td>
                            <td>
                                <input type="text" value="{{$siteData->client_say}}"  name="client_say" class="medium" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Portfolio</label>
                            </td>
                            <td>
                                <input type="text" value="{{$siteData->portfolio}}"  name="portfolio" class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>How to Reach Us?</label>
                            </td>
                            <td>
                                <input type="text" value="{{$siteData->reach_us}}"  name="reach_us" class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Message</label>
                            </td>
                            <td>
                                <input type="text" value="{{$siteData->message}}"  name="message" class="medium" />
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





