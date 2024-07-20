@extends("Admin.layouts.main")

@section("title", "تعديل الرخصة")

@section("content")
<br>
<br>
<div class="d-sm-flex align-items-center justify-content-between mb-4" dir="rtl">
    <h1 class="h3 mb-0 text-gray-800">تعديل الرخصة</h1>
    <a href="/admin/dashboard" class="btn btn-primary">الرجوع للقائمة</a>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{ route('licenses.update', $license->id) }}" dir="rtl" style="text-align: right">
    @csrf
    @method('PUT')

    <div class="gap-2" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px">
        <div class="w-100">
            <label class="form-group w-100 has-float-label">
                <span>رقم الرخصه الصادر من الأمانه</span>
                <input class="form-control w-100" type="text" name="national_license_no" value="{{ $license->national_license_no }}">
            </label>
        </div>
        <div class="w-100">
            <label class="form-group w-100 has-float-label">
                <span>رقم الترخيص</span>
                <input class="form-control w-100" type="text" name="license_no" value="{{ $license->license_no }}">
            </label>
        </div>
        <div class="w-100">
            <label class="form-group w-100 has-float-label">
                <span>رقم شهادة إشغال</span>
                <input class="form-control w-100" type="text" name="occupancy_certificate_number" value="{{ $license->occupancy_certificate_number }}">
            </label>
        </div>
        <div class="w-100">
            <label class="form-group w-100 has-float-label">
                <span>تاريخ بداية الرخصة</span>
                <input class="form-control w-100" type="date" name="license_starting_date" value="{{ $license->license_starting_date }}">
            </label>
        </div>
        <div class="w-100">
            <label class="form-group w-100 has-float-label">
                <span>تاريخ نهاية الرخصة</span>
                <input class="form-control w-100" type="date" name="license_ending_date" value="{{ $license->license_ending_date }}">
            </label>
        </div>
        <div class="w-100">
            <label class="form-group w-100 has-float-label">
                <span>نوع الرخصة</span>
                <input class="form-control w-100" type="text" name="license_type" value="{{ $license->license_type }}">
            </label>
        </div>
        <div class="w-100">
            <label class="form-group w-100 has-float-label">
                <span>نوع المبنى</span>
                <input class="form-control w-100" type="text" name="building_type" value="{{ $license->building_type }}">
            </label>
        </div>
        <div class="w-100">
            <label class="form-group w-100 has-float-label">
                <span>عدد المباني</span>
                <input class="form-control w-100" type="number" name="buildings_num" value="{{ $license->buildings_num }}">
            </label>
        </div>
        <div class="w-100">
            <label class="form-group w-100 has-float-label">
                <span>هل الرخصة مفروزة من رخصة أخرى ؟</span>
                <input class="form-control w-100" type="text" name="does_license_related_to_another" value="{{ $license->does_license_related_to_another }}">
            </label>
        </div>
        <div class="w-100">
            <label class="form-group w-100 has-float-label">
                <span>الاستخدام الرئيسي</span>
                <input class="form-control w-100" type="text" name="main_use" value="{{ $license->main_use }}">
            </label>
        </div>
        <div class="w-100">
            <label class="form-group w-100 has-float-label">
                <span>الاستخدام الفرعي</span>
                <input class="form-control w-100" type="text" name="secondary_use" value="{{ $license->secondary_use }}">
            </label>
        </div>
        <div class="w-100">
            <label class="form-group w-100 has-float-label">
                <span>مساحة البناء الإجمالية</span>
                <input class="form-control w-100" type="text" name="building_distance" value="{{ $license->building_distance }}">
            </label>
        </div>
        <div class="w-100">
            <label class="form-group w-100 has-float-label">
                <span>مساحة الارض الإجمالية</span>
                <input class="form-control w-100" type="text" name="land_distance" value="{{ $license->land_distance }}">
            </label>
        </div>
        <div class="w-100">
            <label class="form-group w-100 has-float-label">
                <span>وصف المبنى</span>
                <input class="form-control w-100" type="text" name="building_desc" value="{{ $license->building_desc }}">
            </label>
        </div>
        <div class="w-100">
            <button type="submit" class="btn btn-primary" style="margin: auto">تحديث</button>
        </div>
    </div>
</form>

@endsection
