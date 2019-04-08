<!doctype html>
<html {!! get_language_attributes() !!}>
<head>
	<meta charset='{{ bloginfo( "charset" ) }}'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- SITE TITLE -->
	<title>{{ the_title() }}</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	@php wp_head(); @endphp
</head>