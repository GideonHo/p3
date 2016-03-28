@extends('master')

@section('head')
    <link href="css/style.css" rel="stylesheet">
@stop

@section('main')
	<form action="/text" method="post">

	    {{ csrf_field() }}
	    
	    <fieldset>

	        <div class="title">
	            <h1>Lorem Ipsum Generator</h1>
	        </div>

	        <div id="contact-details">

	            <p>How many paragraphs do you want: </p>
        		<p>
        			<input type="text" id="paragraph" name="paragraph"  value={{ $paragraph or '0' }} style="text-align: center">
		           	<div class='error'>
						@if(count($errors)>0)
			           		{{ 'Number of Paragraphs must be between 1 and 10' }}
			           	@endif
		           	</div>
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
						if (isset($_POST['paragraph'])) {
							$generator = new Badcow\LoremIpsum\Generator();
							$text = $generator->getParagraphs($_POST['paragraph']);
							echo implode('<p>', $text );
						}
					?>
				</div>
	        </div>

	    </fieldset>

	</form>

	@stop