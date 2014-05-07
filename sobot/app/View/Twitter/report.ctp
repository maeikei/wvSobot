<?php echo $this->Html->css('twitter.report'); ?> 

<div id="keyword">
<h2>キーワード設定</h2>
	<?php
		echo $this->Form->create('task', array('type' => 'post'));
		echo $this->Form->input('keyword',array('label' => 'キーワード:'));
		echo $this->Form->end('+');
	?>
</div>

<div id="account">
<?php
/*
 $options = array(
   'check1' => 'カタログが欲しい',
   'check2' => '価格が知りたい',
   'check3' => 'サンプル等を試したい',
   'check4' => '詳細について商談がしたい',
   'check5' => 'その他のお問い合わせ',
   );
*/

 echo $this->Form->input( 'Mypage.menu' , array(
   'type' => 'select',
   'class' => 'checkbox',
   'multiple' => 'checkbox',
   'options'=> $twitter_name,
   'label' => 'アカウントの選択',
    )
   );
?>
</div>

