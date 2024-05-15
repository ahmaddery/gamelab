
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Edit Category</h1>
                <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="kendaraan">Kendaraan</label>
                        <input type="text" class="form-control" id="kendaraan" name="kendaraan" value="{{ $category->kendaraan }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
