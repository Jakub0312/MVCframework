<h1>Create and account</h1>
<?php $form = \app\core\form\Form::begin('', "post") ?>
    <?php echo $form->field($model, 'firstname')  ?>
    <?php echo $form->field($model, 'lastname')  ?>
    <?php echo $form->field($model, 'email')  ?>
    <?php echo $form->field($model, 'password')  ?>
    <?php echo $form->field($model, 'confirmPassword')  ?>

    <button type="submit" class="btn btn-primary">Submit</button>
<?php \app\core\form\Form::end() ?>
