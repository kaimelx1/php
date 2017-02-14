<h1>Registration</h1>

<?php

use \yii\widgets\ActiveForm;

$form = ActiveForm::begin(['class' => 'form-horizontal']);
echo $form->field($model, 'username')->textInput(['autofocus' => true]);
echo $form->field($model, 'password')->passwordInput();
echo '<div><button type="submit" class="btn btn-primary">Submit</button></div>';

ActiveForm::end();
