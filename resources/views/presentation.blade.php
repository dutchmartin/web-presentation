<!doctype html>
<html lang="{{ config('app.locale') }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>presentation</title>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

		<link rel="stylesheet" href="{{URL::asset('css/reveal.css')}}">
		<link rel="stylesheet" href="{{URL::asset('css/theme/black.css')}}">

		<!-- Theme used for syntax highlighting of code -->
		<link rel="stylesheet" href="{{URL::asset('lib/css/zenburn.css')}}">

	</head>
	<body>
		<div class="reveal">

			<div class="slides">
				@foreach ($slides as $slide)
					<section data-markdown>
						<script type="text/template">
						{{ $slide->slidecode }}
					</script>
					</section>
				@endforeach
			</div>
		</div>

		<script src="{{URL::asset('lib/js/head.min.js')}}"></script>
		<script src="{{URL::asset('js/reveal.js')}}"></script>

		<script>
			// More info https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				history: true,

				// More info https://github.com/hakimel/reveal.js#dependencies
				dependencies: [
					{ src: "{{URL::asset('plugin/markdown/marked.js')}}" },
					{ src: "{{URL::asset('plugin/markdown/markdown.js')}}" },
					{ src: "{{URL::asset('plugin/notes/notes.js')}}", async: true },
					{ src: "{{URL::asset('plugin/highlight/highlight.js')}}", async: true, callback: function() { hljs.initHighlightingOnLoad(); } }
				]
			});
		</script>
	</body>
</html>
