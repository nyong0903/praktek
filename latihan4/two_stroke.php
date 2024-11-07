<?php 
    require_once 'class_yamaha.php';

    $fizr = new yamaha();
    $ninja = new yamaha();

    $fizr->set_name('Fizr');
    $fizr->set_color('Red');
    $ninja->set_name('Ninja Kawasaki');
    $ninja->set_color('Yellow');

    echo 'Nama Motor '.$fizr->get_name().' Warnanya Red'.$fizr->get_color();
    echo '<br/>Nama Motor '.$ninja->get_name().' Warnanya Yellow'.$ninja->get_color();

?>