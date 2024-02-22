<!DOCTYPE html>
<html>
    <head>
        <title>Create Siswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body>
        <div class="mb-3 text-center">
        <h1>Tambah Siswa</h1>
        <hr/>
        </div>



        <div class="card-body">
                    <form method="POST" action="{{ route('siswa.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="nis">NIS</label>
                            <input type="text" name="nis" id="nis" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" class="form-control" required>
                                <option value="M">Laki-laki</option>
                                <option value="F">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="rombel">Rombel</label>
                            <select name="rombel" id="rombel" class="form-control" required>
                                <option value="A">Rombel A</option>
                                <option value="B">Rombel B</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <select name="kelas" id="kelas" class="form-control" required>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                                <option value="XIII">XIII</option>
                            </select>
                        </div>

                        <div class="form-group">
                                <label class="font-weight-bold">FOTO</label>
                                <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
                            
                                <!-- error message untuk foto -->
                                @error('foto')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
        
    </body>
</html>