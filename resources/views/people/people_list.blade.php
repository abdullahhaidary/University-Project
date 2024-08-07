@extends('layout.mian-dashbord')
@section('content')
{{--   --}}

    <div class="page-heading text-center">
        <!-- لیست تمام افراد شکایت کننده -->
        <h3>{{__('list_of_complint_people')}}</h3>
    </div>
    @include('massage')
    <!--  Inverse table start -->
    <section class="section ">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>

                <tr class="table-active">
                    <th>#</th>
                    <th>{{__('Name')}}</th>
                    <th> {{__('Father_name')}}</th>
                    <th> {{__('Phone_number')}}</th>
                    <th>{{__('Tazkira_number')}}</th>
                    <th>{{__('Main_address')}}</th>
                    <th>{{__('Current_address')}}</th>
                    <th> {{__('Case')}}</th>
                    <th>{{__('Complaint_subject')}}</th>
                    <th>{{__('Complaint_date')}}</th>
                    <th>{{__('By')}}</th>
                    <th>{{__('Information')}}</th>
                    <th>{{__('Action')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td class="text-bold-500">{{$item->name." ". $item->last_name}}</td>
                        <td>{{$item->father_name}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->tazkira_number}} </td>
                        <td>{{$item->actual_address}}</td>
                        <td>{{$item->current_address}}</td>
                        <td>{{$item->crime_case}}</td>
                        <td>{{$item->subject_crim}}</td>
                        <td>{{$item->crim_date}}</td>
                        <td>{{$item->Created_by}}</td>
                        
                        <td>
                            <div class="dropdown">
                                <a class=" dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{__('Information')}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item " href="{{url('ariza/arizafile/'.$item->id)}}"><span class="">{{__('Ariza')}}</span></a></li>
                                    <li><a class="dropdown-item " href="{{url('crime/info/'.$item->id)}}">{{__('Description')}}</a></li>
                                    <li><a class="dropdown-item " href="{{url('suspect_list/'.$item->id)}}">{{__('Suspect_list')}}</a></li>
                                </ul>
                            </div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-light-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{__('Action')}}
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @can('super_admin')
                                    <li><a class="dropdown-item bg-primary " href="{{url('people/edit/'.$item->id)}}">{{__('Edit')}}</a></li>
                                    <li><a class="dropdown-item bg-danger"  data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{$item->id}}">{{__('Delete')}}</a></li>
                                    @endcan
                                        <li><a class="dropdown-item bg-info" href="{{url('people/all/'. $item->id)}}">{{__('View')}}</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <div class="modal fade" id="mymodal">
                        <iframe id="pdfIframe" src="{{asset('ariza-of-compleint/'. $item->ariza)}}" style="width: 100%" frameborder="0"></iframe>
                    </div>

                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">{{__('Confirm_delete')}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{__('Delete_description')}}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Cancel')}}</button>
                                    <form id="deleteForm" action="{{url('/people/delete/'.$item->id)}}" method="get" style="display:inline;">
                                        @csrf
                                        <input type="hidden" name="id" id="deleteId" value="">
                                        <button type="submit" class="btn btn-danger">{{__('Delete')}}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            const deleteModal = document.getElementById('deleteModal');
                            deleteModal.addEventListener('show.bs.modal', function (event) {
                                const button = event.relatedTarget;
                                const id = button.getAttribute('data-id');
                                const form = deleteModal.querySelector('#deleteForm');
                                form.action = `{{url('people/delete/')}}/${id}`;
                                form.querySelector('#deleteId').value = id;
                            });
                        })
                    </script>
                @endforeach
                </tbody>
            </table>

        </div>
    </section>
    <body>
    </body>

    <!--  Inverse table end -->
    <div class="mt-3">
        <nav aria-label="Page navigation example">
            <div class="mt-3">
                <nav aria-label="Page navigation example">
                    {{$data->links()}}
                </nav>
            </div>
        </nav>
    </div>

@endsection

@push('scripts')

@endpush
@section('scripts')
    <script>
        var deleteUrl = '';

        function showDeleteModal(url) {
            deleteUrl = url; // Store the URL for deletion
            var myModal = new bootstrap.Modal(document.getElementById('deleteModal'));
            myModal.show(); // Show the modal
        }

        document.getElementById('confirmDeleteButton').addEventListener('click', function() {
            if (deleteUrl) {
                window.location.href = deleteUrl; // Redirect to the delete route
            }
        });
    </script>

@endsection
