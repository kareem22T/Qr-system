@extends('layout.master')

@section("title", "بيانات الرخصة")

@section("content")
<div class="section p-4" id="create_wrapper">
    <div class="container p-0">
        <div class="card p-lg-4">
            <div class="card-body">
                <div class="heading heading-1">
                    <div class="sub-heading">
                        <h2>البيانات الرئيسية</h2>
                    </div>
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

            <form method="POST" action="{{ route('licenses.store') }}">
                @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-group has-float-label">
                                <input class="form-control" type="text" name="national_license_no">
                                <span>رقم الرخصه الصادر من الأمانه</span>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label class="form-group has-float-label">
                                <input class="form-control" type="text" name="license_no">
                                <span>رقم الترخيص</span>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label class="form-group has-float-label">
                                <input class="form-control" type="text" name="occupancy_certificate_number">
                                <span>رقم شهادة إشغال</span>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label class="form-group has-float-label">
                                <input class="form-control" type="text" name="order_number">
                                <span>رقم الطلب</span>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label class="form-group has-float-label">
                                <input class="form-control" type="text" name="license_starting_date">
                                <span>تاريخ بداية الرخصة</span>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label class="form-group has-float-label">
                                <input class="form-control" type="text" name="license_ending_date">
                                <span>تاريخ نهاية الرخصة</span>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label class="form-group has-float-label">
                                <input class="form-control" type="text" name="license_type">
                                <span>نوع الرخصة</span>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label class="form-group has-float-label">
                                <input class="form-control" type="text" name="building_type">
                                <span>نوع المبنى</span>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label class="form-group has-float-label">
                                <input class="form-control" type="number" name="buildings_num">
                                <span>عدد المباني</span>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label class="form-group has-float-label">
                                <input class="form-control" type="text" name="does_license_related_to_another">
                                <span>هل الرخصة مفروزة من رخصة أخرى ؟</span>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label class="form-group has-float-label">
                                <input class="form-control" type="text" name="main_use">
                                <span>الاستخدام الرئيسي</span>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label class="form-group has-float-label">
                                <input class="form-control" type="text" name="secondary_use">
                                <span>الاستخدام الفرعي</span>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label class="form-group has-float-label">
                                <input class="form-control" type="text" name="building_distance">
                                <span>مساحة البناء الإجمالية</span>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label class="form-group has-float-label">
                                <input class="form-control" type="text" name="land_distance">
                                <span>مساحة الارض الإجمالية</span>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label class="form-group has-float-label">
                                <input class="form-control" type="text" name="building_desc">
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
                                            <th><button type="button" @click="addOwner()" class="btn btn-success btn-sm">اضافة مالك</button></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr class="table-primary" v-for="(item, index) in owners" :key="index">
                                            <th scope="row">@{{index + 1 }}</th>
                                            <td><input type="text" :name="`owners[${index}][name]`" class="form-control form-sm" v-model="owners[index].name"></td>
                                            <td><input type="text" :name="`owners[${index}][id_num]`" class="form-control form-sm" v-model="owners[index].id_num"></td>
                                            <td><input type="text" :name="`owners[${index}][id_type]`" class="form-control form-sm" v-model="owners[index].id_type"></td>
                                            <th v-if="owners && owners.length > 1"><button type="button" class="btn btn-danger btn-sm"  @click="removeOwner(index)">خدف</button></th>
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
                                            <th><button type="button" @click="addDoc()" class="btn btn-success btn-sm">اضافة وثيقة</button></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr class="table-primary" v-for="(item, index) in docs" :key="index">
                                            <th scope="row">@{{index + 1 }}</th>
                                            <td><input type="text" :name="`docs[${index}][num]`" class="form-control form-sm" v-model="docs[index].num"></td>
                                            <td><input type="text" :name="`docs[${index}][type]`" class="form-control form-sm" v-model="docs[index].type"></td>
                                            <td><input type="text" :name="`docs[${index}][date]`" class="form-control form-sm" v-model="docs[index].date"></td>
                                            <th v-if="docs && docs.length > 1"><button type="button" class="btn btn-danger btn-sm"  @click="removeDoc(index)">خدف</button></th>
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
                                                    <input type="text" class="form-control" name="instrument_n" id="">
                                            </td>
                                            <td>
                                                    <input type="text" class="form-control" name="instrument_e" id="">
                                            </td>
                                            <td>
                                                    <input type="text" class="form-control" name="instrument_s" id="">
                                            </td>
                                            <td>
                                                    <input type="text" class="form-control" name="instrument_w" id="">
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">الحد حسب الطبيعة</th>
                                            <td>
                                                    <input type="text" class="form-control" name="nature_n" id="">
                                            </td>
                                            <td>
                                                    <input type="text" class="form-control" name="nature_e" id="">
                                            </td>
                                            <td>
                                                    <input type="text" class="form-control" name="nature_s" id="">
                                            </td>
                                            <td>
                                                    <input type="text" class="form-control" name="nature_w" id="">
                                            </td>
                                        </tr>


                                        <tr>
                                            <th scope="row">الطول حسب الصك</th>
                                            <td>
                                                <input type="text" class="form-control" name="instrument_height_n" id="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="instrument_height_e" id="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="instrument_height_s" id="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="instrument_height_w" id="">
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">الطول حسب الطبيعة </th>
                                            <td>
                                                <input type="text" class="form-control" name="nature_height_n" id="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="nature_height_e" id="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="nature_height_s" id="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="nature_height_w" id="">
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row"> الإرتداد </th>
                                            <td>
                                                <input type="text" class="form-control" name="bouncing_n" id="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="bouncing_e" id="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="bouncing_s" id="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="bouncing_w" id="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"> البروز </th>
                                            <td>
                                                <input type="text" class="form-control" name="prominence_n" id="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="prominence_e" id="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="prominence_s" id="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="prominence_w" id="">
                                            </td>
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
                                <span>رقم التقرير المساحي</span>
                                <input class="form-control" type="text" name="survey_report_number">
                            </label>
                        </div>

                        <div class="col-md-6">
                            <label class="form-group has-float-label ">
                                <input class="form-control" type="text" name="survey_report_date">
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
                                            <td>
                                                <input class="form-control" type="text" name="land_num">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" name="land_use">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" name="land_distance_according_to_planing">
                                            </td>
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
                                <input class="form-control" type="text" name="honesty">
                                <span>الامانة </span>
                            </label>
                        </div>

                        <div class="col-md-6">
                            <label class="form-group has-float-label ">
                                <input class="form-control" type="text" name="municipal">
                                <span>البلدية </span>
                            </label>
                        </div>

                        <div class="col-md-6">
                            <label class="form-group has-float-label ">
                                <input class="form-control" type="text" name="district">
                                <span>الحي</span>
                            </label>
                        </div>


                        <div class="col-md-6">
                            <label class="form-group has-float-label ">
                                <input class="form-control" type="text" name="planned_no">
                                <span> رقم المخطط</span>
                            </label>
                        </div>


                        <div class="col-md-6">
                            <label class="form-group has-float-label ">
                                <input class="form-control" type="text" name="block_no">
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
                                <input class="form-control" type="text" name="east_coordinate">
                                <span> الإحداثي الشرقي</span>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label class="form-group has-float-label ">
                                <input class="form-control" type="text" name="north_coordinate">
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
                                            <th><button type="button" @click="addcoordinate()" class="btn btn-success btn-sm">اضافة </button></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(item, index) in coordinates" :key="index">
                                            <td><input type="text" :name="`coordinates[${index}][num]`" class="form-control form-sm" v-model="coordinates[index].num"></td>
                                            <td><input type="text" :name="`coordinates[${index}][east]`" class="form-control form-sm" v-model="coordinates[index].east"></td>
                                            <td><input type="text" :name="`coordinates[${index}][north]`" class="form-control form-sm" v-model="coordinates[index].north"></td>
                                            <th v-if="coordinates && coordinates.length > 1"><button type="button" class="btn btn-danger btn-sm"  @click="removecoordinate(index)">خدف</button></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="heading heading-1 mt-4">
                        <div class="sub-heading">
                            <h2>بيانات التعاقد </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-group has-float-label">
                                <input class="form-control" type="text" name="office">
                                <span>المكتب الهندسي المشرف</span>
                            </label>
                        </div>

                        <div class="col-md-6">
                            <label class="form-group has-float-label ">
                                <input class="form-control" type="text" name="office_design">
                                <span> المكتب الهندسي المصمم </span>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label class="form-group has-float-label">
                                <input class="form-control" type="text" name="general_contractor">
                                <span>المقاول العام</span>
                            </label>
                        </div>
                    </div>
                    <div class="w-100">
                        <button type="submit" class="btn btn-primary d-flex justify-content-center" style="margin: auto;min-width: 200px; ">حفظ</button>
                    </div>

                </form>

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
@endsection

@section("scripts")
    <script src="{{asset('/assets/js/vue.js')}}"></script>
    <script>
        const { createApp, ref } = Vue;

        createApp({
        data() {
            return {
                owners: [
                    {
                        name: "",
                        id_type: "",
                        id_num: ""
                    }
                ],
                docs: [
                    {
                        num: "",
                        date: "",
                        type: ""
                    }
                ],
                coordinates: [
                    {
                        num: "",
                        north: "",
                        east: ""
                    }
                ]
            }
        },
        methods: {
            addOwner() {
                this.owners.push({
                    name: "",
                    id_type: "",
                    id_num: ""
                })
            },
            removeOwner(i) {
                this.owners.splice(i, 1);
            },
            addDoc() {
                this.docs.push({
                    num: "",
                    date: "",
                    type: ""
                })
            },
            removeDoc(i) {
                this.docs.splice(i, 1);
            },
            addcoordinate() {
                this.coordinates.push({
                    num: "",
                    north: "",
                    east: ""
                })
            },
            removecoordinate(i) {
                this.coordinates.splice(i, 1);
            }
        },
        }).mount('#create_wrapper')
    </script>
@endsection
