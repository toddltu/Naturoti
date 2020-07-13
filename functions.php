<?php
function blockFixer(String $name = null)
{
    global $Wcms;
    $value = '';

    $list = [
        // head
        'head_title' => 'Ekologiški drabužiai - saugūs ir jūsų vaikams ir gamtai',
        'head_underText' => 'lorem ipsum is simply dummy text of the printing and typesetiting industry.',
        // b0
        'b0_h2' => 'Ekologiški drabužiai - saugūs ir jūsų vaikams ir gamtai',
        'b0_underText' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley',
        'b0_ul' => '<li>Tik draugiškiausiai gamtai dalykai</li><li>Tik draugiškiausiai gamtai dalykai</li><li>Tik draugiškiausiai gamtai dalykai</li><li>Tik draugiškiausiai gamtai dalykai</li>',
        'b0_button' => 'IŠSIRINKTI DRABUŽIUKUS',
        // b1
        'b1_h2' => 'Ekologiški drabužiai - saugūs ir jūsų vaikams ir gamtai',
        'b1_underText' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley',
        'b1_ul' => '<li>Tik draugiškiausiai gamtai dalykai</li><li>Tik draugiškiausiai gamtai dalykai</li><li>Tik draugiškiausiai gamtai dalykai</li><li>Tik draugiškiausiai gamtai dalykai</li>',
        'b1_button' => 'IŠSIRINKTI DRABUŽIUKUS',
        // b2
        'b2_h2' => 'Ekologiški drabužiai - saugūs ir jūsų vaikams ir gamtai',
        'b2_underText' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley',
        'b2_imagesL1' => '<a href="'.$Wcms->asset('assets/img/img_2.jpg').'"><img data-src="'.$Wcms->asset('assets/img/img_2.jpg').'" uk-img></a><a href="'.$Wcms->asset('assets/img/img_3.jpg').'"><img data-src="'.$Wcms->asset('assets/img/img_3.jpg').'" uk-img></a>',
        'b2_imagesL2' => '<a href="'.$Wcms->asset('assets/img/img_4.jpg').'"><img data-src="'.$Wcms->asset('assets/img/img_4.jpg').'" uk-img></a><a href="'.$Wcms->asset('assets/img/img_5.jpg').'"><img data-src="'.$Wcms->asset('assets/img/img_5.jpg').'" uk-img></a>',
        'b2_button' => 'IŠSIRINKTI DRABUŽIUKUS',
        // b3,
        'b3_h2' => 'Klientai, kurie myli savo vaikus ir yra socialiai atsakingi',
        'b3_block_a' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer<br/><br/>took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially<br/><br/>unchanged. It was popularised in the 1960s with the release of Letraset sheets containing',
        'b3_block_b' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer<br/><br/>took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially<br/><br/>unchanged. It was popularised in the 1960s with the release of Letraset sheets containing',
        'b3_button' => 'IŠSIRINKTI DRABUŽIUKUS',
        // b4
        'b4_h2' => 'Saugokime vaikų sveikatą ir ateitį',
        'b4_underText' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem  Ipsum has been the industry\'s standard dummy text ever',
        'b4_button' => 'IŠSIRINKTI DRABUŽIUKUS'
    ];

    if($name !== null && !empty($name)) {
// Check if the newEditableArea area is already exists, if not, create it
        if (empty($Wcms->get('blocks', $name))) {
            $content = (!empty($list[$name]))? $list[$name] : 'Your content here.';
            $Wcms->set('blocks', $name, 'content', $content);
        }

// Fetch the value of the newEditableArea from database
        $value = $Wcms->get('blocks', $name, 'content');

// If value is empty, let's put something in it by default
        if (empty($value)) {
            $value = '';
        }
    }
    if ($Wcms->loggedIn) {
// If logged in, return block in editable mode
        return $Wcms->block($name);
    }
// If not logged in, return block in non-editable mode
        return $value;
}

?>
