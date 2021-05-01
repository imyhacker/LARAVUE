<template>
    <div>
        <Layout>

        </Layout>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <form @submit.prevent="kirimdata">
                        <div class="row">


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Siswa</label>
                                    <input type="text" class="form-control" v-model="form.nama_siswa">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-control" v-model="form.gender_siswa">
                                        <option value="L">L</option>
                                        <option value="P">P</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">NISN</label>
                                    <input type="number" class="form-control" v-model="form.nisn">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Tanggal Lahir Siswa</label>
                                    <input type="date" class="form-control" v-model="form.tanggal_lahir">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Tempat Lahir Siswa</label>
                                    <input type="text" class="form-control" v-model="form.tempat_lahir">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Asal Sekolah SMP</label>
                                    <input type="text" class="form-control" v-model="form.askol">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nomor HP Siswa</label>
                                    <input type="number" class="form-control" v-model="form.hp_siswa">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Alamat Siswa</label>
                                    <textarea class="form-control" rows="3" v-model="form.alamat_siswa"></textarea>
                                </div>
                            </div>

                            <hr>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nama Ortu / Wali</label>
                                    <input type="text" class="form-control" v-model="form.nama_ortu">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nomor Kartu Keluarga</label>
                                    <input type="number" class="form-control" v-model="form.kk">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nomor KTP Ortu / Wali</label>
                                    <input type="number" class="form-control" v-model="form.ktp">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nomor HP Ortu / Wali</label>
                                    <input type="number" class="form-control" v-model="form.hp_ortu">
                                </div>
                            </div>


                             <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Pekerjaan Ortu / Wali</label>
                                    <select class="form-control" id="exampleFormControlSelect1" v-model="form.pekerjaan">
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
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Alamat Ortu / Wali</label>
                                    <textarea class="form-control" rows="3" v-model="form.alamat_ortu"></textarea>
                                </div>
                            </div>

                           <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Rekomendasi</label>
                                    <input type="text" class="form-control" v-model="form.rek">
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


</template>

<script>
    import Layout from '../../components/Layout'

    export default {
      data() {
        return {
          form: {
              nama_siswa: '',
              gender_siswa: '',
              nisn: '',
              tanggal_lahir: '',
              tempat_lahir: '',
              askol: '',
              hp_siswa: '',
              alamat_siswa: '',
              // ORTU
              nama_ortu: '',
              kk: '',
              ktp: '',
              hp_ortu: '',
              pekerjaan: '',
              alamat_ortu: '',
              //REK
              rek: ''
          }
        }
      },
        components: {
            Layout
        },
        methods:{
            kirimdata() {
                this.$inertia.post('/home/daftarsiswa/hdf/send', this.form)
            }
        }
    }

</script>
