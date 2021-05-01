<template>
    <div>
        <Layout></Layout>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <h4>Data Siswa</h4>
                    <ul>
                        <li>
                            Nama Siswa : {{ daf.nama_siswa }}
                        </li>
                        <li>
                            Jurusan Yang Diminati : {{ daf.jurusan }}
                        </li>
                        <li>
                            Asal Sekolah : {{ daf.askol_siswa }}
                        </li>
                        <li>
                            NISN : {{ daf.nisn }}
                        </li>
                        <li>
                            Gender : {{ daf.gender_siswa }}
                        </li>
                        <li>
                            Tempat Tanggal Lahir : {{ daf.tempat_lahir_siswa }}, {{ daf.lahir_siswa }}
                        </li>
                        <li>
                            Nomor Telpon : {{ daf.hp_siswa }}
                        </li>
                        <li>
                            Alamat Siswa : {{ daf.alamat_siswa }}
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4>Data Orang Tua / Wali</h4>
                    <ul>
                        <li>
                            Nama Ortu / Wali : {{ daf.nama_ortu }}
                        </li>
                        <li>
                            KTP Ortu / Wali : {{ daf.ktp_ortu }}
                        </li>
                        <li>
                            KK Ortu / Wali : {{ daf.kk_ortu }}
                        </li>
                        <li>
                            Nomor Telpon : {{ daf.hp_ortu }}
                        </li>
                        <li>
                            Pekerjaan Ortu / Wali: {{ daf.pekerjaan_ortu }}
                        </li>
                        <li>
                            Alamat Ortu / Wali : {{ daf.alamat_ortu }}
                        </li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <h4>Data Tambahan</h4>
                    <ul>
                        <li>
                            Status : {{ daf.status }}
                        </li>
                         <li>
                            Rekomendasi : {{ daf.rekomendasi }}
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    import Layout from '../../components/Layout'

    export default {
        components: {
            Layout
        },
        props: {
            daf: Object
        }
    }

</script>
