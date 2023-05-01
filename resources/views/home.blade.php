@extends('layouts.layout')
@section('content')
    <!-- Main Content -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <h1>ยินดีต้อนรับ</h1>
                <p>ระบบทะเบียนผู้ป่วย โรงพยาบาลเพชรรัตน์</p>
                <a href="{{ route('main') }}" class="btn btn-primary">เริ่มต้นใช้งาน</a>
            </div>
            <div class="col-md-6">
                <img src="{{ url('public/img/logo_text.png') }}" alt="Placeholder image" class="img-fluid">
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
                <div class="modal-body">

                    <form action="#" method="post">
                        @csrf
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
                                <input type="text" name="citizenid" id="citizenid"
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

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
