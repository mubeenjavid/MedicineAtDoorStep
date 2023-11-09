<!-- Modal -->
<div class="modal fade" id="signupmodel" tabindex="-1" aria-labelledby="signupmodel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupmodel">signup for new Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/darks/partials/_handleSignup.php" method="POST" id="form-signup" name="form-signup">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleInputUsername" class (required, at least 2 characters)="form-label">Firstname</label>
                        <input type="Username" class="form-control" id="first_name" name="first_name" minlength="2" type="text" required
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Please type your Firstname.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputUsername" class (required,at least 2 characters)="form-label">Lastname</label>
                        <input type="Username" class="form-control" id="last_name" name="last_name" required
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Please type your Lastname.</div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class (required)="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class(required)="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class(required)="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                    </div>
                  
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Gender</label>
                        <select id="gender" name="gender" class="form-control">
                            <option value="">Select Gender</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                    </div>
                    <!-- <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">user_type</label>
                        <select id="gender" name="gender" class="form-control">
                            <option value="">Select user_type</option>
                            <option value="1">user</option>
                            <option value="2">Admin</option>
                        </select>
                    </div> -->


                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Signup</button>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </form>
        </div>
    </div>
</div>