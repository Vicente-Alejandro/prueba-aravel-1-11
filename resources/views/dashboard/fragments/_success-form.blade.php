@if (session('success'))
<div class="card card-success">
    <ul class="list-disc list-inside">
        @foreach (session('success') as $customSuccess)
        <li>{{ $customSuccess }}</li>
        @endforeach
    </ul>
</div>
@endif