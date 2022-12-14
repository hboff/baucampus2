@extends('layout')
@section('content')
<style>
.zooma {
	overflow: hidden;
}
.zooma img {
	width: 100%;
	height: auto;
	/* SCALE */
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-ms-transform: scale(1);
	-o-transform: scale(1);
	transform: scale(1);
	/* VERZÖGERUNG */
	-webkit-transition: all 0.3s linear;
	-moz-transition: all 0.3s linear;
	-ms-transition: all 0.3s linear;
	-o-transition: all 0.3s linear;
	transition: all 0.3s linear;
}
.zooma img:hover {
	-webkit-transform: scale(1.2);
	-moz-transform: scale(1.2);
	-ms-transform: scale(1.2);
	-o-transform: scale(1.2);
	transform: scale(1.2);
}
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}
th{
background-color:#435761;
color:#fff;
}

th, td {
  text-align: left;
  padding: 8px;
  min-width: 100px;
}

tr:nth-child(even){background-color: #f2f2f2}

.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
 margin-right:20px;
 margin-left:20px;

  border-radius: 50%;
 object-fit: cover; 
 object-position:center;
}
.heading-separator {
    position: relative;
    margin: 0;
    padding-bottom: 70px;
color: #26292c;

}

.heading-separator:after {
    content: "";
    position: absolute;
    bottom: 25px;
    left: 0;
    right: 0;
    height: 2px;
    width: 50px;
    margin: 0 auto;
    background-color: #267df4;
}
/* Section: Features */
.section-features h2 {
    padding-bottom: 40px;
    font-size: 30px;
}

.section-features img {
    position: absolute;
    right: 15px;
    height: 380px;
}
.subheading-text {
    font-size: 20px;
    font-style: italic;
}

/* Section: Services */
.section-services .subheading-text {
    margin-bottom: 90px;
}
p + p {
    margin-top: 1vh;
}

</style>



<title>Gutachter Baucampus</title>
<meta name="Description" content="Gutachter Baucampus">


<body class="w3-light-grey">
<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Gutachter</h2>
                <p class="subheading-text w3-center">Unsere Bausachverständigen</p>
        </div>


          <table>
  <tr>
    <th>Gutachter</th>
    <th>Anschrift</th>
    <th>Kontakt</th>
  </tr>
  
  @foreach($gutachter as $gutachters)
  <tr>
    <td><a  href="/gutachter/{{$gutachters['UrlName']}}" target="_blank"><img src="/img/{{$gutachters['Photo']}}" style="vertical-align: middle; width: 100px; height: 100px; border-radius: 50%; object-fit: cover; object-position: center;">{{$gutachters['FirstName']}} {{$gutachters['LastName']}}</a></td>
    <td>{{$gutachters['Adress']}}<br/>{{$gutachters['PostalCode']}} {{$gutachters['City']}}</td>
    <td>{{$gutachters['Phone']}} <br/>{{$gutachters['Email']}}<br/><a  href="https://www.baugutachter-kiel.eu/" target="_blank">www.baugutachter-kiel.eu/</a></td>

</tr>
  @endforeach

</table>

    </section><!-- End About Section -->
<!-- END BLOG ENTRIES -->
</div>

<!-- END GRID -->
</div><br>

@endsection