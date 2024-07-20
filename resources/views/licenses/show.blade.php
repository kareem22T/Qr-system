@extends('layout.master')

@section("title", "بيانات الرخصة")

@section("content")
@if ($license)
<div id="qr_modal" class="modal fade show" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" style="display: block; padding-right: 17px;">
    <div class="hide-content" style="position: fixed;width: 100%;height: 100%;background: #00000029;top: 0;left: 0;"></div>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close close_qr" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body d-flex justify-content-center">
                {!! $license->qr_code !!}
            </div>
            <div class="modal-footer">
                <a href="/licenses/download/{{$license->id}}" class="btn btn-success" style="margin: auto" data-dismiss="modal">تنزيل</a>
                <button type="button" class="btn btn-danger close_qr" style="margin: auto" data-dismiss="modal">اغلاق</button>
            </div>
        </div>
    </div>
</div>
<div class="section p-4">
    <div class="container p-0">
        <div class="card p-lg-4">
            <div class="card-body">
                <div class="heading heading-1">
                    <div class="sub-heading">
                        <h2>البيانات الرئيسية</h2>
                    </div>
                </div>
                <div class="row">


                    <div class="col-md-6">
                        <label class="form-group has-float-label">
                            <input class="form-control" type="text" readonly="" value="{{$license->national_license_no}}">
                            <span>رقم الرخصه الصادر من الأمانه</span>
                        </label>
                    </div>


                    <div class="col-md-6">
                        <label class="form-group has-float-label">
                            <input class="form-control" type="text" value="{{$license->license_no}}" readonly="">
                            <span>رقم الترخيص</span>
                        </label>
                    </div>

                    <div class="col-md-6">
                        <label class="form-group has-float-label">
                            <input class="form-control" type="text" value="{{$license->occupancy_certificate_number}}" readonly="">
                            <span>رقم شهادة إشغال</span>
                        </label>
                    </div>
                    <div class="col-md-6">
                        <label class="form-group has-float-label">
                            <input class="form-control" type="text" value="{{$license->license_starting_date}}" readonly="">
                            <span>تاريخ بداية الرخصة</span>
                        </label>
                    </div>

                    <div class="col-md-6">
                        <label class="form-group has-float-label ">
                            <input class="form-control" type="text" value="{{$license->license_ending_date}}" readonly="">
                            <span>تاريخ نهاية الرخصة</span>
                        </label>
                    </div>

                    <div class="col-md-6">
                        <label class="form-group has-float-label ">
                            <input class="form-control" type="text"  value="{{$license->license_type}}" readonly="">
                            <span>نوع الرخصة</span>
                        </label>
                    </div>

                    <div class="col-md-6">
                        <label class="form-group has-float-label ">
                            <input class="form-control" type="text" value="{{$license->building_type}}" readonly="">
                            <span>نوع المبنى</span>
                        </label>
                    </div>
                    <div class="col-md-6">
                        <label class="form-group has-float-label ">
                            <input class="form-control" type="text"  value="{{$license->buildings_num}}" readonly="">
                            <span>عدد المباني</span>
                        </label>
                    </div>
                    <div class="col-md-6">
                        <label class="form-group has-float-label ">
                            <input class="form-control" type="text"  value="{{$license->does_license_related_to_another}}" readonly="">
                            <span>هل الرخصة مفروزة من رخصة أخرى ؟</span>
                        </label>
                    </div>


                    <div class="col-md-6">
                        <label class="form-group has-float-label">
                            <input class="form-control" type="text"  value="{{$license->main_use}}" readonly="">
                            <span>الاستخدام الرئيسي</span>
                        </label>
                    </div>
                    <div class="col-md-6">
                        <label class="form-group has-float-label">
                            <input class="form-control" type="text" value="{{$license->secondary_use}}" readonly="">
                            <span>الاستخدام الفرعي</span>
                        </label>
                    </div>


                    <div class="col-md-6">
                        <label class="form-group has-float-label">
                            <input class="form-control" type="text" value="{{$license->building_distance}}" readonly="">
                            <span>مساحة البناء الإجمالية</span>
                        </label>
                    </div>

                    <div class="col-md-6">
                        <label class="form-group has-float-label">
                            <input class="form-control" type="text" value="{{$license->land_distance}}" readonly="">
                            <span>مساحة الارض الإجمالية</span>
                        </label>
                    </div>


                    <div class="col-md-6">
                        <label class="form-group has-float-label">
                            <input class="form-control" type="text" value="{{$license->building_desc}}"
                                readonly="">
                            <span>وصف المبنى</span>
                        </label>
                    </div>







                </div>



                <div class="heading heading-1">
                    <div class="sub-heading">
                        <h2>بيانات الملاك</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">

                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th scope="col"> # </th>
                                        <th scope="col"> اسم المالك </th>
                                        <th scope="col"> رقم هوية صاحب الرخصة </th>
                                        <th scope="col"> نوع هوية صاحب الرخصة </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr class="table-primary">
                                        <th scope="row">1</th>
                                        <td>طارق سليمان عبدالله المطيري</td>
                                        <td>1070044902 </td>
                                        <td>هوية وطنية </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="heading heading-1">
                    <div class="sub-heading">
                        <h2> بيانات وثائق الملكية </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">

                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th scope="col"> # </th>
                                        <th scope="col"> رقم وثيقة الملكية </th>
                                        <th scope="col"> نوع وثيقة الملكية </th>
                                        <th scope="col"> تاريخ وثيقة الملكية </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>394355006474</td>
                                        <td>صك </td>
                                        <td>1443/10/24 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



                <div class="heading heading-1 mt-4">
                    <div class="sub-heading">
                        <h2>الأبعاد والحدود</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-sm text-center table-Dimensions">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th scope="col"> </th>
                                        <th scope="col">الشمال </th>
                                        <th scope="col">الشرق</th>
                                        <th scope="col">الجنوب</th>
                                        <th scope="col">الغرب</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">الحد حسب الصك</th>
                                        <td>
                                            <div class="form-control disabled d-flex">
                                                <span class="SAK-info">قطعة رقم 403</span>
                                                <div class="dropdown">
                                                    <a class="link dropdown-toggle" href="#" role="button"
                                                        id="showmoreLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <svg class="icon-back" viewBox="0 0 48 48"
                                                            width="20" height="20">
                                                            <use xlink:href="#svg-draft-ico"></use>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu"
                                                        aria-labelledby="showmoreLink">
                                                        <div class="SAK-more-info">قطعة رقم 403</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-control disabled d-flex">
                                                <span class="SAK-info">شارع عرض 18 متر</span>
                                                <div class="dropdown">
                                                    <a class="link dropdown-toggle" href="#" role="button"
                                                        id="showmoreLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <svg class="icon-back" viewBox="0 0 48 48"
                                                            width="20" height="20">
                                                            <use xlink:href="#svg-draft-ico"></use>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu"
                                                        aria-labelledby="showmoreLink">
                                                        <div class="SAK-more-info">شارع عرض 18 متر</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-control disabled d-flex">
                                                <span class="SAK-info">شارع عرض 18 متر</span>
                                                <div class="dropdown">
                                                    <a class="link dropdown-toggle" href="#" role="button"
                                                        id="showmoreLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <svg class="icon-back" viewBox="0 0 48 48"
                                                            width="20" height="20">
                                                            <use xlink:href="#svg-draft-ico"></use>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu"
                                                        aria-labelledby="showmoreLink">
                                                        <div class="SAK-more-info">شارع عرض 18 متر</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-control disabled d-flex">
                                                <span class="SAK-info">قطعة رقم 405</span>
                                                <div class="dropdown">
                                                    <a class="link dropdown-toggle" href="#" role="button"
                                                        id="showmoreLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <svg class="icon-back" viewBox="0 0 48 48"
                                                            width="20" height="20">
                                                            <use xlink:href="#svg-draft-ico"></use>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu"
                                                        aria-labelledby="showmoreLink">
                                                        <div class="SAK-more-info">قطعة رقم 405</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">الحد حسب الطبيعة</th>
                                        <td>قطعة رقم 403</td>
                                        <td>شارع عرض 18.00 متر</td>
                                        <td>شارع عرض 18.00 متر</td>
                                        <td>قطعة رقم 405</td>
                                    </tr>


                                    <tr>
                                        <th scope="row">الطول حسب الصك</th>
                                        <td class="text-center">20</td>
                                        <td class="text-center">25</td>
                                        <td class="text-center">20</td>
                                        <td class="text-center">25</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">الطول حسب الصك تفصيلا</th>
                                        <td class="text-center">20</td>
                                        <td class="text-center">25</td>
                                        <td class="text-center">20</td>
                                        <td class="text-center">25</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">الطول حسب الطبيعة </th>
                                        <td class="text-center">20</td>
                                        <td class="text-center">25</td>
                                        <td class="text-center">20</td>
                                        <td class="text-center">25</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" style="vertical-align: top;">الطول حسب الطبيعة
                                            تفصيلا</th>
                                        <td class="text-center" style="vertical-align: top;">
                                            ضلع <input class="form-control text-center" type="text"
                                                value="20" readonly="">
                                        </td>
                                        <td class="text-center" style="vertical-align: top;">
                                            ضلع <input class="form-control text-center" type="text"
                                                value="25" readonly="">
                                        </td>
                                        <td class="text-center" style="vertical-align: top;">
                                            ضلع <input class="form-control text-center" type="text"
                                                value="20" readonly="">
                                        </td>
                                        <td class="text-center" style="vertical-align: top;">
                                            ضلع <input class="form-control text-center" type="text"
                                                value="25" readonly="">
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row"> الإرتداد </th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"> البروز </th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="heading heading-1 mt-4">
                    <div class="sub-heading">
                        <h2>بيانات القرار المساحي</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-group has-float-label ">
                            <input class="form-control" type="text" value="42115817429" readonly="">
                            <span>رقم التقرير المساحي</span>
                        </label>
                    </div>

                    <div class="col-md-6">
                        <label class="form-group has-float-label ">
                            <input class="form-control" type="text" value="2022/08/15 20:44:04" readonly="">
                            <span>تاريخ التقرير المساحي</span>
                        </label>
                    </div>

                </div>

                <div class="heading heading-1 mt-4">
                    <div class="sub-heading">
                        <h2>بيانات الاراضي</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th scope="col"> # </th>
                                        <th scope="col">رقم القطعة </th>
                                        <th scope="col">استخدام قطعة الارض </th>
                                        <th scope="col">مساحة الارض حسب المخطط</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>406</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="form-group has-float-label">
                            <input class="form-control" type="text" value="سكني" readonly="">
                            <span>استخدام قطعة الارض</span>
                        </label>
                    </div>
                </div>

                <div class="heading heading-1 mt-4">
                    <div class="sub-heading">
                        <h2>بيانات الموقع الجغرافي</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-group has-float-label ">
                            <input class="form-control" type="text" value="أمانة منطقة المدينة المنورة"
                                readonly="">
                            <span>الامانة </span>
                        </label>
                    </div>

                    <div class="col-md-6">
                        <label class="form-group has-float-label ">
                            <input class="form-control" type="text" value="بلدية العوالي" readonly="">
                            <span>البلدية </span>
                        </label>
                    </div>

                    <div class="col-md-6">
                        <label class="form-group has-float-label ">
                            <input class="form-control" type="text" value="حي وادي البطان" readonly="">
                            <span>الحي</span>
                        </label>
                    </div>


                    <div class="col-md-6">
                        <label class="form-group has-float-label ">
                            <input class="form-control" type="text" value="4340519" readonly="">
                            <span> رقم المخطط</span>
                        </label>
                    </div>


                    <div class="col-md-6">
                        <label class="form-group has-float-label ">
                            <input class="form-control" type="text" value="بدون" readonly="">
                            <span> رقم البلوك</span>
                        </label>
                    </div>

                </div>

                <div class="heading heading-1 mt-4">
                    <div class="sub-heading">
                        <h2>إحداثيات نقطة الوسط</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-group has-float-label ">
                            <input class="form-control" type="text" value="39.791720244" readonly="">
                            <span> الإحداثي الشرقي</span>
                        </label>
                    </div>
                    <div class="col-md-6">
                        <label class="form-group has-float-label ">
                            <input class="form-control" type="text" value="24.482739819" readonly="">
                            <span> الإحداثي الشمالي</span>
                        </label>
                    </div>
                </div>

                <div class="heading heading-1 mt-4">
                    <div class="sub-heading">
                        <h2>الإحداثيات</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th scope="col">رقم الإحداثي</th>
                                        <th scope="col">الإحداثي الشرقي</th>
                                        <th scope="col">الإحداثي الشمالي</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>4707391</td>
                                        <td>39.79185296500003</td>
                                        <td>24.482818175000034</td>
                                    </tr>
                                    <tr>
                                        <td>4707392</td>
                                        <td>39.791665840000064</td>
                                        <td>24.482875499000045</td>
                                    </tr>
                                    <tr>
                                        <td>4707394</td>
                                        <td>39.791774728000064</td>
                                        <td>24.482604139000046</td>
                                    </tr>
                                    <tr>
                                        <td>4707393</td>
                                        <td>39.79185296500003</td>
                                        <td>24.482818175000034</td>
                                    </tr>
                                    <tr>
                                        <td>4707395</td>
                                        <td>39.79158752300003</td>
                                        <td>24.482661463000056</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>







            </div>
        </div>
    </div>
</div>
@endif
@endsection
