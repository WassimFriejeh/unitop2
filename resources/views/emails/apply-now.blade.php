<strong>User details: </strong><br>

<strong>First Name: </strong>{{ $data->first_name }} <br>

<strong>Last Name: </strong>{{ $data->last_name }} <br>

<strong>Email: </strong>{{ $data->email }} <br>

<strong>Phone Number: </strong>{{ $data->phone_number }} <br>

<strong>Attached CV*: </strong>
<a href="{{ $data->getAttachedCvAttribute()['file'] }}" target="_blank">Download CV</a>
<br>

<strong>Position*: </strong>{{ $data->position }} <br>


<strong>Message: </strong>{{ $data->message }} <br><br>