<?php echo $this->Html->css('twitter.report'); ?> 

<div>
キーワード設定：
</div>

<div>
<?php
 $options = array(
   'check1' => 'カタログが欲しい',
   'check2' => '価格が知りたい',
   'check3' => 'サンプル等を試したい',
   'check4' => '詳細について商談がしたい',
   'check5' => 'その他のお問い合わせ',
   );

 echo $this->Form->input( 'Mypage.menu' , array(
   'type' => 'select',
   'class' => 'checkbox',
   'multiple' => 'checkbox',
   'options'=> $options,
   'label' => 'アカウントの選択',
    )
   );
?>
</div>

