<html>
	<form method="post" action="{{route('student.store')}}">
	@csrf
		Name:<input type="text" value="" name="name"/><br/>
		Course:<input type="text" value="" name="course"/><br>
		Mobno:<input type="text" value="" name="no"/><br>
		<button type="submit">ADD</button>
	</form>
</html>