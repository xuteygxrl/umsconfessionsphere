@extends('layouts.app')
@section('content')
    <section>

        <div class="container justify-content-center">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="card p-4" style="width: 500px; border-radius: 10px;">
                        <!-- Form Fields -->
                        <form action="{{ route('profile.update') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name', $user->name) }}">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email', $user->email) }}">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" value="{{ old('phone', $user->phone) }}">
                            </div>
                        
                            <!-- Action Buttons -->
                            <div class="d-flex justify-content-between mt-3">
                                <button type="submit" class="btn btn-danger">Save</button>
                                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#changePasswordModal">Change Password</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Change Password Form Modal -->
                <form action="{{ route('profile.changePassword') }}" method="POST">
                    @csrf
                    <div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="changePasswordModalLabel">Change Password</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="current_password" class="form-label">Current Password</label>
                                        <input type="password" class="form-control" id="current_password" name="current_password" required>
                                        @error('current_password')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="new_password" class="form-label">New Password</label>
                                        <input type="password" class="form-control" id="new_password" name="new_password" required>
                                        @error('new_password')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
                                        <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- JavaScript to open modal if errors exist -->
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        @if ($errors->any())
                            var changePasswordModal = new bootstrap.Modal(document.getElementById('changePasswordModal'), {});
                            changePasswordModal.show();
                        @endif
                    });
                </script>
            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection