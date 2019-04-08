<!DOCTYPE html>
<html>
<head>
	<title>Laravel CRUD Application</title>
	 <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
	 <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
	 <script type="text/javascript" src="{{ url('js/jquery.js') }}"></script>
	 <script type="text/javascript" src="{{ url('js/bootstrap.js') }}"></script>
   <link rel="shortcut icon" href="http://himalkom.cs.ipb.ac.id/wp-content/uploads/2014/09/aaas-300x300.png">
</head>

<body>
	<div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ url('/create') }}">Create</a>
                      </li>
                    </ul>
                </div>
            </div>
        </nav>
</div>