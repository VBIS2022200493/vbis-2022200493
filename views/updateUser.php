<?php

use app\models\UserModel;
/**  @var $params UserModel */

?>
<div class="card">
    <form action="/processUpdateUser" method="POST">
        <input type="hidden" name="user_id" value="<?php echo $params->user_id; ?>">
        <div class="card-header pb-0">
            <div class="d-flex align-items-center">
                <p class="mb-0">Edit Profile</p>
                <button class="btn btn-success btn-sm ms-auto" type="submit">Save</button>
            </div>
        </div>
        <div class="card-body">
            <p class="text-uppercase text-sm">User Information</p>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Email address</label>
                        <input name="email" class="form-control" type="email" value="<?php echo $params->email; ?>" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">First name</label>
                        <input name="first_name" class="form-control" type="text" value="<?php echo $params->first_name; ?>" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Last name</label>
                        <input name="last_name" class="form-control" type="text" value="<?php echo $params->last_name; ?>" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
