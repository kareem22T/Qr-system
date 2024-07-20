<?php

namespace App\Http\Controllers;

use App\Models\License;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Response;
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
        ]);

        $license = License::create($request->all());

        if ($license) {
            $qr = QrCode::size(260)->generate('http://127.0.0.1:8001/licenses/' . $license->id);
            $license->qr_code = $qr;
            $license->save();

            return redirect()->to("/licenses/" . $license->id);
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
