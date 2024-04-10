<form action="{{ route('student.update', $task->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="name">Name:</label>
                <input class="form-control" type="text" id="name" name="name" placeholder="Enter Student Name" value="{{ $task->name }}" aria-label="Student Name">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="age">Age:</label>
                <input class="form-control age" type="number" id="age" name="age" placeholder="Enter Student Age" value="{{ $task->age }}" aria-label="Student Age">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <label>Status:</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="status1" value="1" {{ $task->status == 1 ? 'checked' : '' }}>
                <label class="form-check-label" for="status1">Active</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="status0" value="0" {{ $task->status == 0 ? 'checked' : '' }}>
                <label class="form-check-label" for="status0">Inactive</label>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-6">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </div>
</form>
