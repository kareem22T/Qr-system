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
                            <input class="form-control" type="text" value="{{$license->order_number}}"
                                readonly="">
                                <span>رقم الطلب</span>
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
                                    @foreach ($license->owners()->get() as $i => $item)
                                        <tr class="table-primary">
                                            <th scope="row">{{ $i + 1 }}</th>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->id_num }} </td>
                                            <td>{{ $item->id_type }}</td>
                                        </tr>
                                    @endforeach
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
                                    @foreach ($license->docs()->get() as $i => $item)
                                        <tr class="table-primary">
                                            <th scope="row">{{ $i + 1 }}</th>
                                            <td>{{ $item->num }}</td>
                                            <td>{{ $item->type }} </td>
                                            <td>{{ $item->date }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



                <!-- In your Blade view file (your-view-file.blade.php) -->
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
                                                <span class="SAK-info">{{ $license->instrument_n }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-control disabled d-flex">
                                                <span class="SAK-info">{{ $license->instrument_e }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-control disabled d-flex">
                                                <span class="SAK-info">{{ $license->instrument_s }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-control disabled d-flex">
                                                <span class="SAK-info">{{ $license->instrument_w }}</span>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">الحد حسب الطبيعة</th>
                                        <td>{{ $license->nature_n }}</td>
                                        <td>{{ $license->nature_e }}</td>
                                        <td>{{ $license->nature_s }}</td>
                                        <td>{{ $license->nature_w }}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">الطول حسب الصك</th>
                                        <td class="text-center">{{ $license->instrument_height_n }}</td>
                                        <td class="text-center">{{ $license->instrument_height_e }}</td>
                                        <td class="text-center">{{ $license->instrument_height_s }}</td>
                                        <td class="text-center">{{ $license->instrument_height_w }}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">الطول حسب الصك تفصيلا</th>
                                        <td class="text-center">{{ $license->instrument_height_detailed_n }}</td>
                                        <td class="text-center">{{ $license->instrument_height_detailed_e }}</td>
                                        <td class="text-center">{{ $license->instrument_height_detailed_s }}</td>
                                        <td class="text-center">{{ $license->instrument_height_detailed_w }}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">الطول حسب الطبيعة </th>
                                        <td class="text-center">{{ $license->nature_height_n }}</td>
                                        <td class="text-center">{{ $license->nature_height_e }}</td>
                                        <td class="text-center">{{ $license->nature_height_s }}</td>
                                        <td class="text-center">{{ $license->nature_height_w }}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row" style="vertical-align: top;">الطول حسب الطبيعة
                                            تفصيلا</th>
                                        <td class="text-center" style="vertical-align: top;">
                                            ضلع <input class="form-control text-center" type="text" value="{{ $license->nature_height_detailed_n }}" readonly>
                                        </td>
                                        <td class="text-center" style="vertical-align: top;">
                                            ضلع <input class="form-control text-center" type="text" value="{{ $license->nature_height_detailed_e }}" readonly>
                                        </td>
                                        <td class="text-center" style="vertical-align: top;">
                                            ضلع <input class="form-control text-center" type="text" value="{{ $license->nature_height_detailed_s }}" readonly>
                                        </td>
                                        <td class="text-center" style="vertical-align: top;">
                                            ضلع <input class="form-control text-center" type="text" value="{{ $license->nature_height_detailed_w }}" readonly>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row"> الإرتداد </th>
                                        <td>{{ $license->bouncing_n }}</td>
                                        <td>{{ $license->bouncing_e }}</td>
                                        <td>{{ $license->bouncing_s }}</td>
                                        <td>{{ $license->bouncing_w }}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row"> البروز </th>
                                        <td>{{ $license->prominence_n }}</td>
                                        <td>{{ $license->prominence_e }}</td>
                                        <td>{{ $license->prominence_s }}</td>
                                        <td>{{ $license->prominence_w }}</td>
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
                            <input class="form-control" type="text" value="{{$license->survey_report_number}}" readonly="">
                            <span>رقم التقرير المساحي</span>
                        </label>
                    </div>

                    <div class="col-md-6">
                        <label class="form-group has-float-label ">
                            <input class="form-control" type="text" value="{{$license->survey_report_date}}"readonly="">
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
                                        <td>{{ $license->land_num }}</td>
                                        <td>{{ $license->land_use }}</td>
                                        <td>{{ $license->land_distance_according_to_planing }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
                            <input class="form-control" type="text" value="{{$license->honesty}}"
                                readonly="">
                            <span>الامانة </span>
                        </label>
                    </div>

                    <div class="col-md-6">
                        <label class="form-group has-float-label ">
                            <input class="form-control" type="text" value="{{$license->municipal}}" readonly="">
                            <span>البلدية </span>
                        </label>
                    </div>

                    <div class="col-md-6">
                        <label class="form-group has-float-label ">
                            <input class="form-control" type="text" value="{{$license->district}}" readonly="">
                            <span>الحي</span>
                        </label>
                    </div>


                    <div class="col-md-6">
                        <label class="form-group has-float-label ">
                            <input class="form-control" type="text" value="{{$license->planned_no}}" readonly="">
                            <span> رقم المخطط</span>
                        </label>
                    </div>


                    <div class="col-md-6">
                        <label class="form-group has-float-label ">
                            <input class="form-control" type="text" value="{{$license->block_no}}" readonly="">
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
                            <input class="form-control" type="text" value="{{$license->east_coordinate}}" readonly="">
                            <span> الإحداثي الشرقي</span>
                        </label>
                    </div>
                    <div class="col-md-6">
                        <label class="form-group has-float-label ">
                            <input class="form-control" type="text" value="{{$license->north_coordinate}}" readonly="">
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
                                    @foreach ($license->coordinates()->get() as $i => $item)
                                    <tr >
                                        <td>{{ $item->num }}</td>
                                        <td>{{ $item->east }} </td>
                                        <td>{{ $item->north }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="heading heading-1 mt-4">
                    <div class="sub-heading">
                        <h2>التعهدات</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div style="line-height: 2;" class="custom-accordion accordion mb-4 toggle-item">
                            <ul class="collapse show">
                                <li>التعهد باشتراطات البلدية وكود البناء السعودي</li>
                                <li>اتعهد بأنني اطلعت على المبني ولا توجد مخالفات على المبنى</li>
                                <li>يتعهد المكتب الهندسي المشرف بتطبيق متطلبات السلامة الواردة بالكود السعودي للحماية من الحريق (SBC801)
                                    والإشتراطات والمتطلبات الصادرة من المديرية العامة للدفاع المدني على التقارير والنماذج المقدمة
                                    للمشروع .
                                </li>
                                <li>يتعهد المكتب الهندسي المشرف بصحة كامل البيانات والمعلومات في نماذج وتقارير المشروع ، وفي حال تقديم
                                    المكتب لمعلومات غير صحيحة أو تقارير مخالفة للإشتراطات والأنظمة فأن (للوزارة / الأمانة) إتخاذ
                                    الإجراءات التي تراها مناسبة ضد المكتب وتطبيق ما تقتضي به الأنظمة المرعية، ومنها لائحة تصنيف مخالفات
                                    كود البناء السعودي، ولائحة الغرامات والجزاءات عن المخالفات البلدية الصادرة بقرار مجلس الوزراء رقم
                                    218 وتاريخ 6/8/1422هـ ونظام مكافحة التزوير، والغرامات المالية، وتعويض المتضرر من المخالفة.
                                </li>
                                <li>يتعهد المكتب الهندسي المشرف بإعداد التقارير الفنية لمراحل البناء وفقاً لمتطلبات واشتراطات كود البناء
                                    السعودي الصادر بموجب قرار مجلس الوزراء رقم (241) وتاريخ 25/4/1438ه والموافق عليه بالمرسوم الملكي رقم
                                    (م/43 ) وتاريخ 26/4/1438هـ ويتحمل المكتب الهندسي المشرف المسؤولية كاملة أمام الجهات ذات العالقة في
                                    حال مخالفة ذلك.
                                </li>
                                <li>يتعهد المكتب الهندسي المصمم بتطبيق الإشتراطات والمتطلبات والمعايير الخاصة بالتصميم المقاوم للزلازل
                                    طبقاً للدليل الإنشائي للمباني، الوارد بكود البناء السعودي للإشتراطات الإنشائية (SBC300).
                                </li>
                                <li>يتعهد المكتب الهندسي المصمم بتطبيق متطلبات السلامة الواردة بالكود السعودي للحماية من الحريق (SBC801)
                                    والإشتراطات والمتطلبات الصادرة من المديرية العامة للدفاع المدني على المخططات المقدمة للمشروع .
                                </li>
                                <li>يتعهد المكتب الهندسي المصمم بالتقيد بتدوين البيانات بشكل صحيح في تعهد العزل الحراري إنفاذاً للأمر
                                    السامي الكريم رقم (م ب /6927) وتاريخ 22/9/1431هـ القاضي بتطبيق العزل الحراري بشكل إلزامي على جميع
                                    المباني الجديدة سواء السكنية أو التجارية أو أي منشآت أخرى ويتحمل المسؤولية النظامية الناتجة مخالفة
                                    ذلك .
                                </li>
                                <li>يتعهد المكتب الهندسي المصمم بصحة كامل البيانات والمعلومات في نماذج ومخططات المشروع ، وفي حال تقديم
                                    المكتب لمعلومات غير صحيحة أو مخططات مخالفة للإشتراطات والأنظمة فأن (للوزارة / الأمانة) إتخاذ
                                    الإجراءات التي تراها مناسبة ضد المكتب وتطبيق ما تقتضي به الأنظمة المرعية، ومنها لائحة تصنيف مخالفات
                                    كود البناء السعودي، ولائحة الغرامات والجزاءات عن المخالفات البلدية الصادرة بقرار مجلس الوزراء رقم
                                    218 وتاريخ 6/8/1422هـ ونظام مكافحة التزوير، والغرامات المالية، وتعويض المتضرر من المخالفة، وإيقاف
                                    العمل بالمشروع .
                                </li>
                                <li>يتعهد المكتب الهندسي المصمم بأن جميع التصاميم والأعمال المقدمة في هذا المشروع مطابقة لمتطلبات
                                    واشتراطات كود البناء السعودي الصادر بموجب قرار مجلس الوزراء رقم (241) وتاريخ 25/4/1438ه والموافق
                                    عليه بالمرسوم الملكي رقم (م/43 ) وتاريخ 26/4/1438هـ ويتحمل المكتب الهندسي المصمم المسؤولية كاملة
                                    أمام الجهات ذات العالقة في حال مخالفة ذلك.</li>
                                <li>يتعهد المكتب الهندسي المشرف بالاطلاع على لائحة تصنيف مخالفات الكود وملحق المخالفات الوارده في هذه
                                    اللائحة والمطبقة على جميع انواع المباني <a
                                        href="https://balady.gov.sa/Services/DownloadAttachment/6"> للإطلاع علي التعهد اضغط هنا</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endif
@endsection
