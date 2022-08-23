<?php


define('PAGINATE',15);

function getLocalLang()
{
    return App()->getLocale() =="ar" ?"css-rtl":"css";
}

function getLocalLangFront()
{
    return App()->getLocale() =="ar" ?"-rtl":"";
}

function getLocalLangDir()
{
    return App()->getLocale() =="ar" ?"rtl":"ltr";
}


function saveImage($folder,$Image)
{

    $Image->store('/',$folder);
    $imageName = $Image->hashName();
    return $imageName;
}

function saveMulitImage($folder,$Images)
{


    foreach($Images as $image)
    {

        $Image->store('/',$folder);
        $imageName = $Image->hashName();
        $data[] = $imageName;

    }

    return $data;
}

function deleteImage($image)
{
    $banner = base_path('assets/images/' . $image);
    unlink($banner);
}
