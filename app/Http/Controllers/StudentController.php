<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()    
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        $students = [
            [
                'id' => 1,
                'nis' => '1001',
                'name' => 'Andi',
                'class' => 'XII TKJ 1',
                'major' => 'TKJ'
            ],
            [
                'id' => 2,
                'nis' => '1002',
                'name' => 'Budi',
                'class' => 'XII AKL 1',
                'major' => 'AKL'
            ],
        ];
        return view('students.index', [
        'title' => $title,
        'students' => $students
        ]);
    }

    public function show(string $id)
    {
        $title = "Sistem Sekolah - Detail";
        return view('students.show',[
            'title' => $title
        ]);
    }

    public function create()
    {
        $title = "Sistem Sekolah - Tambah ";
        return view('students.create');
    }

    public function edit(string $id)
    {
        return view('students.edit');
    }

    public function update(string $id)
    {
        return "updating students with ID: $id";
    }

    public function destroy(string $id)
    {
        return "deleting students with ID: $id";
    }

    public function store()
    {
        return "storing new student";
    }
}
