@extends('layouts.layouts')


	@section('content')

<div>
	<p> Create new pizza</p>

	<form action="/pizzas/create" method="POST">
		@csrf <!-- this prevents laravel from stopping-->

		<label for="name"> Your name</label>
		<input type="text" name="fname" id="fname"><br>

			<label for="name"> Pizza name</label>
		<input type="text" name="name" id="name"><br>

     <label for="name"> Pizza type</label>
		<input type="text" name="type" id="type"><br><br>

		 <label for="price"> Price</label>
		<input type="number" name="price" id="price"><br><br>

<!-- use the [] to let laravel capture array values-->

		 <label for="extras"> <u>Extras</label></u></label><br>
		<input type="checkbox" name="extras[]" id="extras" value="ponmo"> Ponmo<br>
			<input type="checkbox" name="extras[]" id="extras" value="ginger"> Ginger<br>
				<input type="checkbox" name="extras[]" id="extras" value="big_fish">Big Fish<br>
					<input type="checkbox" name="extras[]" id="extras" value="coke">Coke<br>
						<input type="checkbox" name="extras[]" id="extras" value="biscuit">Biscuit<br>


		<input type="submit" value="Make your order!" name="create" >
	</form>
</div>



@endsection