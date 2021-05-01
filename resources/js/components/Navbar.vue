<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-fixed-top mar-10 navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <inertia-link href="/home" class="nav-link">Home</inertia-link>
                        </li>
                      
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Menu Siswa
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <inertia-link class="dropdown-item" href="/home/daftarsiswa" >Daftar Siswa</inertia-link>
                                <div class="dropdown-divider"></div>
                                <inertia-link class="dropdown-item"  href="/home/daftarsiswa/hdf">Tambah Siswa</inertia-link>
                                 <inertia-link class="dropdown-item"  href="/home/daftarsiswa/hapussemua">Hapus Semua Siswa</inertia-link>
                                      <inertia-link class="dropdown-item"  href="/home/daftarsiswa/hapussemua">Terima Semua Siswa</inertia-link>
                            </div>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                More
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Tambah
                                    Jurusan</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>



        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Jurusan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form @submit.prevent="kirimdata">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tambah Jurusan</label>
                                <input type="text" class="form-control" v-model="jur.n_jurusan"
                                    placeholder="Tambah Jurusan">

                            </div>


                            <hr>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                jur: {
                    n_jurusan: '',
                }
            }
        },
        methods: {
            kirimdata() {
                this.$inertia.post('/home/daftarsiswa/tambahjurusan', this.jur)
            }
        }
    }

</script>
