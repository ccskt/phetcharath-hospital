@extends('layouts.layout')
@section('content')
    <!-- Main Content -->
    <div class="container my-5">
        <div class="content my-5">
            @if (session('success'))
                <div class="row my-3">
                    <div class="col">
                        <div class="alert alert-success" role="alert">
                            {{ session('success')}}
                        </div>
                    </div>
                </div>
            @endif
            <div class="row my-3">
                <div class="col">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newPatientModal">+
                        เพิ่มข้อมูลผู้ป่วย</button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table id="myTable" class="table display">
                        <thead>
                            <tr>
                                <th>ชื่อ</th>
                                <th>นามสกุล</th>
                                <th>เลขประจำตัวประชาชน</th>
                                <th>อายุ</th>
                                <th>เพศ</th>
                                <th>ที่อยู่</th>
                                <th>การดำเนินการ</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if ($patients_data != null)
                                @foreach ($patients_data as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->lastname }}</td>
                                        <td>{{ $item->citizen_id }}</td>
                                        <td>{{ $item->age }}</td>
                                        <td>{{ $item->gender }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>
                                            <a href="{{ route('patient.edit', $item->id) }}"
                                                class="btn btn-warning">แก้ไข</a>
                                            <a href="{{ route('patient.destroy', $item->id) }}"
                                                class="btn btn-danger">ลบ</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <p>ไม่มีข้อมูล</p>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="newPatientModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">บันทึกข้อมูลผู้ป่วยรายใหม่</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('patient.create') }}" method="post">@csrf
                    <div class="modal-body">
                        <div class="row my-3">
                            <div class="col-6">
                                <label for="name" class="form-label">ชื่อ</label>
                                <input type="text" name="name" id="name" placeholder="กรุณาระบุชื่อ"
                                    class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="lastname" class="form-label">นามสกุล</label>
                                <input type="text" name="lastname" id="lastname" placeholder="กรุณาระบุนามสกุล"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col">
                                <label for="citizenid" class="form-label">เลขประจำตัวประชาชน</label>
                                <input type="text" name="citizen_id" id="citizen_id"
                                    placeholder="กรุณากรอกเลขบัตรประจำตัวประชาชน" class="form-control">
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-6">
                                <label for="age" class="form-label">อายุ</label>
                                <input type="number" name="age" id="age" placeholder="กรุณาระบุอายุ"
                                    class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="gender" class="form-label">เพศ</label>
                                <select name="gender" id="gender" class="form-select">
                                    <option value="" selected disabled hidden>กรุณาระบุเพศ</option>
                                    <option value="male">ชาย</option>
                                    <option value="female">หญิง</option>
                                </select>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col">
                                <label for="address" class="form-label">ที่อยู่</label>
                                <textarea name="address" id="address" cols="30" rows="5" placeholder="กรุณาระบุที่อยู่"
                                    class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                        <button type="submit" class="btn btn-success">บันทึก</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
