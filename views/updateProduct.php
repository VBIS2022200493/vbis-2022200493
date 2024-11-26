<?php

use app\models\ProductModel;
/**  @var $params ProductModel */

?>
<div class="card">
    <form action="/processUpdateProduct" method="POST">
        <input type="hidden" name="product_id" value="<?php echo $params->product_id; ?>">
        <div class="card-header pb-0">
            <div class="d-flex align-items-center">
                <p class="mb-0">Edit Product</p>
                <button class="btn btn-success btn-sm ms-auto" type="submit">Save</button>
            </div>
        </div>
        <div class="card-body">
            <p class="text-uppercase text-sm">Product Information</p>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Name</label>
                        <input name="name" class="form-control" type="text" value="<?php echo $params->name; ?>" onfocus="focused(this)" onfocusout="defocused(this)">
                        <?php
                        if ($params != null && $params->errors != null) {
                            foreach ($params->errors as $attribute => $error) {
                                if($attribute == 'name') {
                                    echo "<span class='text-danger'>$error[0]</span>";
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Description</label>
                        <input name="description" class="form-control" type="text" value="<?php echo $params->description; ?>" onfocus="focused(this)" onfocusout="defocused(this)">
                        <?php
                        if ($params != null && $params->errors != null) {
                            foreach ($params->errors as $attribute => $error) {
                                if($attribute == 'description') {
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
