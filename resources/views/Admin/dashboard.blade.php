@extends("Admin.layouts.main")

@section("title", "رخص")

@php
    $licenses = App\Models\License::all();
@endphp

@section("content")
<br>
<br>
<div class="d-sm-flex align-items-center justify-content-between mb-4" dir="rtl">
    <h1 class="h3 mb-0 text-gray-800">إدارة الرخص</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive" style="width: auto">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>رقم الترخيص الوطني</th>
                        <th>رقم الترخيص</th>
                        <th>رقم شهادة الإشغال</th>
                        <th>تاريخ بداية الرخصة</th>
                        <th>تاريخ نهاية الرخصة</th>
                        <th>نوع الرخصة</th>
                        <th>نوع المبنى</th>
                        <th>عدد المباني</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($licenses as $license)
                        <tr>
                            <td>{{ $license->national_license_no }}</td>
                            <td>{{ $license->license_no }}</td>
                            <td>{{ $license->occupancy_certificate_number }}</td>
                            <td>{{ $license->license_starting_date }}</td>
                            <td>{{ $license->license_ending_date }}</td>
                            <td>{{ $license->license_type }}</td>
                            <td>{{ $license->building_type }}</td>
                            <td>{{ $license->buildings_num }}</td>
                            <td>
                                <div class="btns">
                                    <a href="" class="btn btn-danger delete-lisence" id="{{$license->id}}">حذف</a>
                                    <a href="/admin/lisence/edit/{{$license->id}}" class="btn btn-primary">تعديل</a>
                                    <a href="/licenses/download/{{$license->id}}" class="btn btn-success">تحميل ال qr</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endSection

@section("scripts")
<script src="{{ asset('/admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('/admin/js/demo/datatables-demo.js') }}"></script>
<script>
    $(document).on("click", '.delete-lisence', function(e) {
        e.preventDefault();
        var id = $(this).attr('id');
        if (confirm("هل انت متاكد من حذف الرخصة"))
        window.location.href = "/admin/lisence/delete/" + id;
    })
</script>
@endSection
