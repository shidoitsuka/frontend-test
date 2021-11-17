<?php
$data = array(
    0 => array(
        'id' => 1,
        'name' => 'Foo',
        'image' => array(
            'url' => '/pub/foo.jpg'
        )
    ) ,
    1 => array(
        'id' => 2,
        'name' => 'Bar',
        'image' => array(
            'url' => '/pub/bar.jpg'
        )
    ) ,
    2 => array(
        'id' => 3,
        'name' => 'Foo Bar',
        'image' => array(
            'url' => '/pub/foobar.jpg'
        )
    )
);
$newData = array();
foreach ($data as $key => $value)
{
    echo $key . " => " . $value['image']['url'] . "\n";
    array_push($newData, $value);
}

// newData dapat di olah lagi jika diperlukan.
?>