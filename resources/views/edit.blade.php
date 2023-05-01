@extends('layouts.layout')
@section('content')
    <!-- Main Content -->
    <div class="container my-5">
        <div class="content my-5">
            <div class="row my-3">
                <div class="col">
                    <a href="{{ route('main') }}">
                        < กลับ</a>
                </div>
            </div>

            <form action="{{ route('patient.update') }}" method="post">
                @csrf
                <div class="row my-3">
                    <div class="col">
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="row my-3">
                            <div class="col-6">
                                <label for="name" class="form-label">ชื่อ</label>
                                <input type="text" name="name" id="name" value="{{ $data->name }}"
                                    class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="lastname" class="form-label">นามสกุล</label>
                                <input type="text" name="lastname" id="lastname" value="{{ $data->lastname }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col">
                                <label for="citizenid" class="form-label">เลขประจำตัวประชาชน</label>
                                <input type="text" name="citizen_id" id="citizen_id" value="{{ $data->citizen_id }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-6">
                                <label for="age" class="form-label">อายุ</label>
                                <input type="number" name="age" id="age" value="{{ $data->age }}"
                                    class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="gender" class="form-label">เพศ</label>
                                <select name="gender" id="gender" class="form-select">
                                    <option value="male" {{ ( $data->gender == "male") ? 'selected' : '' }}>ชาย</option>
                                    <option value="female" {{ ( $data->gender == "female") ? 'selected' : '' }}>หญิง</option>
                                </select>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col">
                                <label for="address" class="form-label">ที่อยู่</label>
                                <textarea name="address" id="address" cols="30" rows="5" class="form-control">{{ $data->address }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col">
                            <button type="submit" class="btn btn-block btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
