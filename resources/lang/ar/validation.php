<?php
return [
    'custom' => [
        'national_license_no' => [
            'required' => ' رقم الترخيص مطلوب.',
        ],
        'license_no' => [
            'required' => ' رقم شهادة الإشغال مطلوب.',
        ],
        'owners' => [
            'required' => 'يجب عليك اضافة الملاك.',
        ],
        'owners.*.name' => [
            'required' => 'يجب عليك اضافة  اسم المالك .',
        ],
        'owners.*.id_num' => [
            'required' => 'يجب عليك اضافة  نوع هوية صاحب الرخصة .',
        ],
        'docs' => [
            'required' => 'يجب عليك اضافة بيانات وثائق الملكية .',
        ],
        'docs.*.num' => [
            'required' => 'يجب عليك اضافة   رقم وثيقة الملكية   .',
        ],
        'docs.*.type' => [
            'required' => 'يجب عليك اضافة   نوع وثيقة الملكية    .',
        ],
        'docs.*.date' => [
            'required' => 'يجب عليك اضافة   تاريخ وثيقة الملكية     .',
        ],
        'coordinates' => [
            'required' => 'يجب عليك اضافة الإحداثيات   .',
        ],
        'coordinates.*.num' => [
            'required' => 'يجب عليك اضافة   رقم الإحداثي   .',
        ],
        'coordinates.*.east' => [
            'required' => 'يجب عليك اضافة   الإحداثي الشرقي    .',
        ],
        'coordinates.*.north' => [
            'required' => 'يجب عليك اضافة  الإحداثي الشمالي     .',
        ],
        'occupancy_certificate_number' => [
            'required' => ' تاريخ بداية الرخصة مطلوب.',
        ],
        'license_starting_date' => [
            'required' => ' تاريخ نهاية الرخصة مطلوب.',
        ],
        'license_ending_date' => [
            'required' => ' نوع الرخصة مطلوب.',
        ],
        'license_type' => [
            'required' => ' نوع الرخصة مطلوب.',
        ],
        'building_type' => [
            'required' => ' نوع المبنى مطلوب.',
        ],
        'buildings_num' => [
            'required' => ' عدد المباني مطلوب.',
        ],
        'does_license_related_to_another' => [
            'required' => ' هل الرخصة مفروزة من رخصة أخرى مطلوب.',
        ],
        'main_use' => [
            'required' => ' الاستخدام الرئيسي مطلوب.',
        ],
        'secondary_use' => [
            'required' => ' الاستخدام الفرعي مطلوب.',
        ],
        'building_distance' => [
            'required' => ' مساحة البناء الإجمالية مطلوب.',
        ],
        'land_distance' => [
            'required' => ' مساحة الأرض الإجمالية مطلوب.',
        ],
        'building_desc' => [
            'required' => ' وصف المبنى مطلوب.',
        ],
    ],
    'attributes' => [
        'license_number' => 'رقم الترخيص',
        'occupation_certificate_number' => 'رقم شهادة الإشغال',
        'start_date' => 'تاريخ بداية الرخصة',
        'end_date' => 'تاريخ نهاية الرخصة',
        'license_type' => 'نوع الرخصة',
        'building_type' => 'نوع المبنى',
        'number_of_buildings' => 'عدد المباني',
        'is_subdivided_from_another_license' => 'هل الرخصة مفروزة من رخصة أخرى',
        'main_use' => 'الاستخدام الرئيسي',
        'sub_use' => 'الاستخدام الفرعي',
        'total_building_area' => 'مساحة البناء الإجمالية',
        'total_land_area' => 'مساحة الأرض الإجمالية',
        'building_description' => 'وصف المبنى',
    ],
];
