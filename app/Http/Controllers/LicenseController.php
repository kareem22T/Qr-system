<?php

namespace App\Http\Controllers;

use App\Models\Coordinate;
use App\Models\Doc;
use App\Models\License;
use App\Models\Owner;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class LicenseController extends Controller
{
    public function index()
    {
        $licenses = License::all();
        return view('licenses.index', compact('licenses'));
    }

    public function create()
    {
        return view('licenses.create');
    }

    public function store(Request $request)
    {
        // return response()->json($request);

        $request->validate([
            'national_license_no' => 'nullable|string',
            'license_no' => 'required|string',
            'occupancy_certificate_number' => 'required|string',
            'license_starting_date' => 'required|date',
            'license_ending_date' => 'required|date',
            'license_type' => 'required|string',
            'building_type' => 'required|string',
            'buildings_num' => 'required',
            'does_license_related_to_another' => 'required|string',
            'main_use' => 'required|string',
            'secondary_use' => 'required|string',
            'building_distance' => 'required',
            'land_distance' => 'required',
            'building_desc' => 'required|string',
            'owners' => 'required|array',
            'owners.*.name' => 'required|string',
            'owners.*.id_type' => 'required|string',
            'owners.*.id_num' => 'required|string',
            'docs' => 'required|array',
            'docs.*.date' => 'required|string',
            'docs.*.type' => 'required|string',
            'docs.*.num' => 'required|string',
            'coordinates' => 'required|array',
            'coordinates.*.num' => 'required|string',
            'coordinates.*.north' => 'required|string',
            'coordinates.*.east' => 'required|string',
            'instrument_n'=> 'nullable|string',
            'instrument_e'=> 'nullable|string',
            'instrument_w'=> 'nullable|string',
            'instrument_s'=> 'nullable|string',
            'instrument_height_n'=> 'nullable|string',
            'instrument_height_e'=> 'nullable|string',
            'instrument_height_w'=> 'nullable|string',
            'instrument_height_s'=> 'nullable|string',
            'nature_n'=> 'nullable|string',
            'nature_e'=> 'nullable|string',
            'nature_w'=> 'nullable|string',
            'nature_s'=> 'nullable|string',
            'nature_height_n'=> 'nullable|string',
            'nature_height_e'=> 'nullable|string',
            'nature_height_w'=> 'nullable|string',
            'nature_height_s'=> 'nullable|string',
            'prominence_n'=> 'nullable|string',
            'prominence_e'=> 'nullable|string',
            'prominence_w'=> 'nullable|string',
            'prominence_s'=> 'nullable|string',
            'bouncing_n'=> 'nullable|string',
            'bouncing_e'=> 'nullable|string',
            'bouncing_w'=> 'nullable|string',
            'bouncing_s'=> 'nullable|string',
            'nature_height_detailed_n'=> 'nullable|string',
            'nature_height_detailed_e'=> 'nullable|string',
            'nature_height_detailed_w'=> 'nullable|string',
            'nature_height_detailed_s'=> 'nullable|string',
            'survey_report_number'=> 'nullable|string',
            'survey_report_date'=> 'nullable|string',
            'land_use'=> 'nullable|string',
            'land_num'=> 'nullable|string',
            'land_distance_according_to_planing'=> 'nullable|string',
            'honesty'=> 'nullable|string',
            'municipal'=> 'nullable|string',
            'district'=> 'nullable|string',
            'planned_no'=> 'nullable|string',
            'block_no'=> 'nullable|string',
            'east_coordinate'=> 'nullable|string',
            'north_coordinate'=> 'nullable|string',
            'order_number'=> 'nullable|string',
        ]);
        DB::beginTransaction();

        try {

        $license = License::create($request->all());
        foreach ($request->owners as $owner) {
            Owner::create([
                'license_id' => $license->id,
                'id_type' => $owner['id_type'],
                'id_num' => $owner['id_num'],
                'name' => $owner['name'],
            ]);
        }
        foreach ($request->docs as $doc) {
            Doc::create([
                'license_id' => $license->id,
                'type' => $doc['type'],
                'num' => $doc['num'],
                'date' => $doc['date'],
            ]);
        }
        foreach ($request->coordinates as $doc) {
            Coordinate::create([
                'license_id' => $license->id,
                'num' => $doc['num'],
                'north' => $doc['north'],
                'east' => $doc['east'],
            ]);
        }
        DB::commit();
        if ($license) {
            $qr = QrCode::size(260)->generate('https://qr.webbing-agency.com/licenses/' . $license->id);
            $license->qr_code = $qr;
            $license->save();

            return redirect()->to("/licenses/" . $license->id);
        }

        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                "status" => false,
                "message" => "Course creation failed",
                "error" => $e->getMessage()
            ], 500);
        }


    }

    public function download($id)
    {
        // Retrieve the SVG data from the database
        $svgRecord = License::find($id);

        if (!$svgRecord || !$svgRecord->qr_code) {
            abort(404, 'SVG not found');
        }

        $svgContent = $svgRecord->qr_code;

        // Prepare the response
        $headers = [
            'Content-Type' => 'image/svg+xml',
            'Content-Disposition' => 'attachment; filename="file.svg"',
        ];

        return Response::make($svgContent, 200, $headers);
    }
    public function show(License $license)
    {
        return view('licenses.show', compact('license'));
    }

    public function edit(License $license)
    {
        return view('licenses.edit', compact('license'));
    }

    public function update(Request $request, License $license)
    {
        $request->validate([
            'national_license_no' => 'nullable|string',
            'license_no' => 'required|string',
            'occupancy_certificate_number' => 'required|string',
            'license_starting_date' => 'required|date',
            'license_ending_date' => 'required|date',
            'license_type' => 'required|string',
            'building_type' => 'required|string',
            'buildings_num' => 'required|',
            'does_license_related_to_another' => 'required|string',
            'main_use' => 'required|string',
            'secondary_use' => 'required|string',
            'building_distance' => 'required|',
            'land_distance' => 'required|',
            'building_desc' => 'required|string',
        ]);

        $license->update($request->all());

        return redirect()->to('/admin/dashboard');
    }

    public function destroy(License $license)
    {
        $license->delete();

        return redirect()->route('licenses.index');
    }
}
