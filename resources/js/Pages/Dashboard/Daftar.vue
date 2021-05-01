<template>
    <div>
        <Layout></Layout>
       
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12">

                    <div v-if="$page.props.flash.message" class="alert alert-warning alert-dismissible fade show"
                        role="alert">
                        <strong>Yapss!! </strong> {{ $page.props.flash.message }}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                </div>

                <div class="col-md-12 mt-4">
                    <div class="d-flex justify-content-center">
                        <h4>JURUSAN</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="table_jurusan">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jurusan</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(jur, i) in jurusan" :key="i.id">
                                    <td>{{ i+1 }}</td>
                                    <td>{{ jur.n_jurusan }}</td>
                                    <td>
                                        <inertia-link> <i class="fas fa-edit"></i> </inertia-link>
                                   
                                        <inertia-link> <i class="fas fa-trash"></i> </inertia-link>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="col-md-12 mt-4">
                    <div class="d-flex justify-content-center">
                        <h4>DAFTAR SISWA</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="table_daftar">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">NISN</th>
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">Asal Sekolah</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(row, index) in data" :key="index.id">
                                    <th scope="row">{{ index + 1 }}</th>
                                    <td>{{ row.nama_siswa }}</td>
                                    <td>{{ row.gender_siswa }}</td>
                                    <td>{{ row.nisn }}</td>
                                    <td>{{ row.jurusan }}</td>
                                    <td>{{ row.askol_siswa }}</td>
                                    <td v-if="row.status == 0">Masih Di Proses</td>
                                    <td>
                                        <inertia-link :href="`/home/datasiswa/${row.id}/look`"> <i class="fas fa-eye"></i> </inertia-link>
                                        <inertia-link> <i class="fas fa-edit"></i> </inertia-link>
                                        <inertia-link> <i class="fas fa-download"></i> </inertia-link>
                                        <inertia-link> <i class="fas fa-trash"></i> </inertia-link>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-12 mt-4">
                    <div class="d-flex justify-content-center">
                        <h4>SISWA DI TERIMA</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="table_jurusan">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Siswa</th>
                                    <th>Asal Sekolah</th>
                                    <th>Jurusan</th>
                                    <th>No Hp</th>
                                    <th>Tanda Tangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(jur, i) in jurusan" :key="i.id">
                                    <td>{{ i+1 }}</td>
                                    <td>{{ jur.n_jurusan }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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
            jurusan: Array,
            data: Array

        },
        mounted() {
            $(document).ready(function () {
                $('#table_daftar').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });
                $('#table_jurusan').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });
            });
        }
    }

</script>
