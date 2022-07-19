@extends("master")
@section("content")
    <form action="/parts/create" method="post" class="row row-cols-1 g-3 needs-validation w-50 m-auto" novalidate>
        @csrf
        <div class="col-12">
            <label for="mfg_pn" class="form-label">MFG PN</label>
            <input type="text" class="form-control" id="mfg_pn" name="mfg_pn" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-12">
            <label for="description" class="form-label">Description</label>
            <textarea  class="form-control" id="description" name="description"  required></textarea>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>

        <div class="col-12">
            <label for="group" class="form-label">Group</label>
            <select class="form-select" id="group" name="group" required>
                <option selected disabled value="">Choose...</option>
                <option>Resister</option>
                <option>Capacitor</option>
                <option>Regulator</option>
                <option>Unknown</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid state.
            </div>
        </div>


        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
@endsection
