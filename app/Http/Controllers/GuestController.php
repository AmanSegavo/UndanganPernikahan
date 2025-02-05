<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GuestController extends Controller
{
    /**
     * Menampilkan daftar tamu.
     */
    public function index()
    {
        $guests = Guest::all();
        return view('guests.index', compact('guests'));
    }

    /**
     * Menampilkan form untuk membuat tamu baru.
     */
    public function create()
    {
        return view('guests.create');
    }

    /**
     * Menyimpan tamu baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'nullable|email|max:255',
            'phone'   => 'required|string|max:20|regex:/^\\+?[0-9\s\-]+$/',
            'address' => 'nullable|string',
        ]);

        Guest::create([
            'name'             => $request->name,
            'email'            => $request->email,
            'phone'            => $request->phone,
            'address'          => $request->address,
            'invitation_link'  => Str::uuid(),
        ]);

        return redirect()->route('guests.index')->with('success', 'Tamu berhasil ditambahkan!');
    }

    /**
     * Menampilkan detail tamu.
     */
    public function show(Guest $guest)
    {
        return view('guests.show', compact('guest'));
    }

    /**
     * Menampilkan form untuk mengedit tamu.
     */
    public function edit(Guest $guest)
    {
        return view('guests.edit', compact('guest'));
    }

    /**
     * Mengupdate data tamu.
     */
    public function update(Request $request, Guest $guest)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'nullable|email|max:255',
            'phone'   => 'required|string|max:20|regex:/^\\+?[0-9\s\-]+$/',
            'address' => 'nullable|string',
        ]);

        $guest->update($request->only(['name', 'email', 'phone', 'address']));

        return redirect()->route('guests.index')->with('success', 'Data tamu berhasil diperbarui!');
    }

    /**
     * Menghapus tamu.
     */
    public function destroy(Guest $guest)
    {
        $guest->delete();
        return redirect()->route('guests.index')->with('success', 'Tamu berhasil dihapus!');
    }

    /**
     * Menampilkan undangan berdasarkan UUID.
     */
    public function showInvitation($uuid)
    {
        $guest = Guest::where('invitation_link', $uuid)->firstOrFail();
        return view('invitation', compact('guest'));
    }

    public function showOpening($uuid)
    {
        $guest = Guest::where('invitation_link', $uuid)->firstOrFail();
        return view('opening', compact('guest'));
    }

    public function showQuotes($uuid)
{
    // Cek apakah data berhasil ditemukan
    $guest = Guest::where('invitation_link', $uuid)->first();

    if (!$guest) {
        abort(404, 'Guest not found');
    }

    return view('quotes', compact('guest'));
}
    public function showAkad($uuid)
{
    // Cek apakah data berhasil ditemukan
    $guest = Guest::where('invitation_link', $uuid)->first();

    if (!$guest) {
        abort(404, 'Guest not found');
    }

    return view('akad', compact('guest'));
}
    public function showGallery($uuid)
{
    // Cek apakah data berhasil ditemukan
    $guest = Guest::where('invitation_link', $uuid)->first();

    if (!$guest) {
        abort(404, 'Guest not found');
    }

    return view('gallery', compact('guest'));
}
    public function showMempelai($uuid)
{
    // Cek apakah data berhasil ditemukan
    $guest = Guest::where('invitation_link', $uuid)->first();

    if (!$guest) {
        abort(404, 'Guest not found');
    }

    return view('mempelai', compact('guest'));
}
    public function showGift($uuid)
{
    // Cek apakah data berhasil ditemukan
    $guest = Guest::where('invitation_link', $uuid)->first();

    if (!$guest) {
        abort(404, 'Guest not found');
    }

    return view('gift', compact('guest'));
}

    public function showMaps($uuid)
{
    // Cek apakah data berhasil ditemukan
    $guest = Guest::where('invitation_link', $uuid)->first();

    if (!$guest) {
        abort(404, 'Guest not found');
    }

    return view('maps', compact('guest'));
}

    public function showResepsi($uuid)
{
    // Cek apakah data berhasil ditemukan
    $guest = Guest::where('invitation_link', $uuid)->first();

    if (!$guest) {
        abort(404, 'Guest not found');
    }

    return view('resepsi', compact('guest'));
}

    public function showRSVP($uuid)
{
    // Cek apakah data berhasil ditemukan
    $guest = Guest::where('invitation_link', $uuid)->first();

    if (!$guest) {
        abort(404, 'Guest not found');
    }

    return view('rsvp', compact('guest'));
}

    public function showThanks($uuid)
{
    // Cek apakah data berhasil ditemukan
    $guest = Guest::where('invitation_link', $uuid)->first();

    if (!$guest) {
        abort(404, 'Guest not found');
    }

    return view('thanks', compact('guest'));
}





    /**
     * Mengkonfirmasi kehadiran tamu.
     */
    public function confirmAttendance(Request $request, $id)
    {
        $guest = Guest::findOrFail($id);
        $guest->update(['attendance_status' => $request->attendance_status]);

        return redirect()->back()->with('success', 'Terima kasih telah mengkonfirmasi kehadiran!');
    }
}