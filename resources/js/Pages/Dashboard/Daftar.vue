<template>
<div>
    <Layout></Layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <inertia-link class="btn btn-outline-info btn-block" href="/home/daftarsiswa/hdf">Tambah Siswa Baru</inertia-link>
            </div>

            <div class="col-md-12 mt-4">
                <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
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
    }
}
</script>