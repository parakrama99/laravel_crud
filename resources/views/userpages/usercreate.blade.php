@if (session('success'))
    {{ session('success') }}
@endif

<form action="{{ route('user.store') }}" method="post">
    @csrf
    <input type="text" name="name" value="{{ old('name') }}">
    @error('name')
        <div>{{ $message }}</div>
    @enderror

    <input type="email" name="email" value="{{ old('email') }}">
    @error('email')
        <div>{{ $message }}</div>
    @enderror

    <input type="password" name="password">
    @error('password')
        <div>{{ $message }}</div>
    @enderror

    <input type="password" name="password_confirmation">
    <button type="submit">Create</button>
</form>
