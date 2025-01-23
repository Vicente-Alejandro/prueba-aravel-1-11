@if (session('success'))
<div class="alert alert-warning">
    <ul>
        @foreach (session('success') as $customSuccess)
        <li>{{ $customSuccess }}</li>
        @endforeach
    </ul>
</div>
@endif