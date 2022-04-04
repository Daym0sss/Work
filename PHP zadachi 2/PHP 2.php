<?php
    include 'Form.php';
    $form=new Form();
    echo $form->open(['action'=>'index.php', 'method'=>'POST']);
    echo $form->input(['type'=>'text', 'placeholder'=>'Ваше имя', 'name'=>'name']);
    echo $form->password(['placeholder'=>'Ваш пароль', 'name'=>'pass']);
    echo $form->submit(['value'=>'Отправить']);
    echo $form->close();
    echo $form->textarea(['placeholder']);
