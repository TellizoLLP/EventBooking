<table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sl No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Current Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{ $user->eventRegistration?->first_name }} {{$user->eventRegistration?->last_name}}</td>
                            <td>{{ $user->eventRegistration?->email }}</td>
                            <td>{{ $user->eventRegistration?->phone }}</td>
                            <td> <span class="badge {{ $user->eventRegistration?->current_status == 1 ? 'bg-success' : 'bg-warning' }}">{{ $user->eventRegistration?->current_status == 1 ? 'Student' : 'Parent' }}</span></td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>

