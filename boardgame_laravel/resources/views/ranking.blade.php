<<<<<<< HEAD
<html>



<h1>ランキング</h1>

<table>

<!-- 10位までのランキングを表示 -->
	@foreach($items as $item)
		<div>
			{{ $rank }}位 <!--順位-->
			<img src="{{$item->item_id}}.jpg"> <!--商品画像-->
			{{$item->item_name}} <!--商品名-->
			{{$item->item_price}} <!--商品価格-->
			{{$item->sale_num}} <!--販売個数-->
		</div>
		
		<?php $rank++; ?>
	@endforeach
	
	
</table>


=======
<html>



<h1>ランキング</h1>

<table>

<!-- 10位までのランキングを表示 -->
	@foreach($items as $item)
		<div>
			{{ $rank }}位 <!--順位-->
			<img src="{{$item->item_id}}.jpg"> <!--商品画像-->
			{{$item->item_name}} <!--商品名-->
			{{$item->item_price}} <!--商品価格-->
			{{$item->sale_num}} <!--販売個数-->
		</div>
		
		<?php $rank++; ?>
	@endforeach
	
	
</table>


>>>>>>> ae5c1e8d27c0d3bf534ad7675013d8032db61f34
</html>