<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('hotel\back\datphong\thuviencss2')
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    @yield('cssRating')
    <title>Home page</title>
</head>

<style>
    /* Style The Dropdown Button */
    .dropbtn {
        background-color: #fff;
        color: black;
        padding: 10px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        min-width: 160px;

    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        border-style: solid;
        font-size: 13px;
        border-width: 2px;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #f1f1f1;
        border: 10px;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
        /* border: 10px; */
    }

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {
        /* background-color: #3e8e41; */
    }


    /* table */
    .styled-table {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 1.5em;
        font-family: sans-serif;
        min-width: 70%;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .styled-table thead tr {
        background-color: rgb(10, 172, 80);
        color: #ffffff;
        text-align: left;
    }

    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
    }

    .styled-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid rgb(10, 172, 80);
    }

    .styled-table tbody tr.active-row {
        font-weight: bold;
        color: rgb(10, 172, 80);
    }

    /* rating */

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

/* * {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
} */

:root {
	--yellow: #FFBD13;
	--blue: #4383FF;
	--blue-d-1: #3278FF;
	--light: #F5F5F5;
	--grey: #AAA;
	--white: #FFF;
	--shadow: 8px 8px 30px rgba(0,0,0,.05);
}

body {
	background: var(--light);
	/* display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	padding: 1rem; */
}

.wrapper {
	background: var(--white);
	padding: 2rem;
	max-width: 576px;
	width: 100%;
	border-radius: .75rem;
	box-shadow: var(--shadow);
	text-align: center;
}
.wrapper h3 {
	font-size: 1.5rem;
	font-weight: 600;
	margin-bottom: 1rem;
}
.rating {
	display: flex;
	justify-content: center;
	align-items: center;
	grid-gap: .5rem;
	font-size: 2rem;
	color: var(--yellow);
	margin-bottom: 2rem;
}
.rating .star {
	cursor: pointer;
}
.rating .star.active {
	opacity: 0;
	animation: animate .5s calc(var(--i) * .1s) ease-in-out forwards;
}

@keyframes animate {
	0% {
		opacity: 0;
		transform: scale(1);
	}
	50% {
		opacity: 1;
		transform: scale(1.2);
	}
	100% {
		opacity: 1;
		transform: scale(1);
	}
}


.rating .star:hover {
	transform: scale(1.1);
}
textarea {
	width: 100%;
	background: var(--light);
	padding: 1rem;
	border-radius: .5rem;
	border: none;
	outline: none;
	resize: none;
	margin-bottom: .5rem;
}
.btn-group {
	display: flex;
	grid-gap: .5rem;
	align-items: center;
}
.btn-group .btn {
	padding: .75rem 1rem;
	border-radius: .5rem;
	border: none;
	outline: none;
	cursor: pointer;
	font-size: .875rem;
	font-weight: 500;
}
.btn-group .btn.submit {
	background: var(--blue);
	color: var(--white);
}
.btn-group .btn.submit:hover {
	background: var(--blue-d-1);
}
.btn-group .btn.cancel {
	background: var(--white);
	color: var(--blue);
}
.btn-group .btn.cancel:hover {
	background: var(--light);
}

span {
    font-size: 20px;
}

/* rating */

.rating {
    display: table-row;
}

.rating:not(:checked) > input {
    position: absolute;
    display: none;
}

.rating:not(:checked) > label::before {
    content: '★ ';
}

.rating:not(:checked) > label {
    float: right;
    width: 1em;
    overflow: hidden;
    font-size: 44px;
    white-space: nowrap;
    color: #efefef;
    cursor: pointer;
}

.rating:not(:checked) > label:hover,
.rating:not(:checked) > label:hover ~ label {
    color: #af8210;
}

.rating > input:checked ~ label {
    color: #ffc83d;
}

.rating > input:checked ~ label:hover,
.rating > input:checked ~ label:hover ~ label,
.rating > label:hover ~ input:checked ~ label,
.rating > input:checked + label:hover,
.rating > input:checked + label:hover ~ label {
    color: #ffc83d;
}

.rating .result::before {
    content: '';
    display: block;
    font-family: 'Poppins', sans-serif;
    font-size: 15px;
    text-align: center;
    font-weight: 600;
    margin-top: 35px;
    margin-bottom: 15px;
    color: #746cf7;
}

.rating #oneStar:checked ~ .result::before {
    content: 'Rất tệ 😖';
}
.rating #twoStar:checked ~ .result::before {
    content: 'Tệ 😒';
}
.rating #threeStar:checked ~ .result::before {
    content: 'Được 🙂';
}
.rating #fourStar:checked ~ .result::before {
    content: 'Tốt 😊';
}
.rating #fiveStar:checked ~ .result::before {
    content: 'Tuyệt vời 😍';
}
</style>

<body id="page-top">
    
    @include('hotel\back\datphong\header')

    {{-- Main --}}
    @yield('main')
    
    @include('hotel\back\datphong\footer')
    
    @include('hotel\back\datphong\thuvienjs2')

    @yield('jsRating')

</body>

</html>