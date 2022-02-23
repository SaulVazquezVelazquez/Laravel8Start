<div>
    <div class="card">
        <div class="card-body">
            <input type="text" wire:model="search" name="" id="" placeholder="Persona a buscar">
            <table class="table table-sriped">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Last Name</th>
                    <th>Avatar</th>
                    <th>DateOfBirth</th>
                    <th colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($persons as $person)
                    <tr>
                        <td>{{$person->id}}</td>
                        <td>{{$person->nombre}}</td>
                        <td>{{$person->apellidop}}</td>
                        <td>{{$person->apellidom}}</td>
                        <td>{{$person->avatar}}</td>
                        <td>{{$person->fecha_nac}}</td>

                        <td><a href="{{route('admin.persons.edit',$person)}}" class="btn btn-sm btn-primary">Editar</a></td>
                        <td>
                            {!! Form::model($person, ['route'=>['admin.persons.destroy',$person],'method'=>'DELETE']) !!}
                            {!! Form::submit('Eliminar', ['class'=>'btn btn-sm btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
            {{ $persons->links() }}
        </div>
    </div>
</div>
