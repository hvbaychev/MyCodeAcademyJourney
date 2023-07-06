<!DOCTYPE html>
<html>
<head>
	<title>Marine Training Platform</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Montserrat', sans-serif;
		}
		body {
			background-color: #f2f2f2;
		}
		header {
			background-color: #1e3c72;
			color: white;
			display: flex;
			align-items: center;
			justify-content: space-between;
			padding: 10px 50px;
		}
		header img {
			height: 50px;
		}
		header nav {
			display: flex;
			align-items: center;
		}
		header nav a {
			color: white;
			text-decoration: none;
			margin-left: 20px;
		}
		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			margin: 50px;
		}
		.card {
			width: 300px;
			margin: 30px;
			border-radius: 10px;
			overflow: hidden;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
			transition: transform 0.2s ease-in-out;
		}
		.card:hover {
			transform: translateY(-5px);
		}
		.card img {
			width: 100%;
			height: 200px;
			object-fit: cover;
			object-position: center;
		}
		.card h2 {
			padding: 20px;
			font-size: 24px;
			font-weight: 700;
			text-align: center;
			color: #1e3c72;
		}
		.card p {
			padding: 0 20px 20px;
			font-size: 16px;
			font-weight: 400;
			text-align: center;
			color: #666;
			line-height: 1.5;
		}
		.btn {
			display: inline-block;
			padding: 10px 20px;
			font-size: 16px;
			font-weight: 700;
			text-align: center;
			color: white;
			background-color: #1e3c72;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			margin: 20px;
			transition: background-color 0.2s ease-in-out;
		}
		.btn:hover {
			background-color: #143154;
		}
		footer {
			background-color: #1e3c72;
			color: white;
			text-align: center;
			padding: 10px;
			position: absolute;
			bottom: 0;
			width: 100%;
			height: 50px;
			line-height: 50px;
		}
	</style>
	<script>
		window.addEventListener('DOMContentLoaded', () => {
			const cards = document.querySelectorAll('.card');
			cards.forEach(card => {
				card.addEventListener('click', ()
