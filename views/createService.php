<?php

use app\models\ServiceModel;
/**  @var $params ServiceModel */

?>
<div class="card">
    <form action="/processCreateService" method="POST">
        <div class="card-header pb-0">
            <div class="d-flex align-items-center">
                <p class="mb-0">Create Service</p>
                <button class="btn btn-success btn-sm ms-auto" type="submit">Save</button>
            </div>
        </div>
        <div class="card-body">
            <p class="text-uppercase text-sm">Service Information</p>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Service name</label>
                        <input name="service_name" class="form-control" type="text" value="<?php echo $params->service_name; ?>" onfocus="focused(this)" onfocusout="defocused(this)">
                        <?php
                        if ($params != null && $params->errors != null) {
                            foreach ($params->errors as $attribute => $error) {
                                if($attribute == 'service_name') {
                                    echo "<span class='text-danger'>$error[0]</span>";
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Store name</label>
                        <input name="store_name" class="form-control" type="text" value="<?php echo $params->store_name; ?>" onfocus="focused(this)" onfocusout="defocused(this)">
                        <?php
                        if ($params != null && $params->errors != null) {
                            foreach ($params->errors as $attribute => $error) {
                                if($attribute == 'store_name') {
                                    echo "<span class='text-danger'>$error[0]</span>";
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Location</label>
                        <input name="location" class="form-control" type="text" value="<?php echo $params->location; ?>" onfocus="focused(this)" onfocusout="defocused(this)">
                        <?php
                        if ($params != null && $params->errors != null) {
                            foreach ($params->errors as $attribute => $error) {
                                if($attribute == 'location') {
                                    echo "<span class='text-danger'>$error[0]</span>";
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
