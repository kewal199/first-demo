<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Table</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container mt-5">
    <div class="card shadow-lg rounded-4">
      <div class="card-header bg-success text-white text-center">
        <h4>User List</h4>
      </div>
      <div class="card-body">
        @if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif
      <a href="{{route('user-form')}}"> <button class="btn btn-primary">Add User</button></a><br><br>
        <table class="table table-striped table-bordered table-hover align-middle">
          <thead class="table-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Contact</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @php $sr=1; @endphp
            @foreach($users as $user)
           
            <tr>
                <td>{{$sr++}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->contact}}</td>
                <td> <button class="btn btn-success" 
                            data-bs-toggle="modal" 
                            data-bs-target="#editModal{{ $user->id }}">
                        EDIT
                    </button> &nbsp;
                <form action="{{ route('delete-row', $user->id) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?');">
                        Delete
                    </button>
                </form>

              </td>
            </tr>
            <!-- Edit Modal for each user -->
        <div class="modal fade" id="editModal{{ $user->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $user->id }}" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $user->id }}">Edit User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form method="POST" action="{{ route('update-user', $user->id) }}">
                @csrf
                <div class="modal-body">
                  <!-- Username -->
                  <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" value="{{ $user->name }}" required>
                  </div>
                  <!-- Email -->
                  <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                  </div>
                  <!-- Contact -->
                  <div class="mb-3">
                    <label class="form-label">Contact</label>
                    <input type="text" class="form-control" name="contact" value="{{ $user->contact }}" required>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
            
            @endforeach
           
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script>
    // Success message auto-hide after 3 sec
    setTimeout(function() {
        let success = document.getElementById('successMessage');
        if (success) {
            success.style.display = 'none';
        }
    }, 3000); // 3000ms = 3 seconds
</script>


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
