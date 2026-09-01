<h1>Edit Internship Application</h1>

<form  action="{{ route('applications.update', $application) }}" method="POST"
    method="POST"
>
  

    @csrf
    @method('PUT')


    <label>Full Name</label>

    <input
        type="text"
        name="fullName"
        value="{{ old('fullname',$application->full_name) }}"
    >
@error('fullName')
    <p style="color: red;">
        {{ $message }}
    </p>
@enderror

    <br><br>


    <label>Email</label>

    <input
        type="email"
        name="email"
        value="{{ old('email',$application->email) }}"
    >
@error('email')
    <p style="color: red;">
        {{ $message }}
    </p>
@enderror

    <br><br>


    <label>Phone Number</label>

    <input
        type="text"
        name="phoneNumber"
        value="{{ old('phoneNumber', $application->phone_number) }}"
    >
@error('phoneNumber')
    <p style="color: red;">
        {{ $message }}
    </p>
@enderror

    <br><br>


    <label>Institution</label>

    <input
        type="text"
        name="institution"
        value="{{ old('institution',$application->institution) }}"
    >
@error('institution')
    <p style="color: red;">
        {{ $message }}
    </p>
@enderror

    <br><br>


    <label>Program</label>
    
    <input
        type="text"
        name="program"
        value="{{ old('progam',$application->program) }}"
    >
@error('program')
    <p style="color: red;">
        {{ $message }}
    </p>
@enderror

    <br><br>


    <label>Area</label>
    <input
        type="text"
        name="area"
        value="{{ old('area', $application->area) }}"
    >
@error('area')
    <p style="color: red;">
        {{ $message }}
    </p>
@enderror

    <br><br>


    <label>Reason</label>
    <textarea name="reason">{{ old('reason', $application->reason) }}</textarea>
@error('reason')
    <p style="color: red;">
        {{ $message }}
    </p>
@enderror

    <br><br>


    <button type="submit">
        Update Application
    </button>

</form>