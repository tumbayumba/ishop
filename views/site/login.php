<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
?>
<!-- content page -->
<section class="bgwhite p-t-66 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-lg-offset-4 col-md-offset-6 p-b-30">
                <form class="leave-comment">
                    <h4 class="m-text26 p-b-36 p-t-15">Login</h4>

                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="username" placeholder="Login">
                    </div>

                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="password" placeholder="Password">
                    </div>

                    <div class="w-size25">
                        <!-- Button -->
                        <button type="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">SignIn</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
