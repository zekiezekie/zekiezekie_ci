<?=$this->extend('layout/main') ?>

<?=$this->section('content') ?>

<div class= "containers">
    <div class="card mt-3">
        <div class="card-body">
        <h5 class="card-title">Add User</h5>
        <div class="mb-3">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name"/>
        </div>

        <div class="mb-3">
            <label for="middle_name">Middle Name </label>
            <input type="text" class="form-control" id="middle_name"/>
        </div>

        <div class="mb-3">
            <label for="last_name">Last Name </label>
            <input type="text" class="form-control" id="last_name"/>
        </div>

        <div class="mb-3">
            <label for="age_name">Age Name </label>
            <input type="text" class="form-control" id="age_name"/>
        </div>

        <div class="mb-3">
                    <label for="age">Gender</label>
                    <select class="form-select">
                        <option value="" selected>N/A</option>
                    </select>
                </div>

        <div class="mb-3">
            <label for="email_name">Email Name </label>
            <input type="text" class="form-control" id="email_name"/>
        </div>

        <div class="mb-3">
            <label for="password_name">Password </label>
            <input type="text" class="form-control" id="password_name"/>
        </div>

        <div class="mb-3">
            <label for="confirm_password_name">Confirm Password </label>
            <input type="text" class="form-control" id="conform_password_name" name="confirm_password" />
        </div>

        <div class="col-12 col-sm-3 float-end">
                    <button type="submit" class="btn btn-success w-100">Save</button>
        </div>
</div>
<?=$this->endSection('content') ?>