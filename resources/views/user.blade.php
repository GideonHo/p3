@extends('master')

@section('head')
    <link href="css/style.css" rel="stylesheet">
@stop

@section('main')
	<form action="/user" method="post">

	    {{ csrf_field() }}
	    
	    <fieldset>

	        <div class="title">
	            <h1>Random User Generator</h1>
	        </div>

	        <div id="contact-details">

				<p>
					<label>Number of Users?: </label> 
        			<input type="integer" id="user" name="user"  value={{ $user or '0' }} style="text-align: center">
		           	<div class='error'>
						@if(count($errors)>0)
			           		{{ 'Number of Users must be between 1 and 10' }}
			           	@endif
		           	</div>
        		</p>
				<p>
					<label for="email">Email?: </label> 
					<input type="checkbox" name="email" id="email">
				</p>
				<p>
					<label for="password">Password?: </label> 
					<input type="checkbox" name="password" id="password">
				</p>
	            <p><label>  </label><input type="submit" id="submit" name="submit" value="Submit"></p>  
	            <p><label>  </label><input type="reset" id="reset" name="submit" value="Cancel"></p>    

			</div>

	        <div class="title">
	            <h1>Results</h1>
	        </div>

	        <div id="result" style="height: 100%; text-align: justify">
	        	<div id="contact-details" style="min-height: 400px">
					<?php
						if (isset($_POST['user'])) {
							// use the factory to create a Faker\Generator instance
							$faker = Faker\Factory::create('en_US');

							// array to store all the randonuser
							$randomuser= array();

							//for limited no of users
							$number_of_randomuser = $_POST['user'];
							for ($i=1; $i <= $number_of_randomuser; $i++) {

							echo "<h1>"."User_".$i.": "."</h1>"."<br>";
							echo "Name: ".$faker->name."<br>";
							echo "City: ".$faker->city."<br>";

							if (isset($_POST['email'])){
								echo "Email: ".$faker->email."<br>";
							}

							echo "Phone Number: ".$faker->phoneNumber."<br>";
							
							if (isset($_POST['password'])){
								echo "Password: ".$faker->password."<br>";
							}

							echo "<br>";
							}
						}
					?>
				</div>
	        </div>

	    </fieldset>

	</form>

@stop