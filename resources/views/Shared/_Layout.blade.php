<html>
	<head>
			<meta charset="utf-8" />
   <title>@yield('titulo') - Sistema</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
   <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
   <meta content="Coderthemes" name="author" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />

		@yield('css')
	</head>
	<body>
		
		@yield('conteudo')

		<script src="../assets/js/jquery.min.js"></script>
		@yield('scripts')
	</body>
</html>