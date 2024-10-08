<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="text-center mb-4">{{__('Suspect_list')}}</h2>
                    @include('massage')
                    <form wire:submit.prevent="search">
                        <div class="form-row row">
                            <div class="form-group col-md-5">
                                <label for="searchName">{{__('Search')}}</label>
                                <input type="text" class="form-control" id="searchName" wire:model.live="name" placeholder="{{__('Search')}}...">
                            </div>
                        </div>
                    </form>
                    <section class="section">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{__('Name')}}</th>
                                        <th>{{__('Last_name')}}</th>
                                        <th>{{__('Father_name')}}</th>
                                        <th>{{__('ID_number')}}</th>
                                        <th>{{__('Phone_number')}}</th>
                                        <th>{{__('Main_address')}}</th>
                                        <th>{{__('Current_address')}}</th>
                                        <th>{{__('by')}}</th>
                                        <th>{{__('Status')}}</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($suspects as $suspect)
                                    <tr>
                                        <td>{{$suspect->id}}</td>
                                        <td>{{$suspect->name}}</td>
                                        <td>{{$suspect->last_name}}</td>
                                        <td>{{$suspect->father_name}}</td>
                                        <td>{{$suspect->tazcira_number}}</td>
                                        <td>{{$suspect->phone}}</td>
                                        <td>{{$suspect->actual_address}}</td>
                                        <td>{{$suspect->current_address}}</td>
                                        <td>{{$suspect->Created_by}}</td>
                                        @if($suspect->isCriminal==0)
                                            <td style="color: #ffc604;">مظنون</td>
                                        @elseif($suspect->isCriminal==1)
                                            <td  style="color: #02f602;">فرد عادی</td>
                                        @elseif($suspect->isCriminal==2)
                                            <td  style="color: red;">مجریم</td>
                                        @endif
                                        <th>
                                            @can('super_admin')
{{--                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="setDeleteId(1)">--}}
{{--                                                    Delete Item--}}
{{--                                                </button>--}}
                                                <a class="btn btn-info btn-sm" href="{{url('/suspect/edit/'.$suspect->id)}}">تصحیح</a>
                                                <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{$suspect->id}}" href="">حذف</a>
                                        </th>
                                        @endcan
                                    </tr>
                                    <!-- Delete Confirmation Modal -->
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
                                                    <button type="button" class="btn btn-danger" wire:click="deleteSuspect" data-bs-dismiss="modal">{{__('Delete')}}</button>
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
                                                form.action = `{{url('/suspect/delete/')}}/${id}`;
                                                form.querySelector('#deleteId').value = id;
                                            });
                                        })
                                    </script>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>
                    <div class="mt-4">
                        {{ $suspects->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
