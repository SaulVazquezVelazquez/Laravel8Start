
                <div class="">
                
                    <table id="table-personas" class="table table-dark table-striped table-hover dt-responsive nowrap">
                        {{-- table table-striped table-bordered dt-responsive nowrap --}}
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>LastName</th>
                                <th>Email</th>
                                <th>DOB</th>
                                <th>Sex</th>
                                <th>Phone</th>
                                <th>Avatar</th>
                                <th>Password</th>
                                <th class="col-6">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($personas as $persona)
                                <tr>
                                    <td>{{$persona->id}}</td>
                                    <td>{{$persona->name}}</td>
                                    <td>{{$persona->lastname}}</td>
                                    <td>{{$persona->email}}</td>
                                    <td>{{$persona->dateofbirth}}</td>
                                    <td>{{$persona->sex}}</td>
                                    <td>{{$persona->phone}}</td>
                                    <td>{{$persona->avatar}}</td>
                                    <td>{{$persona->password}}</td>
                                    <td>
                                        <a href="{{route("admin.persona.edit",$persona)}}" class="btn btn-sm btn-primary">Edit</a>
                                        {{-- {!! Form::model($persona, ['route'=>['admin.persona.destroy',$persona],'method'=>'DELETE']) !!}
                                        {{-- <button type="submit" class="btn btn-sm btn-primary">Edit</button> --}}
                                        {{-- {!! Form::open(["route"=>["admin.persona.destroy",$persona], "method" => "DELETE"]) !!}     --}}
                                        {{-- {!! Form::open(['route'=>['admin.persona.destroy',$persona],'method' => 'DELETE']) !!} --}}

                                        {!! Form::submit('Delete', ["class"=>"btn btn-sm btn-danger"]) !!}
                                        {!! Form::close() !!} --}}
                                
                                    </td>    
                                </tr>
                                
                            @endforeach
                            
                        </tbody>
                    
                    </table>
                </div>
