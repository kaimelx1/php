<h1>Edit user</h1>

<?php

use \yii\widgets\ActiveForm;

$form = ActiveForm::begin(['class' => 'form-horizontal']);
echo $form->field($user, 'username')->textInput(['autofocus' => true]);
echo $form->field($user, 'password')->passwordInput(['value' => '']);
echo '<div><button type="submit" class="btn btn-primary">Edit</button> <a href="/crud" class="btn btn-success">Back to list</a></div>';

ActiveForm::end();