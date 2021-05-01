<template>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="container mt-5">
            <div class="row">

                <div class="col-md-12">
                    <form @submit.prevent="kirimdata">
                        <div class="row">


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Siswa</label>
                                    <input type="text" class="form-control" v-model="form.nama_siswa">
                                    <p class="text-danger" v-if="errors.nama_siswa">{{ errors.nama_siswa }}</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-control" v-model="form.gender_siswa">
                                        <option value="L">L</option>
                                        <option value="P">P</option>
                                    </select>
                                    <p class="text-danger" v-if="errors.gender_siswa">{{ errors.gender_siswa }}</p>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">NISN</label>
                                    <input type="number" class="form-control" v-model="form.nisn">
                                    <p class="text-danger" v-if="errors.nisn">{{ errors.nisn }}</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Tanggal Lahir Siswa</label>
                                    <input type="date" class="form-control" v-model="form.lahir_siswa">
                                    <p class="text-danger" v-if="errors.lahir_siswa">{{ errors.lahir_siswa }}</p>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Tempat Lahir Siswa</label>
                                    <input type="text" class="form-control" v-model="form.tempat_lahir_siswa">
                                    <p class="text-danger" v-if="errors.tempat_lahir_siswa">
                                        {{ errors.tempat_lahir_siswa }}</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Asal Sekolah SMP</label>
                                    <input type="text" class="form-control" v-model="form.askol_siswa">

                                    <p class="text-danger" v-if="errors.askol_siswa">{{ errors.askol_siswa }}</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nomor HP Siswa</label>
                                    <input type="number" class="form-control" v-model="form.hp_siswa">
                                    <p class="text-danger" v-if="errors.hp_siswa">{{ errors.hp_siswa }}</p>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Alamat Siswa</label>
                                    <textarea class="form-control" rows="3" v-model="form.alamat_siswa"></textarea>
                                    <p class="text-danger" v-if="errors.alamat_siswa">{{ errors.alamat_siswa }}</p>
                                </div>
                            </div>

                            <hr>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nama Ortu / Wali</label>
                                    <input type="text" class="form-control" v-model="form.nama_ortu">
                                    <p class="text-danger" v-if="errors.nama_ortu">{{ errors.nama_ortu }}</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nomor Kartu Keluarga</label>
                                    <input type="number" class="form-control" v-model="form.kk_ortu">
                                    <p class="text-danger" v-if="errors.kk_ortu">{{ errors.kk_ortu }}</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nomor KTP Ortu / Wali</label>
                                    <input type="number" class="form-control" v-model="form.ktp_ortu">

                                    <p class="text-danger" v-if="errors.ktp_ortu">{{ errors.ktp_ortu }}</p>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nomor HP Ortu / Wali</label>
                                    <input type="number" class="form-control" v-model="form.hp_ortu">

                                    <p class="text-danger" v-if="errors.hp_ortu">{{ errors.hp_ortu }}</p>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Pekerjaan Ortu / Wali</label>
                                    <select class="form-control" id="exampleFormControlSelect1"
                                        v-model="form.pekerjaan_ortu">
                                        <option value="Buruh">BURUH</option>
                                        <option value="Karyawan Swasta">KARYAWAN SWASTA</option>
                                        <option value="Nelayan">NELAYAN</option>
                                        <option value="Pedagang Eceran">PEDAGANG ECERAN</option>
                                        <option value="Pekerja Pabrik">PEKERJA PABRIK</option>
                                        <option value="Pengajar Honorer">PENGAJAR HONORER</option>
                                        <option value="Petani">PETANI</option>
                                        <option value="PNS">PNS</option>
                                        <option value="Swasta">SWASTA</option>
                                        <option value="TNI / POLRI">TNI / POLRI</option>
                                        <option value="Ibu Rumah Tangga">IBU RUMAH TANGGA</option>
                                        <option value="Tkng. Bangunan">TKNG. BANGUNAN</option>
                                        <option value="Dokter">DOKTER</option>
                                    </select>
                                    <p class="text-danger" v-if="errors.pekerjaan_ortu">{{ errors.pekerjaan_ortu }}</p>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Alamat Ortu / Wali</label>
                                    <textarea class="form-control" rows="3" v-model="form.alamat_ortu"></textarea>
                                    <p class="text-danger" v-if="errors.alamat_ortu">{{ errors.alamat_ortu }}</p>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Rekomendasi</label>
                                    <input type="text" class="form-control" v-model="form.rek">
                                    <p class="text-danger" v-if="errors.rek">{{ errors.rek }}</p>
                                </div>
                            </div>

                            <div class="col-md-12 mt-3 ">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-block btn-outline-success" value="Daftarkan">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</template>


<script>

    export default {
        data() {
            return {
                form: {
                    nama_siswa: '',
                    gender_siswa: '',
                    nisn: '',
                    lahir_siswa: '',
                    tempat_lahir_siswa: '',
                    askol_siswa: '',
                    hp_siswa: '',
                    alamat_siswa: '',
                    // ORTU
                    nama_ortu: '',
                    kk_ortu: '',
                    ktp_ortu: '',
                    hp_ortu: '',
                    pekerjaan_ortu: '',
                    alamat_ortu: '',
                    //REK
                    rek: ''
                }
            }
        },
        props: {
            errors: Object
        },
        components: {
            Layout
        },
        methods: {
            kirimdata() {
                this.$inertia.post('/home/daftarsiswa/hdf', this.form)
            }
        }
    }

</script>
