<?php
function action_index(){
    return renderViewWithTemplate("main","default",[
        "title"=>"Главная"
    ]);
}
function action_contacts(){
    $data=[];
    $data["title"]="Контакты";


    return renderViewWithTemplate("contacts","default",$data);
}