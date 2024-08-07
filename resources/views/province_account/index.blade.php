@extends('layout.mian-dashbord')
@section('content')
    <div class="page-heading text-center">
        <h3>{{__('province_account_list')}}</h3>
    </div>
    <!--  Inverse table start -->
    <section class="section">
        <div class="table-responsive">
            <table class="table table-dark mb-0">
                <thead>
                <tr>
                    <th>{{__('ID')}}</th>
                    <th>{{__('Picture')}}</th>
                    <th>{{__('Name')}}</th>
                    <th>{{__('Email')}}</th>
                    <th>{{__('province')}}</th>
                    <th>{{__('district')}}</th>
                    <th>{{__('Position')}}</th>
                    <th>{{__('Action')}}</th>
                    <th>{{__('Date_of_Registration')}}</th>
                    <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td><img src="{{Storage::url('profiles/'.$item->picture)}}" width="40px" height="40px" style="border-radius: 50%" alt=""></td>
                        <td class="text-bold-500">{{$item->name}}</td>
                        <td class="text-bold-500">{{$item->email}}</td>
                        <td class="text-bold-500">{{$item->province}}</td>
                        <td class="text-bold-500"></td>
                        @if($item->type==1)
                            <td>Super Admin</td>
                        @elseif($item->type==2)
                            <td> Admin</td>
                        @elseif($item->type==3)
                            <td> Moder</td>
                        @endif
                        <td>{{$item->action==1 ? 'Active' : 'Unactive'}}</td>
                        <td>{{$item->created_at}}</td>
                        @can('super_admin')
                            <td><a href="{{url('/admin/edit/'. $item->id)}}"><i class="bi bi-pencil"></i>
                                </a>
                                @endcan
                                {{--                            <a href="criminal-view.html" class="btn btn-info">view</a>--}}
                            </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="mt-3">
                <nav aria-label="Page navigation example">
                    {{$data->links()}}
                </nav>
            </div>
        </div>
    </section>
    <!--  Inverse table end -->
@endsection
