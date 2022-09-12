@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Biodata') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('update-biodata') }}">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Posisi Yang Dilamar') }}</label>
                            <div class="col-md-6">
                                <input id="applied_position" type="text" class="form-control" name="applied_position" value="{{ old('email') }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="" required>         
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('No KTP') }}</label>
                            <div class="col-md-6">
                                <input id="ktp" type="text" class="form-control" name="ktp" value="" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Tempat Lahir') }}</label>
                            <div class="col-md-6">
                                <input id="birth_place" type="text" class="form-control" name="birth_place" value="" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Tanggal Lahir') }}</label>
                            <div class="col-md-6">
                                <input id="birth_date" type="text" class="form-control" name="birth_date" value="" required>
                                <input class="date form-control" type="text">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Jenis Kelamin') }}</label>
                            <div class="col-md-6">
                                <select name="gender" class="form-control" required>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Agama') }}</label>
                            <div class="col-md-6">
                                <input id="religion" type="text" class="form-control" name="religion" value="" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Golongan Darah') }}</label>
                            <div class="col-md-6">
                                <input id="blood_type" type="text" class="form-control" name="blood_type" value="" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>
                            <div class="col-md-6">
                                <input id="marital_status" type="text" class="form-control" name="marital_status" value="" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Alamat KTP') }}</label>
                            <div class="col-md-6">
                                <input id="ktp_address" type="text" class="form-control" name="ktp_address" value="" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Alamat Tinggal') }}</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('No Telp') }}</label>
                            <div class="col-md-6">
                                <input id="phone_number" type="text" class="form-control" name="phone_number" value="" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Orang Terdekat Yang Dihubungi') }}</label>
                            <div class="col-md-6">
                                <input id="nearest_people" type="text" class="form-control" name="nearest_people" value="" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label>{{ __('Pendidikan Terakhir') }}</label>
                            <table class="table table-bordered" id="dynamicAddRemove">
                                <tr>
                                    <th>Jenjang Pendidikan Terakhir</th>
                                    <th>Nama Institusi</th>
                                    <th>Jurusan</th>
                                    <th>Tahun Lulus</th>
                                    <th>IPK</th>
                                </tr>
                                <tr>
                                    <td><input type="text" name="education_level1" class="form-control" /></td>
                                    <td><input type="text" name="education_place_name1" class="form-control" /></td>
                                    <td><input type="text" name="major1" class="form-control" /></td>
                                    <td><input type="text" name="graduation_year1" class="form-control" /></td>
                                    <td><input type="text" name="ipk1" class="form-control" /></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="education_level2" class="form-control" /></td>
                                    <td><input type="text" name="education_place_name2" class="form-control" /></td>
                                    <td><input type="text" name="major2" class="form-control" /></td>
                                    <td><input type="text" name="graduation_year2" class="form-control" /></td>
                                    <td><input type="text" name="ipk2" class="form-control" /></td>
                                </tr>
                            </table>
                        </div>
                        <div class="row mb-3">
                            <label>{{ __('Riwayat Pelatihan') }}</label>
                            <table class="table table-bordered" id="dynamicAddRemove">
                                <tr>
                                    <th>Nama Kursus/Seminar</th>
                                    <th>Sertifikat</th>
                                    <th>Tahun</th>
                                </tr>
                                <tr>
                                    <td><input type="text" name="trainning_name1" class="form-control" /></td>
                                    <td><input type="text" name="is_certified1" class="form-control" /></td>
                                    <td><input type="text" name="trainning_year1" class="form-control" /></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="trainning_name2" class="form-control" /></td>
                                    <td><input type="text" name="is_certified2" class="form-control" /></td>
                                    <td><input type="text" name="trainning_year2" class="form-control" /></td>
                                </tr>
                            </table>
                        </div>
                        <div class="row mb-3">
                            <label>{{ __('Riwayat Pekerjaan') }}</label>
                            <table class="table table-bordered" id="dynamicAddRemove">
                                <tr>
                                    <th>Nama Perusahaan</th>
                                    <th>Posisi Terakhir</th>
                                    <th>Pendidikan Terakhir</th>
                                    <th>Tahun</th>
                                </tr>
                                <tr>
                                    <td><input type="text" name="company_name1" class="form-control" /></td>
                                    <td><input type="text" name="last_position1" class="form-control" /></td>
                                    <td><input type="text" name="last_salary1" class="form-control" /></td>
                                    <td><input type="text" name="work_yea1r" class="form-control" /></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="company_name2" class="form-control" /></td>
                                    <td><input type="text" name="last_position2" class="form-control" /></td>
                                    <td><input type="text" name="last_salary2" class="form-control" /></td>
                                    <td><input type="text" name="work_year2" class="form-control" /></td>
                                </tr>
                            </table>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Skill') }}</label>
                            <div class="col-md-6">
                                <input id="skills" type="text" class="form-control" name="skills" value="" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Bersedia Ditempatkan di Seluruh Kantor Perusahaan') }}</label>
                            <div class="col-md-6">
                                <input id="is_willing_travel" type="text" class="form-control" name="is_willing_travel" value="" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Penghasilan yang diharapkan') }}</label>
                            <div class="col-md-6">
                                <input id="expected_salary" type="text" class="form-control" name="expected_salary" value="" required>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ubah') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <script type="text/javascript">  
        $(document).ready(function () {   
            $('.date').datepicker({  
                format: 'mm-dd-yyyy'
            });  
        })
    </script>
@endsection
