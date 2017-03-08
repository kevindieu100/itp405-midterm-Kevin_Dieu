<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>Question 2</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>

	<div class="container">

  	<table class="table">
  		<thead>
  			<tr>
  				<th colspan ="">Book Title</th>
  				<th colspan=""> Author First Name</th>
          <th colspan=""> Author Last Name</th>
          <th colspan=""> Publisher </th>
  			</tr>
  		</thead>

  		<tbody>
  			@foreach($books as $book)
  				<tr>
  					<td>{{ $book->title }}</td>
            <td>{{ $book->author->first_name }} </td>
            <td>{{ $book->author->last_name }} </td>
            <td>{{ $book->publisher->name }} </td>
  				</tr>
  			@endforeach
  		</tbody>
  	</table>

	</div>

</body>

</html>
